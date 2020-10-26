<html>
<head>
	<title>Attendance Record</title>
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

	$result = mysqli_query($con, "SELECT * from attendance");
	?>
	<style>
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center; 
		}
	
		#attendance {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#attendance td, #attendance th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#attendance tr:nth-child(even){background-color: #f2f2f2;}
		#attendance tr:nth-child(odd){background-color: #f2f2f2;}

		#attendance th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
		}
		
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
		.button {
			  display: inline-block;
			  padding: 10px 20px;
			  font-size: 15px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color: #3498db;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
		}

	</style>
</head>
<div class="content">
<br><center><h2><b>Attendance Record</b></h2></center></div>
<body>
<center><table id="attendance">
	<tr>
		<td><center>Date</center></td>
		<th><center>Admin ID</center></th>
		<th><center>StudentID</center></th>
	</tr>
	<?php

	$i=1;
   
	while($row = mysqli_fetch_assoc($result)) 
	{
			
			$date=$row['date'];
			$adminID=$row['adminID'];
			$studentID=$row['studentID'];

	?>

			<tr>
			
    		<td><center><?php echo $date ?></center></td>
    		<td><center><?php echo $adminID ?></center></td>
    		<td><center><?php echo $studentID ?></center></td>
    		
			
		
			</tr>
			
	<?php
	
		$i++;
		}
		if(isset($_GET['update'])){
			$update_studentID = $_GET['update'];
			
			mysqli_query($con, "UPDATE attendance SET date=[value-1], adminID=[value-2], studentID=[value-3],  WHERE studentID ='$update_studentID'");
		}
		
	?>
	</table>
	<br>
	
	<a href="attendanceSearch.php"><button class="button1" onclick="goBack()">Search Student</button>
	<br><br><br>
		<a href="attendance.php"><button class="button" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
</center>
</body>
</html>