<?php
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