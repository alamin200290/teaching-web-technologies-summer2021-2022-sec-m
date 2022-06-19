<?php 
	session_start();

	//print_r($_GET);  
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;

	if($username == null || $password == null){
		echo "null username/password";
	}else{
		if($username == "admin" && $password == "123"){
			$_SESSION['status'] = true;
			header('location: home.php');
		}else{
			echo "invalid user";
		}
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>