<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
    <link rel="stylesheet" href="css/profile.css">  
	<link rel="icon" href="../img/extra/icon.png" type="image/png" size="16x16"/>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../javascript/js-image-slider.js" type="text/jscript"></script>
		<title>Kam Uri</title>
		<!-- This script is for the quantity Price relation -->
		 <script>
function Total(qty,ud,total,value){
 qty=document.getElementById(qty);
 ud>0?qty.value++:qty.value--;
 qty.value=Math.max(qty.value,0);
 document.getElementById(total).value=qty.value*value;
}
  </script>
	</head>
    <?php
		session_start();
		/*
		if((!isset($_SESSION['allowed']))
			||(isset($_SESSION['allowed']) && !$_SESSION['allowed']) 
			|| ($_SESSION['allowed'] && !$_SESSION['verified']))
			header("Location: index.php");
		else if(isset($_SESSION['allowed']) && $_SESSION['allowed'] && !$_SESSION['verified'])
			header("Location: verify.php");
		else{

		}
		*/
    ?>
    
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
                    <a href="profile_al.html">
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
				<td style="width: 68px"></td>
				<td bgcolor="#FFFFE0" style="width: 38px" class="auto-style2"></td>
				<td bgcolor="#FFFFE0" style="margin-top: 0px; margin: 0px 0 0 0; width: 645px; pause-after: inherit;" class="auto-style2">
					<table  width="1135" height="28" cellpadding="0" cellspacing="0">
						<tr height="18"><td width="1135" height="18"></td></tr>
                    	<tr height="18">
                        	<td width="1135" height="28" bgcolor="#FFFFCC" class="Search">
                            	
    						</td>
                        </tr>
                        <!-- Empty row -->
						<tr height="38"><td width="1135" height="18"></td></tr>
					</table>
						<!-- Main Table -->
					<table  width="1135" height="28" cellpadding="0" cellspacing="0" class="prof_table">
						<tr>
							<td>
								<center>
									<table width="480" cellpadding="0" cellspacing="0">
										<tr>
											<td width="240">
												<center>
													<div class="prof_pic">
														<p><img src="../img/prof/profile.jpg" width="100"/></p>
														<p>
															<form >
																<input type="file" name="pic" accept="image/*">
																<input type="submit">
															</form>
														</p>
													</div>
												</center>
											</td>
											<td class="info">
												<center>
													<p class="name"><?php echo "Argert Boja"  ?></p>
													<p class= "email"> argertboja@yahoo.com</p>
													<form>
														<p>Birthday:
														
															<input type="date" name="bday">
														</p>
														<p>Adress: 
															<textarea name="comment" form="usrform" placeholder="Enter your adress" rows="8" cols="28" name="adress"></textarea>
														</p>
														<p>Telephone:
															<input type="tel" name="usrtel">
														</p>
														<p>
															<input type="submit">
														</p>
													</form>												
												</center>
											</td>
										</tr>
									</table>
								</center>
							</td>	
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