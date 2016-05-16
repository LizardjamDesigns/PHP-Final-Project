<!DOCTYPE html>

<html >

		<!-- Create DB if it does not exist -->
		<?php
		include('../Model/databaseFunctions.php');
		createDB();
		?>
	
	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<!-- Allows for multiple pages in one page -->
		<script>
			function show(shown, hidden) {
			document.getElementById(shown).style.display='block';
			document.getElementById(hidden).style.display='none';
			return false;
			}
		</script>
	
	</head>
	
	<body>
<!-------------------------------------------Home Page-------------------------------------------------->	
		<div id="Home">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
					
				</div>
				
				<div class="col-11 header">
				
					<h1>Course Management System</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
								
				<!-- Mobile Nav -->
				<div class="row mobile">
					<nav id="mobNav">
						<a class="noHover mobile" href="#Home">Home</a> <br><br>
						<a class="noHover mobile" href="#Student" onclick="return show('Student', 'Home');">Students</a> <br><br>
						<a class="noHover mobile" href="#Instructor" onclick="return show('Instructor', 'Home');">Instructors</a> <br><br>
						<a class="noHover mobile" href="#Course" onclick="return show('Course', 'Home');">Courses</a> <br><br>
						<a class="noHover mobile" href="#Class" onclick="return show('Class', 'Home');">Classes</a>	<br><br>
					</nav>
				</div>
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'Home');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'Home');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'Home');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'Home');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'Home');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'Home');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'Home');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'Home');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content desktop">
					<h3>Welcome to the Course Management System.</h3>
					<h5>Please select a category to enter new records or modify the database.</h5>
					<br>
					<br>
					<br>
					<p>Thank you for using the Course Management System.</p>
				</div>
				
				<div class="col-10 content mobile">
					<h3>Welcome to the Course Management System.</h3>
					<h5>This is the mobile implementation of the Course Management System</h5>
					<h5>Due to visibility, you can only add records with the mobile version</h5>
					<h5>If you wish to edit the database you must use a device with a larger screen</h5>
					<h5>We apologize for any inconvenience</h5>
					<br>
					<br>
					<p>Thank you for using the Course Management System.</p>
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>

<!----------------------------------------------------Student Page------------------------------------------------------>
		
<div id="Student" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Student Data Input</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
								
				<!-- Mobile Nav -->
				<div class="row mobile">
					<nav id="mobNav">
						<a class="noHover mobile" href="#Home" onclick="return show('Home', 'Student');">Home</a> <br><br>
						<a class="noHover mobile" href="#Student">Add Student</a> <br><br>
						<a class="noHover mobile" href="#Instructor" onclick="return show('Instructor', 'Student');">Add Instructor</a> <br><br>
						<a class="noHover mobile" href="#Course" onclick="return show('Course', 'Student');">Add Course</a> <br><br>
						<a class="noHover mobile" href="#Class" onclick="return show('Class', 'Student');">Add Class</a>	<br><br>
					</nav>
				</div>
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'Student');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'Student');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'Student');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'Student');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'Student');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'Student');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'Student');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'Student');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<form action="../Controller/student.php" method="post"><br>
						Student ID: <input type="number" name="studentID"><br><br><br>
						First Name: <input type="text" name="sFName"><br><br><br>
						Last Name: <input type="text" name="sLName"><br><br><br>
						<input type="submit" name="submit" value="Post to File">
						<input type="submit" name="submitDatabase" value="Post to Database">
					</form>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
<!-----------------------------------------------Instructor Page-------------------------------------------------------->		
		
<div id="Instructor" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Instructor Data Input</h1>

					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
								
				<!-- Mobile Nav -->
				<div class="row mobile">
					<nav id="mobNav">
						<a class="noHover mobile" href="#Home" onclick="return show('Home', 'Instructor');">Home</a> <br><br>
						<a class="noHover mobile" href="#Student" onclick="return show('Student', 'Instructor');">Add Student</a> <br><br>
						<a class="noHover mobile" href="#Instructor">Add Instructor</a> <br><br>
						<a class="noHover mobile" href="#Course" onclick="return show('Course', 'Instructor');">Add Course</a> <br><br>
						<a class="noHover mobile" href="#Class" onclick="return show('Class', 'Instructor');">Add Class</a>	<br><br>
					</nav>
				</div>
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'Instructor');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'Instructor');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'Instructor');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'Instructor');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'Instructor');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'Instructor');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'Instructor');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'Instructor');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<form action="../Controller/instructor.php" method="post"><br>
						Instructor ID: <input type="number" name="instructorID"><br><br><br>
						First Name: <input type="text" name="iFName"><br><br><br>
						Last Name: <input type="text" name="iLName"><br><br><br>
						<input type="submit" name="submit" value="Post to File">
						<input type="submit" name="submitDatabase" value="Post to DataBase">
					</form>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
			
<!--------------------------------------------------------Course Page------------------------------------------------->			
		
