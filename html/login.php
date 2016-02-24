<?php

    /*
    $email = mysql_escape_string(strtolower(trim($_POST['userEmail'])));
    $pw = mysql_escape_string($_POST['userPw']);

    $totalSalt = $salt;
    $pw = $pw.$salt;
    $runs = 1828;
    $key_length = 50;
    $totalSalt = $totalSalt.$salt;
    $pw = pbkdf2('sha512', $pw, $totalSalt,$runs, $key_length,false);
    $ip = getIP_By_Force();

    $defaultPic = "userDefault.jpg";
    if($conn->query("INSERT INTO `kamuriTBL`VALUES (NULL,'pen','".$email."','".$ip."','".$pw."','".$salt."','','','".$defaultPic."','','','','','".$role."');"))
        echo "Miresevini ne \"kamuri.al\". Kjo faqe do ishte e vetmuar pa ju!";
    */

    $lastpage = $_SERVER['HTTP_REFERER'];
    if( isset($_POST['email']) && isset($_POST['pw']) ){
                if(empty($_POST['email']) || empty($_POST['pw']))
                    if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                        echo "Fill both fields to login!";
                    else
                        echo "Mbushi te dyja fushat per tu kycur!";
                else{
                    //to limit connections to the database
                    //memcache will be used when we get popular
                    session_start();
                    if(isset($_SESSION['allowed']) && $_SESSION['allowed'] != false){
                        if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                            header('Location: /kamuri.al/html/home_page.html');
                        else
                            header('Location: /kamuri.al/html/faqja_kryesore.html');
                    }

                    else{
                        //this will change to a MySQL DB we will buy
                        if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
                            $email = mysql_escape_string(strtolower(trim($_POST['email'])));
                            $pw = mysql_escape_string($_POST['pw']);
                            
                            //here will go the encryption... Now calculation the strongest encryption I can make.
                            
                            $res = $conn->query("SELECT id,email,pw FROM kamuriTBL WHERE email='$email' AND pw='$pw';");
                            $numRows = mysqli_num_rows($res); 
                            if($numRows<=0){
                                if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                                  echo "Invalid email/password";
                                else
                                  echo "Kombinim email/password i gabuar!";
                                $_SESSION['allowed'] != false;
                            }
                            else{
                                $tmp = $res->fetch_assoc();
                                $_SESSION['allowed'] = "Confirmed_ID:".$tmp['id'];
                                if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                                    header('Location: /kamuri.al/html/home_page.html');
                                else
                                    header('Location: /kamuri.al/html/faqja_kryesore.html');
                                echo "<br>";
                                $res->free();
                            }
                        }
                        else{
                            if (substr($lastpage, strrpos($lastpage, "/")+1) == "index.php")
                                    echo "Couldn't connect to database! Notify the admins <a href=\"contactMe.php\">here</a> if the problem still exists even after refresh!";
                                else
                                    echo "Nuk u be lidhja me databazen! Lajmero adminat <a href=\"contactMe.php\">ketu</a> nese ky problem vazhdon edhe pas rifreskimit!";
                        }
                    }
                }
            }
?>