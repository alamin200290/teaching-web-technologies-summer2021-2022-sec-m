<?php 


/*	$file = fopen('user.txt', 'r');
	//$data = fread($file, filesize('user.txt'));
	//$data = fgets($file);
	//$data = fgetc($file);
	echo $data;
	fclose($file);
	*/
/*
	$file = fopen('user.txt', 'w');
	$data = "this is new line...";
	fwrite($file, $data);
	echo "Done";*/

	$file = fopen('user.txt', 'a');
	$data = "this is new line...\r\n";
	fwrite($file, $data);
	echo "Done";
?>