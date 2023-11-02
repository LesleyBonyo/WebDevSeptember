<?php
	//superglobals - in built variables
	/* $_POST - using the post method
	if (isset($_POST['firstname'],$_POST['email'])) {
		// code...
		$name = $_POST['firstname'];
		$email = $_POST['email'];

		echo "Welcome $name we have sent you an email on $email";
	} */

	// $_GET - using the get method
	if (isset($_GET['firstname'],$_GET['email'])) {
		// code...
		$name = $_GET['firstname'];
		$email = $_GET['email'];

		echo "Welcome $name we have sent you an email on $email";
	}
	

?>