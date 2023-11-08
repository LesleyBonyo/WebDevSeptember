<?php
	include "connect.php";
	$id = $_GET['deleteid'];
	$sql = "DELETE FROM student_details WHERE student_id=$id";
	$result = mysqli_query($connect,$sql);
	if($result){
		//echo "Deleted successfully";
		header('location:display.php');
	} else{
		echo "Not successful".mysqli_error($connect);
	}





?>