<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
if ((!file_exists('encryptor.php'))||(!file_exists('tracker.php')))die("Dicka shkoi keq ose mungon faqja e krijimit te llogarise! 
<br>Lajmero adminat <a href=\"contactMe.php\">ketu</a> nese ky problem vazhdon edhe pas rifreskimit!");
require_once("encryptor.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <link rel="stylesheet" href="css/style_index.css">  
		<link rel="icon" href="../img/extra/icon.png" type="image/png" sizes="16x16"/>
		<meta content="en-us" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Kam Uri</title>
	</head>
	<body style="background-position:  top; background-image: url('../img/extra/bg.jpg'); background-attachment: fixed; margin-top: 0;">
	<!-- Header Tab -->
	 	<table class="header_tab" cellpadding="0" cellspacing="0" >
			<tr>	
				<td style="width: 68px"/>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"/>
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
										<td width="230" style="height: 35px"/>
										<td width="900" style="height: 35px"/>
									</tr>
								</table>
								
								<br />
								<br />
								<br />
							</td>
						</tr>
					</table>
					<div class="slide"/>
				</td>			
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"/>
				<td style="width: 68px">&nbsp;</td>
			</tr>
			
		</table>
		<!-- Main Tab -->
		<table class="main_tab" cellpadding="0" cellspacing="0" >
			<tr>	
				<td style="width: 68px"/>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"/>
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
														<div class="signup__form">
															<form>
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
																	<p> Please Select Your Role <select name="role">
																		<option value="client">Client</option>
																		<option value="business">Business</option>  
																		</select> 
																	</p> 
																</div>
																<p>&nbsp;</p>
																<p>&nbsp;</p>
																<p class="login__signup" align="left"><input name="checkBox" class="checkbox" type="checkbox" 
																value="Agree"/> &nbsp; Une pranoj &nbsp;<a><u>Kushtet & Privatesine</u></a></p>
																<button type="button" class="signup__submit">Krijo Llogari</button>
															</form>
															<?php
																if(isset($_POST['userEmail'])&&isset($_POST['userPw'])&&isset($_POST['userRepeatPw'])&&isset($_POST['checkBox'])){
														      		if(empty($_POST['userEmail'])||empty($_POST['userPw'])||empty($_POST['userRepeatPw']))
														      			echo "Ju lutem plotesoni te gjitha fushat<br>dhe sigurohuni qe te pranoni formalitetet!";
														      		else{
														      			if($_POST['userPw'] != $_POST['userRepeatPw'])
														      				echo "Fjalekalimet nuk perputhen!";
														      			else{
														  					if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
														                        $email = mysql_escape_string(strtolower(trim($_POST['userEmail'])));
														                        $pw = mysql_escape_string($_POST['userPw']);

														                        $salt = genSalt(25);
														                        $totalSalt = $salt;
														                        $salt = genSalt(25);
														                        $pw = $pw.$salt;
														                        $runs = 1828;
														                        $key_length = 50;
																				$totalSalt = $totalSalt.$salt;
														                        $pw = pbkdf2('sha512', $pw, $totalSalt,$runs, $key_length,false);
														                        $ip = getIP_By_Force();
														                        $role = $_POST['role'];
														                        $role = trim(strtolower($role));
														                        if(strcmp($role, 'client') == 0)
														                        	$role = 3;
														                        else
														                        	$role = 4;

														                        $defaultPic = "userDefault.jpg";
														                        if($conn->query("INSERT INTO `kamuriTBL`VALUES (NULL,'pen','".$email."','".$ip."','".$pw."','".$salt."','','','".$defaultPic."','','','','','".$role."');")){
														                        	echo "Miresevini ne \"kamuri.al\". Kjo faqe do ishte e vetmuar pa ju!";
														                        }
														                    	else{
														                    		//later we open a DB for this crash. Crash handling DB to identify if he was doing some evil shit
														                    		//or if it was really a crash (almost 0% chance B-) )
														                    		echo "Dicka shkoi keq!<br>
																					Njofto adminat <a href=\"contactMe.php\">ketu</a>.
																					<br><b>Njoftim: </b>Kjo llogari eshte e regjistruar!";
														                    	}
														                    }
														                    else{
														                        echo "Nuk mund te lidhet me databazen! <br>Njofto adminat <a href=\"contactMe.php\">ketu</a>nese <br>problemi ende ekziston <br>edhe pas rifreskimit!<br>";
														                    }
														      			}
														      		}
														      	}
														      ?>
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
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"/>
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
</html>