<?php
    if( isset($_POST['email']) && isset($_POST['pw']) ){
    	if(empty($_POST['email']) || empty($_POST['pw']))
    		echo "Fill both fields to login!";
    	else{
    		session_start();
    		//to limit connections to the database
    		//memcache will be used when we get popular
    		if(isset($_SESSION['allowed']) && $_SESSION['allowed'] == true){
    			echo "You are already logged in!";
    		}
    		else{
    			//this will change to a MySQL DB we will buy
    			if($conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs")){

	    			
	    			echo $email = mysqli_escape_string(strtolower(trim($_POST['email'])));
	    			echo $pw = mysqli_escape_string($_POST['pw']);
	    			
	    			//here will go the encryption... Now calculation the strongest encryption I can make.
	    			
	    			$res = $conn->query("SELECT id,email,pw FROM kamuriTBL WHERE email = $email AND pw = $pw");
	    			if(empty($res))
	    				echo "Invalid email/password";
	    			else{
	    				$_SESSION['allowed'] = true;
	    				echo "Logged In";	
	    			}
    			}
    			else{
    				echo "Couldn't connect to database! Contact the admin <a href="/contactMe.php">here</a> 
    				if you still see this error after refreshing";
    			}
    		}
    	}
    }
?>