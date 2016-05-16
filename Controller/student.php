<html>
<head>

	<title>Student Information Submission</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../View/style.css">
	
</head>

<body>

	<h2>
	<?php
	include "../Model/fileFunctions.php";
	include "../Model/databaseFunctions.php";
		
	if (isset ($_POST['submit'])) {
		
		$studentID = $_POST['studentID'];
		$firstName = $_POST['sFName'];
		$lastName = $_POST['sLName'];
		
		if (empty($studentID) || empty($firstName) || empty($lastName)) {
			echo "You must enter all fields!";
		}
		else {
			postStudent($studentID, $firstName, $lastName);
			echo "Information Submitted";
		}
	}
	
	if (isset ($_POST['submitDatabase'])) {
	
		$studentID = $_POST['studentID'];
		$firstName = $_POST['sFName'];
		$lastName = $_POST['sLName'];
		
		if (empty($studentID) || empty($firstName) || empty($lastName)) {
			echo "You must enter all fields!";
		}
		else {
			studentDB($studentID, $firstName, $lastName);
			echo "Information Submitted";
		}
	
	}
		
	?>
	</h2><br><br><br><br><br>
	<h3><a href="../View/index.php">Go Back</a></h3>
	
</body>

</html>