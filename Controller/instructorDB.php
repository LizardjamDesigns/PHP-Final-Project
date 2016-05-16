<html>
<head>

	<title>Instructor Information Submission</title>
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
	
	if (isset ($_POST['deleteInstructor'])) {
		
		$instructorID = $_POST['instructorID'];
		
		if (empty($instructorID)) {
			
			echo "You must enter all fields!";
			
		}
		else {
			$query = "DELETE FROM instructor WHERE instructorID='$instructorID'";
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
	
	if (isset ($_POST['editInstructor'])) {
	
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
	
		$instructorID = $_POST['instructorID'];
		$firstName = $_POST['iFName'];
		$lastName = $_POST['iLName'];
		
		if (empty($instructorID) || empty($firstName) || empty($lastName)) {
			echo "You must enter all fields!";
		}
		else {
			$query = "UPDATE instructor SET instructorFName='$firstName', instructorLName='$lastName' WHERE instructorID='$instructorID'";
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