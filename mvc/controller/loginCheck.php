<?php 
	session_start();

	//include "../model/userModel.php";
	//include_once "../model/userModel.php";
	//require "../model/userModel.php";
	require_once "../model/userModel.php";

	//print_r($_GET);  
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;

	if($username == null || $password == null){
		echo "null username/password";
	}else{

		$status = login($username, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
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