<?php 
//connect to db server
	$server = 'localhost';
	$dbuser = 'root';
	$dbpassword = '';
	$database = 'students'; //connect to db

	$connect = mysqli_connect($server, $dbuser, $dbpassword, $database);
	if (!$connect) {
		/*echo "Connection successful";
	} else{*/
		die(mysqli_error($connect));	
	}
	/*
	$sql = "CREATE DATABASE students";
	$result = mysqli_query($connect, $sql);
	if ($result) {
		// code...
		echo "Database created successfully";
	} else{
		echo "Not successful";
	}
	*/




?>