<div id="Course" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Course Data Input</h1>

					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
								
				<!-- Mobile Nav -->
				<div class="row mobile">
					<nav id="mobNav">
						<a class="noHover mobile" href="#Home" onclick="return show('Home', 'Course');">Home</a> <br><br>
						<a class="noHover mobile" href="#Student" onclick="return show('Student', 'Course');">Add Student</a> <br><br>
						<a class="noHover mobile" href="#Instructor" onclick="return show('Instructor', 'Course');">Add Instructor</a> <br><br>
						<a class="noHover mobile" href="#Course">Add Course</a> <br><br>
						<a class="noHover mobile" href="#Class" onclick="return show('Class', 'Course');">Add Class</a>	<br><br>
					</nav>
				</div>
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'Course');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'Course');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'Course');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'Course');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'Course');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'Course');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'Course');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'Course');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<form action="../Controller/course.php" method="post"><br>
						Course ID: <input type="number" name="courseID"><br><br><br>
						Course Name: <input type="text" name="courseName"><br><br><br>
						Semester ID: <input type="text" name="semesterID"><br><br><br>
						Instructor ID: <input type="number" name="instructorID"><br><br><br>
						Room: <input type="text" name="roomNum"><br><br><br>
						Days: <input type="text" name="courseDays"><br><br><br>
						Times: <input type="text" name="courseTimes"><br><br><br>
						<input type="submit" name="submit" value="Post to File">
						<input type="submit" name="submitDatabase" value="Post to DataBase">
					</form>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
			
<!----------------------------------------------------------Class Page---------------------------------------------------------------->			
		
<div id="Class" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Class Data Input</h1>

					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
								
				<!-- Mobile Nav -->
				<div class="row mobile">
					<nav id="mobNav">
						<a class="noHover mobile" href="#Home" onclick="return show('Home', 'Class');">Home</a> <br><br>
						<a class="noHover mobile" href="#Student" onclick="return show('Student', 'Class');">Add Student</a> <br><br>
						<a class="noHover mobile" href="#Instructor" onclick="return show('Instructor', 'Class');">Add Instructor</a> <br><br>
						<a class="noHover mobile" href="#Course" onclick="return show('Course', 'Class');">Add Course</a> <br><br>
						<a class="noHover mobile" href="#Class">Add Class</a>	<br><br>
					</nav>
				</div>
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'Class');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'Class');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'Class');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'Class');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'Class');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'Class');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'Class');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'Class');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<form action="../Controller/class.php" method="post"><br>
						Course ID: <input type="number" name="courseID"><br><br><br>
						Semester ID: <input type="text" name="semesterID"><br><br><br>
						Student ID: <input type="text" name="studentID"><br><br><br>
						Grade: <input type="text" name="grade"><br><br><br>
						<input type="submit" name="submit" value="Post to File">
						<input type="submit" name="submitDatabase" value="Post to DataBase">
					</form>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
<!--------------------------------------------------Student DB page--------------------------------------->		

<div id="StudentDB" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Student Database Information</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'StudentDB');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'StudentDB');">Add New Student</a></li>
								<li><a href="#StudentDB">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'StudentDB');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'StudentDB');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'StudentDB');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'StudentDB');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'Student');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'StudentDB');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<?php
						displayStudentDB();
					?>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-6">
				
					<form class="deleteForm" action="../Controller/studentDB.php" method="post">
						
						Student ID:<br>
						<input type="text" name="studentID"><br>
						<input type="submit" name="deleteStudent" value="Delete Record">
						
					</form>
					
				</div>
				
				<div class="col-6">
					
					<form class="editForm" action="../Controller/studentDB.php" method="post">
					
						Student ID: <input type="number" name="studentID"><br>
						First Name: <input type="text" name="sFName"><br>
						Last Name: <input type="text" name="sLName"><br>
						<input type="submit" name="editStudent" value="Edit Record">
						
					</form>
					
				</div>
			
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
<!----------------------------------------Instructor DB page------------------------------------->

<div id="InstructorDB" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Instructor Database Information</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'InstructorDB');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'InstructorDB');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'InstructorDB');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'InstructorDB');">Add New Instructor</a></li>
								<li><a href="#InstructorDB">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'InstructorDB');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'InstructorDB');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'InstructorDB');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'InstructorDB');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<?php
						displayInstructorDB();
					?>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-6">
				
					<form class="deleteForm" action="../Controller/instructorDB.php" method="post">
						
						Instructor ID:<br>
						<input type="text" name="instructorID"><br>
						<input type="submit" name="deleteInstructor" value="Delete Record">
						
					</form>
					
				</div>
				
				<div class="col-6">
					
					<form class="editForm" action="../Controller/instructorDB.php" method="post">
					
						Instructor ID: <input type="number" name="instructorID"><br>
						First Name: <input type="text" name="iFName"><br>
						Last Name: <input type="text" name="iLName"><br>
						<input type="submit" name="editInstructor" value="Edit Record">
						
					</form>
					
				</div>
			
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
<!-----------------------------------------Course DB page--------------------------------------------->

