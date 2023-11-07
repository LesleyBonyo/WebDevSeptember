<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// code...
		include 'connect.php';
		$name = $_POST['studentName'];
		$course = $_POST['course'];
		$phone_no = $_POST['phoneNo'];

		$sql = "INSERT INTO student_details(student_name, course, phone_no) VALUES('$name', '$course', $phone_no)";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			// code...
			echo "Student added successfully";
		} else{
			echo "Not added successfully";
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<style>
		h1 {
			text-align: center;
		}
		input, select{
			display: block;
			margin: 5px auto;
			padding: 8px 20px;
		}
	</style>
</head>
<body>
	<h1>Register Student</h1>
	<form method="post">
		<input type="text" name="studentName" placeholder="Enter student Name">
		<select name="course">
			<option>--Select Course--</option>
			<option>DBIT</option>
			<option>ICS</option>
			<option>BBIT</option>
		</select>
		<input type="number" name="phoneNo" placeholder="Enter Phone No">
		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>