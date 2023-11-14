<?php
//connect to db
$connect = mysqli_connect('localhost','root','','students');
if (!$connect) {
	// code...
	echo mysqli_error($connect);
}



?>