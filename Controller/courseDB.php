<html>
<head>

	<title>Course Information Submission</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../View/style.css">
	
</head>

<body>

	<h2>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "college";
		
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
		
	if (isset ($_POST['deleteCourse'])) {
		
		$courseEntry = $_POST['courseEntry'];
		
		if (empty($courseEntry)) {
			echo "You must enter all fields!";
		}
		else {
			$query = "DELETE FROM course WHERE courseEntry='$courseEntry'";
			mysqli_query($conn, $query);
			
			if ($conn->query($query)===TRUE) {
				
				header("Refresh:0");
				echo "Record deleted successfully";
			
			} else {
			
				echo "Error deleting record: " . $conn->error;
			
			}
		}
	}
		
	if (isset ($_POST['editCourse'])) {
	
		$courseEntry = $_POST['courseEntry'];
		$courseID = $_POST['courseID'];
		$courseName = $_POST['courseName'];
		$semesterID = $_POST['semesterID'];
		$instructorID = $_POST['instructorID'];
		$room = $_POST['roomNum'];
		$days = $_POST['courseDays'];
		$time = $_POST['courseTimes'];
		
		if (empty($courseEntry) || empty($courseID) || empty($courseName) || empty($semesterID) || empty($instructorID) || empty($room) || empty($days) || empty($time)) {
			echo "You must enter all fields!";
		}
		else {
			$query = "UPDATE course SET instructorID='$instructorID', courseName='$courseName', courseID='$courseID', semesterID='$semesterID', room='$room', days='$days', time='$time' WHERE courseEntry='$courseEntry'";
			mysqli_query($conn, $query);
			
			if ($conn->query($query)===TRUE) {
			
				header("Refresh:0");
				echo "Record edited successfully";
			
			} else {
			
				echo "Error editing record: " . $conn->error;
			
			}
		}
		
		$conn->close();

	}
		
	?>
	
	</h2><br><br><br><br><br>
	<h3><a href="../View/index.php">Go Back</a></h3>

</body>

</html>