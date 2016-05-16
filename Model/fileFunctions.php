<html>
<body>
	
	<?php
	
		function postClass($courseID, $semesterID, $studentID, $grade){
			$myFile = "../Model/Class.txt";
			$fileOpen = fopen($myFile, 'a') or die("Can't open file!");
			fwrite($fileOpen, $courseID." | ");
			fwrite($fileOpen, $semesterID." | ");
			fwrite($fileOpen, $studentID." | ");
			fwrite($fileOpen, $grade.PHP_EOL);
			fclose($fileOpen);
		}
		
		function postCourse($courseID, $courseName, $semesterID, $instructorID, $room, $days, $time){
			$myFile = "../Model/Course.txt";
			$fileOpen = fopen($myFile, 'a') or die("Can't open file!");
			fwrite($fileOpen, $courseID." | ");
			fwrite($fileOpen, $courseName." | ");
			fwrite($fileOpen, $semesterID." | ");
			fwrite($fileOpen, $instructorID." | ");
			fwrite($fileOpen, $room." | ");
			fwrite($fileOpen, $days." | ");
			fwrite($fileOpen, $time.PHP_EOL);
			fclose($fileOpen);
		}
		
		function postStudent($studentID, $firstName, $lastName){
			$myFile = "../Model/Student.txt";
			$fileOpen = fopen($myFile, 'a') or die("Can't open file!");
			fwrite($fileOpen, $studentID." | ");
			fwrite($fileOpen, $firstName." | ");
			fwrite($fileOpen, $lastName.PHP_EOL);
			fclose($fileOpen);
		}
		
		function postInstructor($instructorID, $firstName, $lastName){
			$myFile = "../Model/Instructor.txt";
			$fileOpen = fopen($myFile, 'a') or die("Can't open file!");
			fwrite($fileOpen, $instructorID." | ");
			fwrite($fileOpen, $firstName." | ");
			fwrite($fileOpen, $lastName.PHP_EOL);
			fclose($fileOpen);
		}
	
	
	
	?>
	
</body>
</html>
