<?php
    if( isset($_POST['email']) && isset($_POST['pw']) ){
    	if(empty($_POST['email']) || empty($_POST['pw']))
    		echo "Fill both fields to login!";
    	else{
    		session_start();
    		//to limit connections to the database
    		//memcache will be used when we get popular
    		if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    			echo "You are already logged in!";
    		}
    		else{
    			//this will change to a MySQL DB we will buy
    			$conn = mysqli_connect("localhost", "root", "Asdf!234","myDBs");

    			
    			$email = mysqli_escape_string(strtolower(trim($_POST['email'])));
    			//here will go the encryption... Now calculation the strongest encryption I can make.
    			$pw = mysqli_escape_string($_POST['pw']);

    			$res = $conn->query("SELECT email,pw FROM users WHERE email = $email AND pw = $pw");
    			if(empty($res))
    				echo "Invalid email/password";
    			else{
    				$_SESSION['logged'] = true;
    				echo "Logged In";
    			}
    		}
    	}
    }
?>