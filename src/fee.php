<html>
<head>
<title> Search Fee </title>
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
		.button1 {
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
	 <center><h2><b>STUDENT's FEE</b></h2></center></div>
	 <div class="section">
	 <br>
	 <br>
		<form action="fee.php" method="get">
		<br>
		Please Enter Student ID: <input type="text" name="studentID"> 
		<br><br><input type="submit" value="Search" class="btn-search"><br>
		</form>
	<br>
	 	<center>
		<table id="student">
            <tr>
               
            	<td><b>Total Attendance</b></td>
                <td><b>Total Amount</b></td>
                <td><b>Paid Amount</b></td>
                <td><b>Paid Date</b></td>
				<td><b>Outstanding</b></td>
				
				
            </tr>
            <tr>
            	<td>
            		<?php
            		if(isset($_GET['studentID']))
				{
					$studentID = $_GET['studentID'];
					$sql = "SELECT studentID FROM attendance WHERE studentID = '$studentID'";	

				if ($result=mysqli_query($con,$sql))
  				{
  					// Return the number of rows in result set
 					 $rowcount=mysqli_num_rows($result);
  					printf("Result set has %d rows.\n",$rowcount);
  					// Free result set
	 					 mysqli_free_result($result);
	 			 }
				}

?>
            	</td>


            	<td>
            		
            	<?php
            		if(isset($_GET['studentID']))
				{
					$studentID = $_GET['studentID'];
					$sql = "SELECT studentID FROM attendance WHERE studentID = '$studentID'";	

				if ($result=mysqli_query($con,$sql))
  				{
  					// Return the number of rows in result set
 					 $attendance=mysqli_num_rows($result);
  					printf("RM %d \n",$attendance*7);
  					// Free result set
	 					 mysqli_free_result($result);
	 			 }
				}
				?>
            	</td>


            	<td>
            		
            		<?php
            		if(isset($_GET['studentID']))
			{
				$studentID = $_GET['studentID'];	
				$stmt1 = "SELECT paid FROM fee WHERE studentID = '$studentID'";	

				if ($result = mysqli_query($con,$stmt1))
  {
  $check = mysqli_num_rows($result);

				if($check > 0)
				{
					while ($row = mysqli_fetch_assoc($result)) {
						echo'RM '.$row['paid'];
					}
				}
  }
			}
				?>

            	</td>

            	<td>
            		<?php
			if(isset($_GET['studentID']))
			{
				$studentID = $_GET['studentID'];	
				$stmt1 = "SELECT date FROM fee WHERE studentID = '$studentID'";	

				if ($result = mysqli_query($con,$stmt1))
  {
  $check = mysqli_num_rows($result);

				if($check > 0)
				{
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row['date'];
					}
				}
  }
			}

		?>	
            	</td>

            	<td>
            		<?php
			if(isset($_GET['studentID']))
			{
				$studentID = $_GET['studentID'];	
				$stmt1 = "SELECT outstanding FROM fee WHERE studentID = '$studentID'";	

				if ($result = mysqli_query($con,$stmt1))
  {
  $check = mysqli_num_rows($result);

				if($check > 0)
				{
					while ($row = mysqli_fetch_assoc($result)) {
						echo 'RM '.$row['outstanding'];
					}
				}
  }
			}
mysqli_close($con);
		?>	
            	</td>
            </tr>
       	 		
					
			</table>
			</center>
			<br>
			<center><a href="payment.php?userid=<?php echo $studentID ?>"><button class='button1' type='submit'>Pay</button></a></center>
			<br>
		<a href="adminPage.php"><button class="button2" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}        
				</script>
			</a>
		</div>	
	</div>
	</center>
</body>
</html>