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
				$name = str_replace(" ", "_", $name);

				if(exec("java -cp /var/www/html Mail $email $name $msg", $output)){
					echo "<font color=\"green\"><br>".htmlentities($name).", your message was sent successfully! 
					<br>Wait for reply at ".htmlentities($email)."!</font>";	
				}
				else
					echo "<font color=\"red\">Sorry! We encountered a problem! Please retry!</font>";
				
				$_POST['name'] = "";
				$_POST['email'] = "";
				$_POST['msg'] = "";
			}
			else
				echo "<font color=\"red\">All fields must be filled!</font>";
		}
		else{
			echo "<font color=\"orange\">Waiting...</font>";
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
</body>
</html>