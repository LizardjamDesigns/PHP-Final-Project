<!DOCTYPE html>
<!-- Database Functions -->
<html>
<body>

<?php
	
	function createDB() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS college";
		if ($conn->query($sql) === TRUE) {
			echo "Database Connected";
		} else {
			echo "Error creating database: " . $conn->error;
		}
		
		$conn->close();
	}
	
	
	function studentDB($studentID, $firstName, $lastName) {	

		$db = "college";
		
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if ($conn->query("SHOW TABLES LIKE 'student'")->num_rows==0) { 
		
			$sql = "CREATE TABLE student (
			studentID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			studentFName VARCHAR(30) NOT NULL,
			studentLName VARCHAR(30) NOT NULL
			)";
		}

		
		else if ($conn->query("SHOW TABLES LIKE 'student'")->num_rows>0) {
		
			$sql = "INSERT INTO student(studentID, studentFName, studentLName) VALUES('$studentID', '$firstName', '$lastName')";
			
		}
		
		if ($conn->query($sql)===TRUE) {
			$insert = "INSERT INTO student(studentID, studentFName, studentLName) VALUES('$studentID', '$firstName', '$lastName')";
			mysqli_query($conn, $insert);
			mysqli_close($conn);
			header("Refresh:0");
		}
		else {
			echo "Error creating record: " . $conn->error;
		}
		
	}
	
	function displayStudentDB() {
		$db = "college";
		
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT studentID, studentFName, studentLName FROM student";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Student ID</th><th>Student Name</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["studentID"]."</td><td>".$row["studentFName"]." ".$row["studentLName"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Database Not Found";
		}
		
		$conn->close();
	}
	
	
	function instructorDB($instructorID, $firstName, $lastName) {
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if ($conn->query("SHOW TABLES LIKE 'instructor'")->num_rows==0) { 
		
			$sql = "CREATE TABLE instructor (
			instructorID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			instructorFName VARCHAR(30) NOT NULL,
			instructorLName VARCHAR(30) NOT NULL
			)";
		}
		
		else if ($conn->query("SHOW TABLES LIKE 'instructor'")->num_rows>0) {
		
			$sql = "INSERT INTO instructor(instructorID, instructorFName, instructorLName) VALUES('$instructorID', '$firstName', '$lastName')";
			
		}
			
		if ($conn->query($sql) === TRUE) {
			$insert = "INSERT INTO instructor(instructorID, instructorFName, instructorLName) VALUES('$instructorID', '$firstName', '$lastName')";
			mysqli_query($conn, $insert);
			mysqli_close($conn);
			header("Refresh:0");
		} else {
			echo "Error creating table: " . $conn->error;
		}
		
		
		/*else if ($conn->query("SHOW TABLES LIKE 'class'")->num_rows>0) {
		
			$sql = "INSERT INTO class(classEntry, courseID, semesterID, studentID, grade) VALUES('', '$courseID', '$semesterID', '$studentID', '$grade')";
			
		}
			
		if ($conn->query($sql) === TRUE) {
			$insert = "INSERT INTO class(courseID, semesterID, studentID, grade) VALUES('$courseID', '$semesterID', '$studentID', '$grade')";
			mysqli_query($conn, $insert);
			mysqli_close($conn);
			header("Refresh:0");
		} else {
			echo "Error creating table: " . $conn->error;
		}
		
		$conn->close();*/
	}
	
	function displayInstructorDB() {
		$db = "college";
		
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT instructorID, instructorFName, instructorLName FROM instructor";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Instructor ID</th><th>Instructor Name</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["instructorID"]."</td><td>".$row["instructorFName"]." ".$row["instructorLName"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Database Not Found";
		}
		
		$conn->close();
	}
	
	function classDB($courseID, $semesterID, $studentID, $grade) {
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if ($conn->query("SHOW TABLES LIKE 'class'")->num_rows==0) { 
		
			$sql = "CREATE TABLE class (
			classEntry INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			courseID VARCHAR(20) NOT NULL,
			semesterID VARCHAR(30) NOT NULL,
			studentID INT(30),
			grade VARCHAR(1) NOT NULL
			)";
		}
		
		if ($conn->query($sql) === TRUE) {
			echo "Success!";
		} else {
			echo "Error creating table: " . $conn->error;
		}
		
		if ($conn->query("SHOW TABLES LIKE 'class'")->num_rows>0) {
		
			$sql = "INSERT INTO class(classEntry, courseID, semesterID, studentID, grade) VALUES('', '$courseID', '$semesterID', '$studentID', '$grade')";
			
		}
		
		if ($conn->query($sql) === TRUE) {
			echo "Success!";
			mysqli_close($conn);
			header("Refresh:0");
		} else {
			echo "Error creating table: " . $conn->error;
		}
		
		
	}
	
	function displayClassDB() {
		$db = "college";
		
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT classEntry, courseID, semesterID, studentID, grade FROM class";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Entry #</th><th>Course ID</th><th>Semester ID</th><th>Student ID</th><th>Grade</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["classEntry"]."</td><td>".$row["courseID"]."</td><td>".$row["semesterID"]."</td><td>".$row["studentID"]."</td><td>".$row["grade"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Database Not Found";
		}
		
		$conn->close();
	}
	
	function courseDB($instructorID, $courseName, $courseID, $semesterID, $room, $days, $time) {
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if ($conn->query("SHOW TABLES LIKE 'course'")->num_rows==0) { 
		
			$sql = "CREATE TABLE course (
			courseEntry INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			instructorID INT(20),
			courseName VARCHAR(30) NOT NULL,
			courseID VARCHAR(30) NOT NULL,
			semesterID VARCHAR(30) NOT NULL,
			room VARCHAR(30) NOT NULL,
			days VARCHAR(30) NOT NULL,
			time VARCHAR(30) NOT NULL
			)";
		}
		
		if ($conn->query($sql) === TRUE) {
			echo "Success!";
		} else {
			echo "Error creating table: " . $conn->error;
		}
		
		if ($conn->query("SHOW TABLES LIKE 'course'")->num_rows>0) {
		
			$sql = "INSERT INTO course(instructorID, courseName, courseID, semesterID, room, days, time) VALUES('$instructorID', '$courseName', '$courseID', '$semesterID', '$room', '$days', '$time')";
			
		}
		
		if ($conn->query($sql) === TRUE) {
			echo "Success!";
			mysqli_close($conn);
			header("Refresh:0");
		} else {
			echo "Error creating table: " . $conn->error;
		}
		

	}
	
	function displayCourseDB() {
		$db = "college";
		
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'college');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT courseEntry, instructorID, courseName, courseID, semesterID, room, days, time FROM course";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table><tr><th>Course Entry</th><th>Instructor ID</th><th>Course Name</th><th>Course ID</th><th>Semester ID</th><th>Room</th><th>Days</th><th>Time</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["courseEntry"]."</td><td>".$row["instructorID"]."</td><td>".$row["courseName"]."</td><td>".$row["courseID"]."</td><td>".$row["semesterID"]."</td><td>".$row["room"]."</td><td>".$row["days"]."</td><td>".$row["time"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Database Not Found";
		}
		
		$conn->close();
	}
	

?>

</body>
</html>