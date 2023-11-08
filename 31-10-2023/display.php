<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table, th, td{
			border: 1px solid grey;
			border-collapse: collapse;
			padding: 9px;
			width: 50%;
		}
		table{
			margin: auto;
		}
		th {
			background-color: #50E3C2;
		}
		h1{
			text-align: center;
		}

	</style>
</head>
<body>
	<button><a href="register.php">Register</a></button>
	<h1>Registered Students</h1>
	<table>
		<tr>
			<th>Student_No</th>
			<th>Student_Name</th>
			<th>Course</th>
			<th>Phone_No</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
			include 'connect.php';
			$sql = "SELECT * FROM student_details";
			$result = mysqli_query($connect, $sql);
		if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
					$id = $row['student_id'];
					$name = $row['student_name'];
					$course = $row['course'];
					$phone_no = $row['phone_no'];
				echo "<tr>
						<td>$id</td>
						<td>$name</td>
						<td>$course</td>
						<td>$phone_no</td>
				<td>
				<button>
				<a href='update.php?updateid=$id'>Update</a>
				</button>
				</td>
				<td>
				<button>
	<a href='delete.php?deleteid=$id'>Delete</a>
				</button></td>
					</tr>";	
				}
				
				// echo $row['student_id'];
				
			}



		?>
	</table>

</body>
</html>