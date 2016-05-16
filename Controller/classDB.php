<html>
<head>

	<title>Class Information Submission</title>
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
	
	if (isset ($_POST['deleteClass'])) {
		
		$classEntry = $_POST['classEntry'];
		
		if (empty($classEntry)) {
			
			echo "You must enter all fields!";
			
		}
		else {
			$query = "DELETE FROM class WHERE classEntry='$classEntry'";
			mysqli_query($conn, $query);
			
			if ($conn->query($query)===TRUE) {
				
				header("Refresh:0");
				echo "Record deleted successfully";
			
			} else {
			
				echo "Error deleting record: " . $conn->error;
			
			}
		}
		
		$conn->close();
	}
	
	if (isset ($_POST['editClass'])) {
	
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
	
		$classEntry = $_POST['classEntry'];
		$courseID = $_POST['courseID'];
		$semesterID = $_POST['semesterID'];
		$studentID = $_POST['studentID'];
		$grade = $_POST['grade'];
		
		if (empty($classEntry) || empty($courseID) || empty($semesterID) || empty($studentID) || empty($grade)) {
			echo "You must enter all fields!";
		}
		else {
			$query = "UPDATE class SET courseID='$courseID', semesterID='$semesterID', studentID='$studentID', grade='$grade' WHERE classEntry='$classEntry'";
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