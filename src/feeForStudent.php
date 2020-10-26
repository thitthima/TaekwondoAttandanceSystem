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
	 <br
	<br>
	 	<center>
		<table id="student">
            <tr>
               
                <td><center><b>Paid Amount</b></center></td>
                <td><center><b>Paid Date</b></center></td>
				<td><center><b>Outstanding</b></center></td>
				
            </tr>
           <?php
		$studentID = $_SESSION['studentID'];
		



		
		$result = mysqli_query($con, "SELECT * from fee where studentID = '$studentID'");
		

		$i=1;
			while($row = mysqli_fetch_assoc($result)) 
	{
			
			$paid=$row['paid'];
			$date=$row['date'];
			$outstanding=$row['outstanding'];
		}
			
	?>
       	 <tr>
			<td><center><?php echo $paid ?></center></td>
			<td><center><?php echo $date ?></center></td>
    		<td><center><?php echo $outstanding ?></center></td>

    		
					
			</table>
			</center>
			<br>
			<center>
			<br>
		<a href="studentPage.php"><button class="button2" onclick="goBack()">Back</button>
		
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