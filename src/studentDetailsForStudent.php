
<html>
<head>
	<title>Students Record</title>
	<body background="pic1.jpg">
	<?php
	session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"taekwondo");

	$result = mysqli_query($con, "SELECT * from student");
	?>
	<style>
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center; 
		}
	
		#student {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#student td, #student th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#student tr:nth-child(even){background-color: #f2f2f2;}
		#student tr:nth-child(odd){background-color: #f2f2f2;}

		#student th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
		}
		.button1 {
			  display: inline-block;
			  padding: 10px 20px;
			  font-size: 15px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color: #2ecc71;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
		}
		.button2 {
			  display: inline-block;
			  padding: 10px 20px;
			  font-size: 15px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color: #f1c40f;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
		}

		/*.button:hover {background-color: #3e8e41}

		.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
		}*/
	
		.content h2{
			background:#34495e;
			padding:10px;
			border-radius:5px;
			margin-bottom:20px;
			border:1px solid #999;
			color: white;
			border-collapse: collapse;
			width: 90%;
		}
	</style>
</head>
<div class="content">
<br><center><h2><b>STUDENT RECORD</b></h2></center></div>
<body>
<center><table id="student">
	<tr>
		<td><center>Student ID</center></td>
		<th><center>Name</center></th>
		<th><center>Matric Number</center></th>
		<th><center>Phone Number</center></th>
		<th><center>Email</center></th>
		<th><center>Gender</center></th>
		<th><center>Faculty</center></th>
		<th><center>Program</center></th>
		<th><center>Actions</center></th>
	</tr>
	<?php
		$studentID = $_SESSION['studentID'];
		$result = mysqli_query($con, "SELECT * from student where studentID = '$studentID'");
	$i=1;
   
	while($row = mysqli_fetch_assoc($result)) 
	{
			$studentID=$row['studentID'];
			$name=$row['name'];
			$matricNo=$row['matricNo'];
			$phoneNo=$row['phoneNo'];
			$email=$row['email'];
			$gender=$row['gender'];
			$faculty=$row['faculty'];
			$program=$row['program'];

	?>

			<tr>
			<td><center><?php echo $studentID ?></center></td>
    		<td><center><?php echo $name ?></center></td>
    		<td><center><?php echo $matricNo ?></center></td>
    		<td><center><?php echo $phoneNo ?></center></td>
    		<td><center><?php echo $email ?></center></td>
			<td><center><?php echo $gender ?></center></td>
			<td><center><?php echo $faculty ?></center></td>
			<td><center><?php echo $program ?></center></td>
			
			<td><center><a href="studentUpdateForStudent.php?update=<?php echo $studentID ?>"><button class='button1' type='submit'>Edit</button></a>
				</center></td>
			</tr>
			
	<?php
	
		$i++;
		}
		if(isset($_GET['update'])){
			$update_studentID = $_GET['update'];
			
			mysqli_query($con, "UPDATE student SET studentID=[value-1], name=[value-3], matricNo=[value-4], phoneNo=[value-5], email=[value-6], gender=[value-7], faculty=[value-8], program=[value-9] WHERE studentID ='$update_studentID'");
		}
		
	?>
	</table>
	<br>
		<a href="studentPage.php"><button class="button2" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
</center>
</body>
</html>