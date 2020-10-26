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

#attendance {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#attendance td, #attendance th {
			border: 1px solid black;
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
	 <center><h2><b>SEARCH</b></h2></center></div>
	 <div class="section">
	 <br>
	 <br>
		<form action="attendanceSearch.php" method="get">
		<br>
		Please Enter Student ID: <input type="text" name="studentID"> 
		<br><br><input type="submit" value="Search" class="btn-search"><br>
		</form>
	<br>
	 	<center>
		<table id="attendance">
            <tr>
               
                <br>
				<th><b>Date</b></th>
				<th><b>Admin ID</b></th>
				<th><b>Student ID</b></th>
				
				
            </tr>
        <?php  
			if(isset($_GET['studentID']))
			{
				$studentID = $_GET['studentID'];
				$result = mysqli_query($con, "SELECT * from attendance where studentID = '$studentID'");
		
				$i=1; 
				while($row = mysqli_fetch_assoc($result)) 
				{
					
					$date=$row['date'];
					$adminID=$row['adminID'];
					$studentID=$row['studentID'];
					

				
		?>
					
					<td><center><?php echo $date ?></center></td>
    				<td><center><?php echo $adminID ?></center></td>
    				<td><center><?php echo $studentID ?></center></td>
    				<tr>
    				
				
					<?php $i++;
				}
			}
					?>
					
			</table>
			</center>
			<br>
			<a href="attendanceDetails.php"><button class="button2" onclick="goBack()">Back</button>
		
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