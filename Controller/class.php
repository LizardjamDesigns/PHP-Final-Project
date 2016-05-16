<html>
<head>

	<title>Class Information Submission</title>
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
		$semesterID = $_POST['semesterID'];
		$studentID = $_POST['studentID'];
		$grade = $_POST['grade'];
		
		if (empty($courseID) || empty($semesterID) || empty($studentID) || empty($grade) ) {
			echo "You must enter all fields!";
		}
		else {
			postClass($courseID, $semesterID, $studentID, $grade);
			echo "Information Submitted";
		}
	}
		
	if (isset ($_POST['submitDatabase'])) {
	
		$courseID = $_POST['courseID'];
		$semesterID = $_POST['semesterID'];
		$studentID = $_POST['studentID'];
		$grade = $_POST['grade'];
		
		if (empty($courseID) || empty($semesterID) || empty($studentID) || empty($grade) ) {
			echo "You must enter all fields!";
		}
		else {
			classDB($courseID, $semesterID, $studentID, $grade);
			echo "Information Submitted";
		}
		
	}
	
	?>	
	</h2><br><br><br><br><br>
	<h3><a href="../View/index.php">Go Back</a></h3>

</body>

</html>