<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if($username == null || $password == null || $email == null){
		echo "null username/password/email";
	}else{

		$user = $username."|".$password."|".$email."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: login.html');
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>