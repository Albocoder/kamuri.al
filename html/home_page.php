﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<?php
		session_start();
		if(isset($_SESSION['allowed'])&&$_SESSION['allowed'])
			null;
		else if(!isset($_SESSION['allowed']))
			echo '<meta http-equiv="refresh" content="0;url=index.php" />';
		else if(isset($_SESSION['allowed']) && $_SESSION['allowed'] && !$_SESSION['verified'])
			echo '<meta http-equiv="refresh" content="0;url=verify.php" />';
		else
			echo '<meta http-equiv="refresh" content="0;url=message.php" />';
	?>
	<head>
		<link rel="stylesheet" href="css/style_homepage.css">
		<link rel="icon" href="../img/extra/icon.png" type="image/png"/>
		<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="../javascript/js-image-slider.js" type="text/jscript"></script>
		<script src="../javascript/ajaxRestoCity.js" type="text/jscript"></script>
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
                    <a href="faqja_kryesore.html">
									<img alt="" height="34" src="../img/extra/shqip.png" width="34" class="auto-style5" /></a>
                                    <a>
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
                            	<div id="tfheader">
									<form id="tfnewsearch" method="GET" action="">
										<input type="text" id="tfq" class="tftextinput2" name="q" size="21"
											   maxlength="120" placeholder="Search food"><input type="submit" value=">"
																								class="tfbutton2">
									<div class="tfclear"></div>
									<div class="cities_list">
										<input list="cities" id="cityPicker" onchange="getRestaurants()"
											   name="Cities" placeholder="Chose City"/>
											<datalist id="cities">
												<?php
													if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){
														$q = "SELECT DISTINCT city FROM restaurants";
														$results = $conn->query($q);

														echo "<option value=\"-\"></option>\n";
														while($row = $results->fetch_assoc()){
															echo "<option value=\"".$row['city']."\"></option>\n";
														}
													}
													else{
														echo "-";
													}
												?>
											</datalist>
									</div>
									<div  class="restorant">
										<input list="restaurantData" id="autofillRes" name="Restaurant" placeholder="Restaurant"/>
										<datalist id="restaurantData">
											<option value="-" ></option>
										</datalist>
									</div>
									</form>
								</div>
    						</td>
                        </tr>
                        <!-- Empty row -->
						<tr height="38"><td width="1135" height="18"></td></tr>
						<!-- Main Table -->
                        <tr height="18"><td width="835" height="18">
							<table>
								<tr>
									<td height="100px">
										<div id="sliderFrame">
											<div id="slider" style="margin-top:0px;">
												<img src="../img/slide/1.jpg" alt="Welcome to kamuri.al" /> 
												<img src="../img/slide/2.jpg" alt="Quickness, Quality, Facility!" />
												<img src="../img/slide/3.jpg" alt="Compare Prices" />
												<img src="../img/slide/4.jpg" alt="In every city!" />
												<img src="../img/slide/5.jpg"  alt="Easy to use"/>
											</div>        
										</div>
										<p>&nbsp;</p>
										<div>
											<img src="../img/extra/offer.jpg" class="offer"/></div><p>&nbsp;</p>
									</td>
									<td width="68px"></td>
									<td >
										<table style="margin-top:-48px;">
											<tr>
												<td class="news" width="280" align="center" style="margin-top:-100px;">Food Facts</td>
											</tr>
											<tr>
												<td width="280" align="justify">
													<div style="margin-top:0px;">
														<marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" height="220px" >
															<div class="movingText">
																<p>1. A survey showed 29% of adults say they have been splashed or scalded by hot drinks while dunking biscuits.</p>
																<p>2. Ortharexia Nervosa is an eating disorder where the sufferer is obsessed with eating healthy food.</p>
																<p>3. Ketchup was sold in the 1830s as medicine.</p>
																<p>4. Dry swallowing one teaspoon of sugar can commonly cure hic-ups.</p>
																<p>5. In Kentucky, it is illegal to carry an ice cream cone in your back pocket.</p>
																<p>6. The fear of cooking is known as Mageirocophobia and is a recognised phobia.</p>
																<p>7. The tea bag was introduced in 1908 by Thomas Sullivan of New York.</p>
																<p>8. The tall chef’s hat is called a toque.</p>
																<p>9. Arachibutyrophobia is the fear of peanut butter sticking to the roof of the mouth.</p>
																<p>10. In South Africa, termites and ants are often roasted and eaten by the handful, like popcorn.</p>
																<p>11. Every time you lick a stamp, you consume 1/10 of a calorie.</p>
																<p>12. Pearls melt in vinegar.</p>
																<p>13. The ’57’ on the Heinz ketchup bottle represents the number of pickle types the company once had.</p>
																<p>14. Marmite was first introduced into the UK in 1902.</p>
																<p>15. The ancient Greeks chewed a gum-like substance called mastic that came from the bark of a tree.</p>
																<p>16. Honeybee workers must visit 2 million flowers to make one pound of honey.</p>
																<p>17. The fear of vegetables is called Lachanophobia.</p>
																<p>18. Almonds are a member of the peach family.</p>
																<p>19. If you boil beetroot in water, and then massage the water into your scalp each night, it works as an effective cure for dandruff.</p>
																<p>20. In the United States, lettuce is the second most popular fresh vegetable.</p>
																<p>21. Grape growing is the largest food industry in the world as there are more than 60 species and 8000 varieties of grapes.</p>
																<p>22. The average person eats eight pounds of grapes each year.</p>
																<p>23. There are more than 7,000 varieties of apples grown in the world.</p>
																<p>24. A cluster of bananas id formerly called a ‘hand’. Along that theme, a single banana is called a ‘finger’.</p>
																<p>25. Onion is Latin for ‘large pearl’.</p>
																<p>26. Apples, pears, cherries and strawberries are all members of the rose family.</p>
																<p>27. The word vegetable has no scientific definition, so it’s still acceptable to call a tomato a vegetable.</p>
																<p>28. In the Philippines, it is considered good luck if a coconut is cleanly split open without jagged edges.</p>
															</div>
														</marquee>
													</div>
												</td>
											</tr>
											<tr>
												<td height="8"></td>
											</tr>
											<tr>
												<td class="news" width="280" align="center" style="margin-top:-208px;">Marketing</td>
											</tr>
											<tr>
												<td height="8"></td>
											</tr>
											<tr>
												<td class="news" width="280" align="center" style="margin-top:-208px;">Artigiano</td>
											</tr>
											<tr>
												<td height="48"><img src="../img/sponsors/sponsor6.jpeg" height="158" width="280" class="offer"/></td>
											</tr>
											<tr>
												<td class="news" width="280" align="center" style="margin-top:-208px;">Food Tricks</td>
											</tr>
											<tr>
												<td height="48">
													<video width="280" height="158" autoplay loop muted class="video">
														<source src="../vids/tricks.ogv" type="video/webm">
													</video>
												</td>
											</tr>
										</table>
									</td>
								</tr>       
							</table> 
							<hr class="horizontalLine"/>
						</tr>
					</table>
					<!-- Table for buttons -->
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