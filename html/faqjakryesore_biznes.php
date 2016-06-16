<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="stylesheet" href="css/business.css">
    <link rel="icon" href="../img/extra/icon.png" type="image/png" size="16x16"/>
    <link href="css/kamuri_ad.css" rel="stylesheet" type="text/css" />
    <script src="../javascript/kamur_ad.js" type="text/jscript"></script>

    <title>Kam Uri</title>
</head>


<body style="background-position:  top; background-image: url('../img/extra/bg.jpg'); background-attachment: fixed; margin-top: 0;">
<!-- Header Tab -->
<table class="header_tab" cellpadding="0" cellspacing="0" >
    <tr>
        <td style="width: 68px"></td>
        <td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
        <td bgcolor="#FFFFE0" style="margin-top: 0px; margin: 0px 0 0 0; width: 645px; pause-after: inherit;" class="auto-style2">
            <table align="left" style="width: 10%">
                <tr>
                    <td style="width: 2%; height: 10px">
                        <a href="https://www.facebook.com/kamurikamuri.al/" target="_blank">
                            <img alt="Facebook" height="25" src="../img/extra/fb.png" width="25" /></a></td>
                    <td style="width: 4px">
                        <a target="_blank">
                            <img alt="Instagram" height="25" src="../img/extra/insta.png" width="25" /></a></td>
                    <td>
                        <img alt="Twitter" height="25" src="../img/extra/tw.png" width="25" /></td>
                    <td>
                        <img alt="YouTube" height="25" src="../img/extra/yt.png" width="25" /></td>
                    <td class="auto-style1"></td>
                </tr>
            </table>
            <div align="right">
                <a href="faqjakryesore_biznes.php">
                    <img alt="sq" height="34" src="../img/extra/shqip.png" width="34" class="auto-style5" /></a>
                <a href="business_homepage.html">
                    <img alt="en" height="34" src="../img/extra/english.png" width="34" class="auto-style5" /></a>

            </div>

            <table class="auto-style3" width="1135" height="200" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="margin-bottom:0px">

                        <table align="right" width="1135" style="margin-bottom:0px;margin-top:116px; height: 0px;" >
                            <tr>
                                <td width="230" style="height: 35px"></td>
                                <td width="900" style="height: 35px"></td>
                            </tr>
                        </table>

                        <br />
                        <br />
                        <br />
                    </td>
                </tr>
            </table>
        </td>
        <td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
        <td style="width: 68px">&nbsp;</td>
    </tr>

