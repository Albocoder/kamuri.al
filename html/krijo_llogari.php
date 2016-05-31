<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if (!file_exists('encryptor.php')) die("Dicka nuk shkon!<br>Ju lutem na lajmeroni per kete problem!
<a href=\"contactMe.php\">ketu</a> nese ky problem vazhdon edhe pas rifreskimit te faqes!<br>");
require_once("encryptor.php");
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
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <link rel="stylesheet" href="css/style_index.css">
		<link rel="icon" href="../img/extra/icon.png" type="image/png" sizes="16x16"/>
		<meta content="en-us" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Kam Uri</title>
	</head>
	<body style="background-position:  top; background-image: url('../img/extra/bg.jpg'); background-attachment: fixed; margin-top: 0;">
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
							<td class="auto-style1"/>
						</tr>
					</table>
                    <div align="right">
                    <a>
									<img alt="" height="34" src="../img/extra/shqip.png" width="34" class="auto-style5" /></a>
                                    <a href="signup.php">
									<img alt="" height="34" src="../img/extra/english.png" width="34" class="auto-style5" /></a>

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
					<div class="slide"></div>
				</td>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td style="width: 68px">&nbsp;</td>
			</tr>

		</table>
		<!-- Main Tab -->
		<table class="main_tab" cellpadding="0" cellspacing="0" >
			<tr>
				<td style="width: 68px"/>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td bgcolor="#FFFFE0" style="margin-top: 0px; margin: 0px 0 0 0; width: 645px; pause-after: inherit;" class="auto-style2">
					<table  width="1135" height="1008" cellpadding="0" cellspacing="0">
						<tr>
							<td style="margin-bottom:0px" width="532">
								<img alt="" height="908" src="../img/extra/harta.png" width="532" class="auto-style5" />
							</td>
							<td style="margin-bottom:0px" width="113">
								<table>
									<!-- Sign Up Part -->
									<tr>
										<td width="300" height="508">
											<div class="cont" align="center">
												<div class="demo">
													<div class="login">
														<p> &nbsp </p>
														<p> &nbsp </p>
														<p class="signup_intro" style="margin-top:6px">Shkruani te dhenat personale per</p>
														<p class="signup_intro"> <b>te krijuar llogarine</b></p>
														<font size="1">
														<?php
														      	if(isset($_POST['userEmail'])&&isset($_POST['userPw'])&&isset($_POST['userRepeatPw'])&&isset($_POST['checkBox'])){
														      		if(empty($_POST['userEmail'])||empty($_POST['userPw'])||empty($_POST['userRepeatPw']))
														      			echo "Plotesoni te gjitha fushat ju lutem! Dhe pranoni kushtet dhe privatesine.";
														      		else{
															      			if($_POST['userPw'] != $_POST['userRepeatPw'])
															      				echo "Fjalekalimet nuk perputhen!";
															      			else{
															  					if($conn = mysqli_connect("127.0.0.1", "root", "Asdf!234","myDBs")){
															                        $email = $conn->real_escape_string(strtolower(trim($_POST['userEmail'])));
															                        $pw = $conn->real_escape_string($_POST['userPw']);

															                        $salt = genSalt(50);
															                        $pw = substr($salt,0, 25).$pw.substr($salt,25, 25);
															                        $runs = 1828;
															                        $key_length = 50;
															                        $pw = pbkdf2('sha512', $pw, $salt,$runs, $key_length,false);
															                        $ip = getIP_By_Force();
															                        $role = $_POST['role'];
															                        $role = trim(strtolower($role));
															                        if(strcmp($role, 'client') == 0)
															                        	$role = 3;
															                        else
															                        	$role = 4;

																					$verificationCode = genSalt(6);
															                        $defaultPic = "userDefault.jpg";
															                        $numTries = 5;
																					$msg = "ALB{".$verificationCode."}";
																					if($conn->query("INSERT INTO `kamuriTBL`VALUES (NULL,'pen','".$email."','".$ip."','".$pw."','".$salt
																						."','-1','-1','".$role."','".$verificationCode."','".$numTries."');")){
																						$results = $conn->query("SELECT id FROM kamuriTBL WHERE email = '$email';");
																						$temporary = $results->fetch_assoc();
																						$userID = $temporary['id'];
																						$conn->query("INSERT INTO `kamuriTBL` VALUES (".$userID.",NULL,NULL,NULL,NULL);");
															              				$_SESSION['allowed'] = true;
															              				$_SESSION['verified'] = false;
															              				$_SESSION['id'] = $userID;
															            				if(!exec("java -cp /var/www/html/kamuri.al/mailer/toUsers Mail $email $msg", $output)){
																							echo "Nuk mund te dergohej kodi i verifikimit! Ju lutem na kontaktoni per problemin!<br>";
																						}
															              				else{
															              					echo "Kodi verifikimit u dergua ne email. Miresevini ne kamuri.al, nuk do te ishte njelloj pa ju";
															              					echo '<meta http-equiv="refresh" content="5;url=verify_al.php" />';
															              				}
															              			}
														              				else{
														                  				echo "Emaili ekziston ne databaze!<br>Na njoftoni ne per te rregulluar kete problem!<br>";
														             				}
															      				}
															      				else{
														                  			echo "Nuk u lidh me databazen!<br>Na dergo nje mesazh per problemin!<br>";
														             			}
														      				}
																		}
																	}
														      ?>
														</font>
														<div class="signup__form">
															<form method="POST" action="krijo_llogari.php">
																<p class="signup_info">Email *</p>
																<div class="signup__row">
																	<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
																		<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
																	</svg>
																	<input class="signup_email" name="userEmail" maxlength="150" id="user-email" placeholder="Email" type="email"
																	size="50" />
																</div>
																<p>&nbsp;</p>
																<p>&nbsp;</p>
																<p class="signup_info">Fjalekalimi *</p>
																<div class="signup__row">
																	<svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
																		<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
																	</svg>
																	<input class="signup_pass" name="userPw" maxlength="30" id="user-pw" placeholder="Fjalekalimi" type="password"
																	size="50" />
																</div>
																<p>&nbsp;</p>
																<p>&nbsp;</p>
																<p class="signup_info">Perserit fjalekalimin *</p>
																<div class="signup__row">
																  <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
																	<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
																  </svg>
																  <input class="signup_pass" name="userRepeatPw" maxlength="30" id="user-pw-repeat"
																  placeholder="Perserit Fjalekalimin" type="password" size="50" />
																</div>
																<p>&nbsp;</p>
																<p>&nbsp;</p>
																<div class="role" >
																	<p> Ju lutem zgjidhni rolin <select name="role">
																		<option value="client">Klient</option>
																		<option value="business">Biznes</option>
																		</select>
																	</p>
																</div>
																<p>&nbsp;</p>
																<p>&nbsp;</p>
																<p class="login__signup" align="left"><input name="checkBox" class="checkbox" type="checkbox"
																value="Agree"/> &nbsp; Une pranoj &nbsp;<a><u>Kushtet & Privatesine</u></a></p>
																<input type="submit" class="signup__submit" value="Krijo Llogari"/>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="logmod__alter" align="center">
												<div class="logmod__alter-container" >
													<a href="#" class="connect facebook">
														<div class="connect__icon">
															<i class="fa fa-facebook"></i>
														</div>
														<div class="connect__context" style="font-size:15px">
															<span>Krijo llogari me <strong>Facebook</strong></span>
														</div>
													</a>
													<a href="#" class="connect googleplus">
														<div class="connect__icon">
															<i class="fa fa-google-plus"></i>
														</div>
														<div class="connect__context" style="font-size:15px">
															<span>Krijo llogari me <strong>Google+</strong></span>
														</div>
													</a>
												</div>
											</div>
										</td>
									</tr>
									<!-- Blank part -->
									<tr>
										<td width="113" height="28">
										</td>
									</tr>
									<!-- Sponsor part -->
									<tr>
										<td width="113" height="308">
											<!-- Table for sponsors -->
											<table width="108">
												<tr>
													<td colspan="5">
														<div align="center"><img alt="" height="75" src="../img/sponsors/sponsorat.png" /></div>
													</td>
												</tr>
												<tr>
													<td><img alt="Palmanova Resort" height="75" src="../img/sponsors/sponsor1.jpg" width="75"/></td>
													<td><img alt="MIMI Thai & Chinese Restaurant" height="75" src="../img/sponsors/sponsor2.jpeg" width="75"/></td>
													<td><img alt="Serendipity Mexican Restaurant" height="75" src="../img/sponsors/sponsor3.jpg" width="75"/></td>
													<td><img alt="Istanbul Restaurant" height="75" src="../img/sponsors/sponsor4.jpg" width="75"/></td>
													<td><img alt="Melograno Restaurant" height="75" src="../img/sponsors/sponsor5.jpg" width="75"/></td>
												</tr>
												<tr>
													<td><img alt="Artigiano" height="75" src="../img/sponsors/sponsor6.jpeg" width="75"/></td>
													<td><img alt="1000 Buzeqeshje" height="75" src="../img/sponsors/sponsor7.jpg" width="75"/></td>
													<td><img alt="Univers Hotel" height="75" src="../img/sponsors/sponsor8.jpg" width="75"/></td>
													<td><img alt="La Bottegga Dei Sapori" height="75" src="../img/sponsors/sponsor9.jpg" width="75"/></td>
													<td><a href="www.era.al"><img alt="Era" height="75" src="../img/sponsors/sponsor10.png" width="75"/></a></td>
												</tr>

											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
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
							ABEntertainment </a><font size="2"> Te drejtat e rezervuara</font>
						</font>
					</td>
				</tr>
			</table>
		</center>
	</body>
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
</html>
