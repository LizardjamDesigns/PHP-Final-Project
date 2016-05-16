<html>
<head>

	<title>Course Information Submission</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../View/style.css">
	
</head>

<body>

	<h2>
	<?php
	include "../Model/fileFunctions.php";
	include "../Model/databaseFunctions.php";
		
	if (isset ($_POST['submit'])) {
		
		$courseID = $_POST['courseID'];
		$courseName = $_POST['courseName'];
		$semesterID = $_POST['semesterID'];
		$instructorID = $_POST['instructorID'];
		$room = $_POST['roomNum'];
		$days = $_POST['courseDays'];
		$time = $_POST['courseTimes'];
		
		if (empty($courseID) || empty($courseName) || empty($semesterID) || empty($instructorID) || empty($room) || empty($days) || empty($time)) {
			echo "You must enter all fields!";
		}
		else {
			postCourse($courseID, $courseName, $semesterID, $instructorID, $room, $days, $time);
			echo "Information Submitted";
		}
	}
		
	if (isset ($_POST['submitDatabase'])) {
	
		$courseID = $_POST['courseID'];
		$courseName = $_POST['courseName'];
		$semesterID = $_POST['semesterID'];
		$instructorID = $_POST['instructorID'];
		$room = $_POST['roomNum'];
		$days = $_POST['courseDays'];
		$time = $_POST['courseTimes'];
		
		if (empty($courseID) || empty($courseName) || empty($semesterID) || empty($instructorID) || empty($room) || empty($days) || empty($time)) {
			echo "You must enter all fields!";
		}
		else {
			courseDB($courseID, $courseName, $semesterID, $instructorID, $room, $days, $time);
			echo "Information Submitted";
		}

	}
		
	?>
	
	</h2><br><br><br><br><br>
	<h3><a href="../View/index.php">Go Back</a></h3>

</body>

</html>