﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                    <a href="index_al.html">
									<img alt="" height="34" src="../img/extra/shqip.png" width="34" class="auto-style5" /></a>
                                    <a>
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
								<!-- Login / Sign Up Part -->
								<tr>
									<td width="300" height="508">
                                    <div class="cont" align="center">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
      <form action="index.php" method="POST">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="email" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="pw"class="login__input pass" placeholder="Password"/>
        </div>
        <?php
        	//problem nuk krijon cookies.

        	session_start();
		    if( isset($_POST['email']) && isset($_POST['pw']) ){
		    	if(empty($_POST['email']) || empty($_POST['pw']))
		    		echo "Fill both fields to login!";
		    	else{
		    		//to limit connections to the database
		    		//memcache will be used when we get popular
		    		if(isset($_SESSION['allowed']) && $_SESSION['allowed'] != false){
		    			echo "You are already logged in!";
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
			    				echo "Invalid email/password";
			    				session_start();
			    				$_SESSION['allowed'] = "false";
			    			}
			    			else{
			    				$tmp = $res->fetch_assoc();
			    				session_start();
			    				$_SESSION['allowed'] = "Confirmed_ID:".$tmp['id'];
			    				echo "Logged In";
			    				//echo "<br> ID:".$tmp['id'];
			    				echo "<br>";
			    				$res->free();
			    			}
			    		}
		    			else{
		    				echo "Couldn't connect to database! Notify the admins <a href=\"contactMe.php\">here</a> 
		    				if the problem still exists even after refresh!";
		    			}
		    		}
		    	}
		    }
		?>
        <input type="submit" class="login__submit" value="Sign in"/>
        <p class="login__signup">Don't have an account? &nbsp;<a href="signup.html">Sign up</a></p>
        <p class="login__signup" style="margin-top:8px">Forgot your password?</p>
        <p class="login__signup"><a><u>Click here</u></a></p>
      </div>
    </div>
  </div>
  </form>
</div>
<div class="logmod__alter" align="center">
          <div class="logmod__alter-container" >
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context" style="font-size:15px">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context" style="font-size:15px">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
                                    
									</td>
								</tr>
								<!-- Continue without account -->
								<tr>
									<td width="113" height="28">
										<div align="center"><a href="home_page.html"><img alt="Continue" height="48" src="../img/extra/continue.jpg" width="313" /></a></div>
									</td>
								</tr>
								<!-- Sponsor part -->
								<tr>
									<td width="113" height="308">
										<!-- Table for sponsors -->
										<table width="108">
											<tr><td colspan="5"><div align="center"><img alt="" height="75" src="../img/sponsors/sponsors.png" /></div></td></tr>
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
						<font face="'Lucida Calligraphy'" color="gray" size="3">© 2016<a href="https://www.facebook.com/erin.avllazagaj">
							AlboCoder</a> & <a href="https://www.facebook.com/abentertainmentab">
							ABEntertainment </a><font size="2"> All rights reserved</font> 
						</font>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>