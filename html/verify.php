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
                    <a href="verify_al.php">
									<img alt="" height="34" src="../img/extra/shqip.png" width="34" class="auto-style5" /></a>
                                    <a href="verify.php">
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
				</td>			
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td style="width: 68px">&nbsp;</td>
			</tr>
			
		</table>
		<table class="main_tab" cellpadding="0" cellspacing="0" >
			<tr>	
				<td style="width: 68px"></td>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td bgcolor="#FFFFE0" style="margin-top: 0px; margin: 0px 0 0 0; width: 645px; pause-after: inherit;" class="auto-style2">
					<table  width="1135" height="28" cellpadding="0" cellspacing="0">
						<tr height="18"><td width="1135" height="18"></td></tr>
                    	<tr height="18">
                        	<td width="1135" height="28" bgcolor="#FFFFCC" class="welcome">
                            	<div style="margin-left:20px;">
								<?php
									session_start();
									function genSalt($length = 25) {
										$characters = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
										$charactersLength = strlen($characters);
										$randomString = '';
										for ($i = 0; $i < $length; $i++) {
											$randomString .= $characters[rand(0, $charactersLength - 1)];
										}
										return $randomString;
									}
									$expected = 'nd236589ldfmlsd!(#*@#$#;sweksk32432dwe23234';
									$tries = 0;
									$email = 'example@kamuri.al';
									$status = 'pen';
									if($_SESSION['allowed'] == true && $_SESSION['verified']==false){
										if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
											$uid = $_SESSION['id'];
											$res = $conn->query("SELECT status,email,verificationCode,tries
															FROM kamuriTBL WHERE id = '$uid';");
											$tmp = $res->fetch_assoc();
											$status = $tmp['status'];
											$email = $tmp['email'];
											$expected = $tmp['verificationCode'];
											$tries = $tmp['tries'];
											if($status == 'sus' || $status == 'ban')
												header("Location: message.php");
											else if ($status == 'act'){
												$_SESSION['verified'] = true;
											}
										}
										else{
											echo "Couldn't connect to database! Please contact us 
														<a href=\"contactMe.php\">here</a>!";
											return;
										}
									}
									else{
										header("Location: index.php");
									}
									////////////////////// Verification logic!!!
									$userCode = $_POST['vCode'];
									if(isset($_POST['submit'])){
										if($tries != 0 ){
											if($userCode == $expected){
												$_SESSION['verified'] = true;
												$conn->query("UPDATE kamuriTBL SET status = 'act' WHERE id = '$uid';");
												echo "Welcome as a fully fledged user! Bon Appetite and have fun!";
												echo '<meta http-equiv="refresh" content="5;url=home_page.php" />';
												return;
											}
											else{
												$conn->query("UPDATE kamuriTBL SET tries = tries-1 WHERE id = '$uid';");
												echo '<meta http-equiv="refresh" content="0;url=verify.php" />';
												return;
											}
										}
										//if there are no more tries
										else{
											$verificationCode = genSalt(6);
											$conn->query("UPDATE kamuriTBL SET verificationCode = '$verificationCode', 
												tries = 5 WHERE id = '$uid';");
											$msg = "ENG{".$verificationCode."}";
											if(!exec("java -cp /var/www/html/kamuri.al/mailer/toUsers Mail $email $msg", $output)){
												echo "Could not mail a new verification code!
														Please contact us to verify your account now!<br>";
											}
											else{
												echo "You are out of tries! Check your mail for the new verification code!";
												echo '<meta http-equiv="refresh" content="8;url=verify.php" />';
											}
											return;
										}
									}


									echo "Hi, ";
									$name = substr($email, 0, strpos($email,'@'));
									echo $name;
								?>
									<div name="exit" class="exit">
										<a style="text-decoration: none;" href="logout.php">
								Logout &nbsp;&nbsp;&nbsp;<img src="../img/extra/exit.png" width="22" height="22"
															  alt="Turn Off"></a></div></div>
    						</td>
                        </tr>
                        <!-- Empty row -->

					</table>

					<center>
		<table border="1" class="verification_table"">
			<tr>
				<td>
					<p>
					<center class="hello" margin-top="50px">Hello <class name="user"> <?php
							echo $name
							?> </class>
					</center>

					<p>
					<center class="code_text" margin-top="50px">Please enter verification
					</center>

					<p>
					<center class="code_text" margin-top="50px">code below...
					</center>
					<p>
					<center class="code_text" margin-top="50px">Number of tries: <class name="tries">
						<?php
							echo $tries
						?></class>
					</center>
					<p>
					<center class="code_text" margin-top="50px">

						<form method="POST" action="verify.php">
							<input type="text" name="vCode" placeholder="Verification Code"/></center>
					<p>
					<center class="code_text" margin-top="50px">
						<input type="submit" name="submit" />
						</form>
					</center>
					</p>
				</td>
			</tr>
		</table>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td style="width: 68px">&nbsp;</td>
	</body>