<?php
    $lastpage = $_SERVER['HTTP_REFERER'];
    if (!file_exists('encryptor.php')) die("Something went wrong or signup page missing!
<br>Notify the admins <a href=\"contactMe.php\">here</a> if the problem still exists even after refresh!<br>");
require_once("encryptor.php");
    session_start();
    if( isset($_POST['email']) && isset($_POST['pw']) ){
        if(empty($_POST['email']) || empty($_POST['pw']))
            if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                echo "Fill both fields to login!";
            else
                echo "Mbushi te dyja fushat per tu kycur!";
        else{
            //to limit connections to the database
            //memcache will be used when we get popular
            if(isset($_SESSION['allowed']) && $_SESSION['allowed'] != false && isset($_SESSION['allowed'])
                && $_SESSION['verified']){
                if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                    header('Location: home_page.html');
                else
                    header('Location: faqja_kryesore.html');
            }

            else{
                //this will change to a MySQL DB we will buy
                if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
                    $email = $conn->real_escape_string(strtolower(trim($_POST['email'])));
                    $pw = $conn->real_escape_string($_POST['pw']);
                    $res = $conn->query("SELECT id,email,pw,kryp,status
                     FROM kamuriTBL WHERE email='$email';");
                    $numRows = mysqli_num_rows($res);
                    if($numRows<=0){
                        if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                          echo "Invalid email/password";
                        else
                          echo "Kombinim email/password i gabuar!";
                        $_SESSION['allowed'] = false;
                        $_SESSION['id'] = -1;
                        $_SESSION['verified'] = false;
                    }
                    else{
                        $tmp = $res->fetch_assoc();
                        $salt = $tmp['kryp'];
                        $encPw = $tmp['pw'];
                        $pw = substr($salt,0, 25).$pw.substr($salt,25, 25);
                        $runs = 1828;
                        $key_length = 50;
                        $pw = pbkdf2('sha512', $pw, $salt,$runs, $key_length,false);
                        if(strcmp($pw,$encPw)==0){
                            $ip = getIP_By_Force();
                            $_SESSION['id'] = $tmp['id'];
                            $conn->query("UPDATE kamuriTBL SET lastLoginIP='".$ip."' WHERE email='".$email."';");
                            //if the user's account is still unverified!
                            if(strcmp($tmp['status'],'pen')==0){
                                $_SESSION['allowed'] = true;
                                $_SESSION['verified'] = false;
                                if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                                    header("Location: verify.php");
                                else
                                    header("Location: verify_al.php");
                            }
                            else{
                                if(strcmp($tmp['status'],'act'==0)){
                                    $_SESSION['allowed'] = true;
                                    $_SESSION['verified'] = true;
                                    $res->free();
                                    //here check for status and redirect accordingly
                                    if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                                        header('Location: home_page.html');
                                    else
                                        header('Location: faqja_kryesore.html');
                                }
                                else if (strcmp($tmp['status'],'kik'==0)) {
                                    //account suspended temporarily 
                                    $_SESSION['allowed'] = false;
                                    $_SESSION['verified'] = true;
                                    $res->free();
                                    header("Location: suspended.php");
                                }
                                else{
                                    //account banned permanently
                                    $_SESSION['allowed'] = false;
                                    $_SESSION['verified'] = false;
                                    $res->free();
                                    header("Location: suspended.php");
                                }
                            }
                        }
                        else{
                            echo "Kombinim email/password i gabuar!";
                            $res->free();
                        }
                    }
                }
                else{
                    if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                            echo "Couldn't connect to database! Notify the admins
                            <a href=\"contactMe.php\">here</a> if the problem still exists even after refresh!";
                        else
                            echo "Nuk u be lidhja me databazen! Lajmero adminat
                            <a href=\"contactMe.php\">ketu</a> nese ky problem vazhdon edhe pas rifreskimit!";
                }
            }
        }
    }
    function get_client_ip_server() {
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function get_client_ip_env() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

    function getIP_By_Force(){
        if(strcmp(get_client_ip_server(), 'UNKNOWN') == 0){
            if(strcmp(get_client_ip_env(), 'UNKNOWN') == 0){
               return 'UNKNOWN';
            }
            else{
                return get_client_ip_env();
            }
        }
        else{
            return get_client_ip_server();
        }
    }
?>
