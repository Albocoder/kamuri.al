<!DOCTYPE Html>
<html>
<body>
	<b>Status:</b>
	<?php
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
			if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$msg = $_POST['msg'];
				$displayName = $name;
				$displayEmail = $email;
				$name = str_replace("_", "-v-", $name);
				$name = str_replace(" ", "_", $name);
				$name = str_replace("(", "-ciop-",$name);
				$name = str_replace(")", "-cicl-", $name);

				$email = str_replace("_", "-v-",$email);
				$email = str_replace(" ", "_", $email);
				$email = str_replace("(","-ciop-", $email);
				$email = str_replace(")", "-cicl-", $email);

				$msg = str_replace("_","-v-",$msg);
				$msg = str_replace(" ", "_", $msg);
				$msg = str_replace("(","-ciop-",$msg);
				$msg = str_replace(")","-cicl-",  $msg);

				if(exec("java -cp /var/www/html/kamuri.al/mailer/toAdmins Mail $email $name $msg", $output))
					echo "<font color=\"green\"><br>".htmlentities($displayName).", your message was sent successfully!
					<br>Wait for reply at ".htmlentities($displayEmail)."!</font>";
				else{
					echo "<font color=\"red\">Sorry! We encountered a problem!.</font>";
				}

				$_POST['name'] = "";
				$_POST['email'] = "";
				$_POST['msg'] = "";
			}
			else
				echo "<font color=\"red\">All fields must be filled!</font>";
		}
		else{
			echo "<font color=\"orange\">Waiting... Fill the fields! <br>Any special character like #$%^&* will be ignored!</font>";
		}
	?>
	<br>
	<br>
	<hr>
	<br>
	<form action="contactMe.php" method="POST">
		Name:<br><input name="name" placeholder="Name here" type="text" maxlength="20"/> <br><br>
		Email:<br><input name="email" placeholder="Email to get the reply" type="text" maxlength="100"/> <br><br>
		Message:<br><textarea name="msg" placeholder="Your question goes here!" cols="40" rows="10"></textarea><br>
		<input type="submit" value="Send!">
	</form>
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
