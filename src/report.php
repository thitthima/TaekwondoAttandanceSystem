<html>
<head>
<title> Report </title>
<style >
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
/*div.section{*/
.section{
	width:90%;
	margin: 0 auto;
	border-style:solid;
	border-radius:5px;
	margin-bottom:20px;
	border:1px solid #999;
	display:inline-block;
	background:white;
	color:black;
	align-self: center;
	margin-left: 92px;
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

#report {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#report td, #report th {
			border: 1px solid black;
			padding: 8px;
		}

		#report tr:nth-child(even){background-color: #f2f2f2;}
		#report tr:nth-child(odd){background-color: #f2f2f2;}

		#report th {
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
<body background="pic1.jpg">
	<div>
		<div class="content">
			<center><h2><b>REPORT</b></h2></center>
		</div>
		
	</div>
	<br>
	<div class="section">
		<form method="post" action="report.php">
			<br><center><td>Start Date <input type="date" name="startdate"></td></center>
			<br><center><td>End Date <input type="date" name="enddate"></td></center>
			<br><center><input style="background: #4B99AD; padding: 8px 15px 8px 15px; border: none; color: #fff;" type="submit" name="report" value="Show Report"></center>
		</form>
	
	
		<?php 
		if(isset($_POST['report'])) 
		{
			$start=$_POST['startdate'];
			$end=$_POST['enddate'];
			$current_date = date("Y-m-d");
			echo "<center/>";
			echo "Attendance between $start and $end";
			//check if the date is relevant
			
			if ($start>=$current_date || $end>$current_date || $end<$start) {
				?><br><?php echo "Please select date before today.";
			}else{
				$sql =  "SELECT * FROM attendance WHERE date between '$start' AND '$end' ORDER BY date";

				$result=mysqli_query($con, $sql);

				$rowcount = mysqli_num_rows($result);

				if( $result -> num_rows == 0)
				{

					echo "<br/>";
					echo "<center/>";
					echo "There is no attendance recorded.";
				}
				else{
					
					echo "<br/>";
					echo "<center/>";
					echo "There was " .$rowcount. " attendance";

					echo "<table style='width:40%;'>
						<tr align='center' style='background-color: #2a2a8b;color: white;''>
						<th>DATE</th>
						<th>STUDENT</th>
						</tr>";

					while ($row = mysqli_fetch_assoc($result)){
				


					echo '<tr align="center" style="background-color: white;">
						<td>' .$row["date"]. '</td>
						<td>' .$row["studentID"].  '</td>	
						</tr>';
				
				}


				}
			}


		}
		?>
		<br>


		</table></div>
		<br><center>
	<a href="adminPage.php"><button class="button2" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
			</a></center>
	
</body>
</html>