</table>
<!-- Main Tab -->
<table class="main_tab" cellpadding="0" cellspacing="0" >
    <tr>
        <td style="width: 68px"></td>
        <td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
        <td bgcolor="#FFFFE0" style="margin-top: 0px; margin: 0px 0 0 0; width: 645px; pause-after: inherit;" class="auto-style2">
            <table  width="1135" height="28" cellpadding="0" cellspacing="0">
                <tr height="18"><td width="1135" height="18"></td></tr>
                <tr height="18">
                    <td width="1135" height="28" bgcolor="#FFFFCC" class="welcome">
                        <div style="margin-left:20px;">Mire se vini: <?php
                            if(isset($_SESSION['allowed'])&&$_SESSION['allowed']
                                &&isset($_SESSION['verified'])&&$_SESSION['verified']){
                                session_start();
                                $picDir = '../img/prof/defaultPic.jpg';
                                $email = 'example@kamuri.al';
                                $dob = '??/??/????';
                                $addr = '????????';
                                $telNo = '(123)45-678-9012';

                                if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
                                    $uid = $_SESSION['id'];

                                    $res = $conn->query("SELECT email
															FROM kamuriTBL WHERE id = '$uid';");
                                    $tmp = $res->fetch_assoc();
                                    $email = $tmp['email'];
                                    $res->free();
                                    $res = $conn->query("SELECT dob, address, telNo, profpic
															FROM personalData WHERE id = '$uid';");
                                    $tmp = $res->fetch_assoc();

                                    //get the personal data form the second table
                                    if($tmp['dob']!=null){$dob = $tmp['dob'];}
                                    if($tmp['address']!=null){$addr = $tmp['address'];}
                                    if($tmp['telNo']!=null){$telNo = $tmp['telNo'];}
                                    if($tmp['profpic']!=null){$picDir = $tmp['profpic'];}
                                }
                                else{
                                    echo "Couldn't connect to database! Notify the admins
														<a href=\"contactMe.php\">here</a>!";
                                    $conn->close();
                                    die();
                                }
                                $conn->close();
                            }
                            else if(!isset($_SESSION['allowed']))
                                echo '<meta http-equiv="refresh" content="0;url=index.php" />';
                            else if(isset($_SESSION['allowed']) && $_SESSION['allowed'] && !$_SESSION['verified'])
                                echo '<meta http-equiv="refresh" content="0;url=verify.php" />';
                            else
                                echo '<meta http-equiv="refresh" content="0;url=message.php" />';
                            ?><class name="exit" class="exit">
                                Logout &nbsp;&nbsp;&nbsp;<img src="../img/extra/exit.png" width="22" height="22"></class></div>
                    </td>
                </tr>
                <!-- Empty row -->

            </table>
            <hr class="horizontalLine"/>
            <center><table  width="100" height="28" cellpadding="0" cellspacing="0">
                    <tr height="18"><td width="50" height="18"></td></tr>
                    <tr height="18">
                        <td width="100" height="28" bgcolor="#FFFFCC" class="welcome">
                            <div style="margin-left:20px;">Porosite</div>
                        </td>
                    </tr>

                </table></center>

            <!-- Main Table -->
            <iframe src="porosite.html" width = "1140" height = "300" scrolling="yes">
            </iframe>
            <hr class="horizontalLine"/>
            <hr class="horizontalLine"/>
            <center><table  width="100" height="28" cellpadding="0" cellspacing="0">
                    <tr height="18"><td width="50" height="18"></td></tr>
                    <tr height="18">
                        <td width="100" height="28" bgcolor="#FFFFCC" class="welcome">
                            <div style="margin-left:20px;">Ushqimet e mia</div>
                        </td>
                    </tr>

                </table></center>
            <iframe src="ushqimet_e_mia.html" width = "1140" height = "300" scrolling="yes">
            </iframe>
            <hr class="horizontalLine"/>
            <hr class="horizontalLine"/>
            <center><table  width="100" height="28" cellpadding="0" cellspacing="0">
                    <tr height="18"><td width="50" height="18"></td></tr>
                    <tr height="18">
                        <td width="100" height="28" bgcolor="#FFFFCC" class="welcome">
                            <div style="margin-left:20px;">Shto Ushqim</div>
                        </td>
                    </tr>

                </table></center>
            <hr class="horizontalLine"/>
            <table  width="1100" height="26" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="140"><center class="foodName">Foto</center></td>
                    <td width="140"><center class="foodName">Ushqimi</center></td>
                    <td width="26"></td>
                    <td width="140"><center class="foodName">Restoranti</center></td>
                    <td width="26"></td>
                    <td width="140"><center class="foodName">Kohezgjatja</center></td>
                    <td width="26"></td>
                    <td width="140"><center class="foodName">Cmimi</center></td>
                    <td width="26"></td>

                    <td width="140"><center class="foodName">Shto</center></td>
                </tr>
                <tr height="18"><td></td><tr>
                <tr>
                    <form>
                        <td width="140"><center><form >
                                    <input type="file" name="pic" accept="image/*">
                                    <input type="submit">
                            </center></td>
                        <td width="140"><center class="foodName"><input type="text" name="foodname" placeholder="Ushqimi"></center></td>
                        <td width="26"></td>
                        <td width="140"><center class="foodName"><input type="text" name="restorantName" placeholder="Restoranti"></center></td>
                        <td width="26"></td>
                        <td width="140"><center class="foodName"><input type="number" name="duration" placeholder="Kohezgjatja"></center></td>
                        <td width="26"></td>
                        <td width="140"><center class="foodName"><input type="number" name="price" placeholder="Cmimi" ></center></td>
                        <td width="26"></td>

                        <td width="140"><center>
                                <input type='image' name='cancel' id='cancel' src="../img/extra/tick.png" width="38" height="38"/></center></td>
                    </form>
                </tr>
            </table>
            <hr class="horizontalLine"/>
            <table  width="1100" height="26" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="1100"><td><div id="sliderFrame">
                            <div id="slider" style="margin-top:0px;">
                                <img src="../img/kamuri_ad/1.jpg" />
                                <img src="../img/kamuri_ad/2.jpg" />
                                <img src="../img/kamuri_ad/3.jpg" />
                                <img src="../img/kamuri_ad/4.jpg" />
                                <img src="../img/kamuri_ad/5.jpg" />
                            </div>
                        </div></td>
                </tr>
            </table>
            <!-- Table for buttons -->
            <hr class="horizontalLine"/>
            <table>
                <tr>
                    <td width="268"></td>
                    <td width="188" class="footerButton"><center> User Agreement </center></td>
                    <td width="200"></td>
                    <td width="188" class="footerButton"><center> Contact </center></td>
                    <td width="200"></td>
                    <td width="188" class="footerButton"><center> Offers </center></td>
                    <td width="200"></td>
                </tr>
                <tr height="8">
                    <td></td>
                </tr>
                <tr>
                    <td width="268"></td>
                    <td width="188" class="footerButton"><center> FAQ </center></td>
                    <td width="200"></td>
                    <td width="188" class="footerButton"><center> Social Networks </center></td>
                    <td width="200"></td>
                    <td width="188" class="footerButton"><center> Developers</center></td>
                    <td width="200"></td>
                </tr>
                <tr height="8">
                    <td></td>
                </tr>
            </table>
            <hr class="horizontalLine"/>
        </td>
        <td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
        <td style="width: 68px">&nbsp;</td>
    </tr>
</table>
<!--Footer -->
<center>
    <table>
        <tr>
            <td>
                <font face="'Lucida Calligraphy'" color="gray" size="3">© 2016<a href="https://www.facebook.com/4LB0C0D3R">
                        AlboCoder</a> & <a href="https://www.facebook.com/abentertainmentab">
                        ABEntertainment </a><font size="2"> All rights reserved</font>
                </font>
            </td>
        </tr>
    </table>
</center>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/56ff94d43a48b09e318df421/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>