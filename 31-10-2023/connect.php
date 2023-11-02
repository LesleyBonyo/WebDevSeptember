<?php 
//connect to db server
	$server = 'localhost';
	$dbuser = 'root';
	$dbpassword = '';

	$connect = mysqli_connect($server, $dbuser, $dbpassword);
	if ($connect) {
		echo "Connection successful";
	} else{
		die(mysqli_error($connect));	
	}




?>