<?php
	session_start();
	$update = 0;
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		include 'connect.php';
		$id = $_SESSION['id'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$sql = "UPDATE users SET email='$email', password='$password' WHERE user_id=$id";
		$result = mysqli_query($connect, $sql);
		if ($result){
			// code...
			$update = 1;
		} else{
			echo mysqli_error($connect);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
	<h1>Profile</h1>
	<p>Welcome to your profile <?php echo $_SESSION['email'];?></p>
	<form method="post">
	<table width="50%" style="margin: auto;">
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="email" value="<?php echo $_SESSION['email'];?>">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
			<input type="password" name="password" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Update Profile">
			</td>
		</tr>
	</table>
	</form>
	<?php
		if ($update) {
			// code...
			echo "<script> alert('Profile updated successfully')</script>";
			//echo "<p style='text-align: center;'>Profile updated successfully</p>";
		}
	?>
</body>
</html>