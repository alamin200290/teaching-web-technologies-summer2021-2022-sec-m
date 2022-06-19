<?php 
	session_start();

	//print_r($_GET);  
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;

	if($username == null || $password == null){
		echo "null username/password";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($username == trim($user[0]) && $password == trim($user[1])){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: home.php');
			}
		}
		echo "invalid user";
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>