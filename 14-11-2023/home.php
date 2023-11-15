<?php
	session_start();
	if (!isset($_SESSION['email'],$_SESSION['id'])) {
		// code...
		header('location:login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<button><a href="logout.php">Logout</a></button>
	<button><a href="profile.php">Profile</a></button>
	<h1>Home</h1>
	
	<?php
		include 'connect.php';
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM users WHERE user_id=$id";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			$row = mysqli_fetch_assoc($result);
			$email = $row['email'];
			echo "<p>Welcome $email</p>";
		}

	?>

</body>
</html>