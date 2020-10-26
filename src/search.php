<html>
<head>
<title> Search Student </title>
<body background="pic1.jpg">

<style>
body{
			background-repeat: no-repeat;
			background-size: cover;
			background-position: fixed;	
}
h2
{
	color:white;
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
div.section{
	width:90%;
	height:400px;
	border-style:solid;
	border-radius:5px;
	border:1px solid #999;
	display:inline-block;
	background:white;
	color:black;
    }
.btn-search{
	padding:9px 16px;
	cursor:pointer;
	color:#fff;
	border-radius:4px;
	border:none;
	background-color:#3498db;
	border-bottom:4px;
	margin-bottom:20px;
}

#student {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#student td, #student th {
			border: 1px solid black;
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
</style>
</head>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");
?>
<br>
<body>
	<center>
	
     <div class="content">
	 <center><h2><b>SEARCH STUDENT</b></h2></center></div>
	 <div class="section">
	 <br>
	 <br>
		<form action="search.php" method="get">
		<br>
		Please Enter Student ID: <input type="text" name="studentID"> 
		<br><br><input type="submit" value="Search" class="btn-search"><br>
		</form>
	<br>
	 	<center>
		<table id="student">
            <tr>
               
                <td><b>Student ID</b></td>
				<th><b>Password</b></th>
				<th><b>Name</b></th>
				<th><b>Matric Number</b></th>
				<th><b>Phone Number</b></th>
				<th><b>Email</b></th>
				<th><b>Gender</b></th>
				<th><b>Faculty</b></th>
				<th><b>Program</b></th>
				
				
            </tr>
        <?php  
			if(isset($_GET['studentID']))
			{
				$studentID = $_GET['studentID'];
				$result = mysqli_query($con, "SELECT * from student where studentID = '$studentID'");
		
				$i=1; 
				while($row = mysqli_fetch_assoc($result)) 
				{
					$studentID=$row['studentID'];
					$password=$row['password'];
					$name=$row['name'];
					$matricNo=$row['matricNo'];
					$phoneNo=$row['phoneNo'];
					$email=$row['email'];
					$gender=$row['gender'];
					$faculty=$row['faculty'];
					$program=$row['program'];

				
		?>
					<td><center><?php echo $studentID ?></center></td>
					<td><center><?php echo $password ?></center></td>
    				<td><center><?php echo $name ?></center></td>
    				<td><center><?php echo $matricNo ?></center></td>
    				<td><center><?php echo $phoneNo ?></center></td>
    				<td><center><?php echo $email ?></center></td>
					<td><center><?php echo $gender ?></center></td>
					<td><center><?php echo $faculty ?></center></td>
					<td><center><?php echo $program ?></center></td>
					</tr>
				
					<?php $i++;
				}
			}
					?>
					
			</table>
			</center>
			<br>
			<a href="adminPage.php"><button class="button2" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
		</div>	
	</div>
	</center>
</body>
</html>