<div id="CourseDB" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Course Database Information</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'CourseDB');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'CourseDB');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'CourseDB');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'CourseDB');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'CourseDB');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'CourseDB');">Add New Course</a></li>
								<li><a href="#CourseDB">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'CourseDB');">Add New Class</a></li>
								<li><a href="#ClassDB" onclick="return show('ClassDB', 'CourseDB');">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<?php
						displayCourseDB();
					?>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-6">
				
					<form class="deleteForm" action="../Controller/courseDB.php" method="post">
						
						Course Entry #:<br>
						<input type="text" name="courseEntry"><br>
						<input type="submit" name="deleteCourse" value="Delete Record">
						
					</form>
					
				</div>
				
				<div class="col-6">
					
					<form class="editForm" action="../Controller/courseDB.php" method="post">
						
						Course Entry #: <input type="number" name="courseEntry"><br>
						Course ID: <input type="number" name="courseID"><br>
						Course Name: <input type="text" name="courseName"><br>
						Semester ID: <input type="text" name="semesterID"><br>
						Instructor ID: <input type="number" name="instructorID"><br>
						Room: <input type="text" name="roomNum"><br>
						Days: <input type="text" name="courseDays"><br>
						Times: <input type="text" name="courseTimes"><br>
						<input type="submit" name="editCourse" value="Edit Record">
						
					</form>
					
				</div>
			
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
<!------------------------------------------Class DB page-------------------------------------------------->

<div id="ClassDB" style="display:none">
			
			<div class="row">
			<!-- Page Header -->
				<div class="col-1 header">
				
					<img class="image desktop" src="https://www.mindflash.com/wp-content/uploads/2012/03/What-Is-an-LMS12.jpg" alt="File System" width="25px" height="80.5px" />
					<img class="image mobile" src="http://thumbs.dreamstime.com/t/mobile-communication-web-heade-4082313.jpg" alt="Header Image" width="100%" height="100px" />
				</div>
				
				<div class="col-11 header">
				
					<h1>Class Database Information</h1>
					
				</div>
				
			</div>
			
			<!-- Nav and content -->
			<div class="row">
				
				<nav class="desktop nav">
					<ul>
						<li>
							<a href="#Home" onclick="return show('Home', 'ClassDB');">Home</a>
						</li>
						
						<li>
							<a href="#">Students</a>
							<ul>
								<li><a href="#Student" onclick="return show('Student', 'ClassDB');">Add New Student</a></li>
								<li><a href="#StudentDB" onclick="return show('StudentDB', 'ClassDB');">Edit Student's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Insructors</a>
							<ul>
								<li><a href="#Instructor" onclick="return show('Instructor', 'ClassDB');">Add New Instructor</a></li>
								<li><a href="#InstructorDB" onclick="return show('InstructorDB', 'ClassDB');">Edit Instructor's Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Courses</a>
							<ul>
								<li><a href="#Course" onclick="return show('Course', 'ClassDB');">Add New Course</a></li>
								<li><a href="#CourseDB" onclick="return show('CourseDB', 'ClassDB');">Edit Course Database</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#">Classes</a>
							<ul>
								<li><a href="#Class" onclick="return show('Class', 'ClassDB');">Add New Class</a></li>
								<li><a href="#ClassDB">Edit Class Database</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				

				
			</div>
				
				
			<div class="row">
				
				
				<div class="col-1">
				
				</div>
				
				<div class="col-10 content">
				
					<?php
						displayClassDB();
					?>
					
				</div>
				
				<div class="col-1">

				
				</div>
				
			</div>
			
			<div class="row">
			
				<div class="col-6">
				
					<form class="deleteForm" action="../Controller/classDB.php" method="post">
						
						Class Entry #:<br>
						<input type="text" name="classEntry"><br>
						<input type="submit" name="deleteClass" value="Delete Record">
						
					</form>
					
				</div>
				
				<div class="col-6">
					
					<form class="editForm" action="../Controller/classDB.php" method="post">
						
						Class Entry #: <input type="number" name="classEntry"><br>
						Course ID: <input type="number" name="courseID"><br>
						Semester ID: <input type="text" name="semesterID"><br>
						Student ID: <input type="text" name="studentID"><br>
						Grade: <input type="text" name="grade"><br>
						<input type="submit" name="editClass" value="Edit Record">
						
					</form>
					
				</div>
			
			</div>
			
			<!-- Three column Content -->
			<div class="row content desktop">
			
				<div class="col-4 contentBox">
					<p>About Us</p>
				</div>
			
				<div class="col-4 contentBox">
					<p>Other Projects</p>
				</div>
				
				<div class="col-4 contentBox">
					<p>Help and Customer Support</p>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="col-12 footer">
				<p>Site created by Larry Thompson</p>
			</div>
		
		</div>
		
	</body>
	
</html>