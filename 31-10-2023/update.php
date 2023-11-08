<?php
	include 'connect.php';
	$id = $_GET['updateid'];
	$mysql = "SELECT * FROM student_details WHERE student_id=$id";
	$result = mysqli_query($connect, $mysql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$student_name = $row['student_name'];
		$student_course = $row['course'];
		$phoneno = $row['phone_no'];
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// code...
		
		$name = $_POST['studentName'];
		$course = $_POST['course'];
		$phone_no = $_POST['phoneNo'];

		$sql = "UPDATE student_details SET student_name='$name', course='$course', phone_no=$phone_no WHERE student_id=$id"; 
		$result = mysqli_query($connect, $sql);
		if ($result) {
			// code...
			//echo "Student details updated successfully";
			header("location:display.php");
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
	<title>Update</title>
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
	<h1>Update Student Details</h1>
	<form method="post">
		<input type="text" name="studentName" placeholder="Enter student Name" 
		value="<?php echo $student_name;  ?>">
		<select name="course">
			<option><?php echo $student_course;  ?></option>
			<option>--Select Course--</option>
			<option>DBIT</option>
			<option>ICS</option>
			<option>BBIT</option>
		</select>
		<input type="number" name="phoneNo" placeholder="Enter Phone No" value="<?php echo $phoneno;  ?>">
		<input type="submit" name="submit" value="Update">
	</form>

</body>
</html>