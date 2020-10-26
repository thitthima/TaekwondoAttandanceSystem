<html>
<head>
	<title>PAYMENT</title>
	<body background="pic1.jpg">
<style>
body{
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center;	
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
	background-color: #ecf0f1;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

.btn-button{
	text-align: center;
	padding:8px 10px;
	cursor:pointer;
	color:#fff;
	border-radius:4px;
	border:none;
	background-color:black;
	border-bottom:4px;
	margin-bottom:20px;
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
			  background-color: #f1c40f;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
		}

		.button:hover {background-color: #3e8e41}

		.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
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
$sql = "SELECT * from fee";

$result = mysqli_query($con, $sql);

?>
<div class="content">
	 <center><h2><b>Payment</b></h2></center></div>
<center>
<table>
	<tr style = background-color:#f1c40f>

	<th><center>Student ID</center></th>
		<th><center>Total</center></th>
	</tr>
	
	<?php

		// $adminID = $_SESSION['adminID'];
		// $result = mysqli_query($con, "SELECT * from admin where adminID = '".$adminID."'");

	
	 // while($row = mysqli_fetch_assoc($result)) 
	 // {

$studentid = $_GET['userid'];

	$stmt = "SELECT outstanding FROM fee WHERE studentID = '$studentid'";
		$row=mysqli_query($con,$stmt);

		if ($result = mysqli_query($con,$stmt))
  		{
  			$check = mysqli_num_rows($result);

				if($check > 0)
				{
					while ($row = mysqli_fetch_assoc($result)) {
						$fieldname = $row['outstanding'];
					}
				}
  		}

	 	
		echo '<tr>';
		echo '<td>' .$studentid. '</td>';
		echo '<td>' .$fieldname. '</td>
		</tr>';
 
		

	 
	?>

	


</table>

	<form action=" " method="post">

			<label>Pay</label>
			<br>
			<input type="text" name="pay">
			<br><br>
			<input type="submit" name="submit" value="pay">
			<br>


		</form>

		<?php
		if (isset($_POST['submit']))
		{
			$date=date('Y-m-d H:i:s');
			
			$pay=$_POST['pay'];
			$balance=$fieldname-$pay;
			echo "Outstanding is " .$balance."";


			$stmt1="UPDATE fee SET outstanding='$balance',paid=paid+'$pay',date='$date' where studentID='$studentid'";


			if (mysqli_query($con,$stmt1))
			{
				echo "<script>";
				echo "alert('Paid');";
				echo "window.location.href='fee.php'";
				echo "</script>";
			}
  		}





		?>












	<br>
		<a href="fee.php"><button class="button" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
</html>