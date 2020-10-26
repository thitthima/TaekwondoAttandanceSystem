<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
?>
<html>
<head>
	<title>Admin Record</title>
	<body background="pic1.jpg">
	<?php
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"taekwondo");

	$result = mysqli_query($con, "SELECT * from admin");
	?>
	<style>
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center; 
		}
	
		#admin {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 90%;
		}

		#admin td, #admin th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#admin tr:nth-child(even){background-color: #f2f2f2;}
		#admin tr:nth-child(odd){background-color: #f2f2f2;}

		#admin th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #4CAF50;
			color: white;
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
		.btn-button {
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
		.btn-button1 {
			  display: inline-block;
			  padding: 5px 10px;
			  font-size: 15px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color: #e74c3c;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
		}
		.btn-button2 {
			  display: inline-block;
			  padding: 5px 10px;
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
<br><center><h2><b>RECORD <?php
		echo 'FOR ' . $_SESSION["adminID"];
	?></b></h2></center></div>
<body>
	
<center><table id="admin">
	<tr>
		<th><center>Admin ID</center></th>
		<th><center>Password</center></th>
		<th><center>Admin Name</center></th>
		<th><center>Admin IC</center></th>
		<th><center>Number Phone</center></th>
		<th><center>Email</center></th>
		<th><center>Gender</center></th>
		<th><center>Actions</center></th>
	</tr>
	<?php




		$adminID = $_SESSION['adminID'];
		$result = mysqli_query($con, "SELECT * from admin where adminID = '$adminID'");





	$i=1;
   
	while($row = mysqli_fetch_assoc($result)) 
	{
			$adminID=$row['adminID'];
			$password=$row['password'];
			$name=$row['name'];
			$IC=$row['IC'];
			$phoneNo=$row['phoneNo'];
			$email=$row['email'];
			$gender=$row['gender'];
	?>

			<tr>
    		<td><center><?php echo $adminID ?></center></td>
    		<td><center><?php echo $password ?></center></td>
			<td><center><?php echo $name ?></center></td>
			<td><center><?php echo $IC ?></center></td>
			<td><center><?php echo $phoneNo ?></center></td>
			<td><center><?php echo $email ?></center></td>
			<td><center><?php echo $gender ?></center></td>
			<td><center><a href="adminRecord.php?delete=<?php echo $adminID ?>" onclick="return confirm('Are you sure?');"><button class='btn-button1' type='submit'>Delete</button></a>
  		    <a href="adminUpdate.php"><button class='btn-button2' type='submit'>Edit</button></a></center></td>
			</tr>


	<?php
	
		$i++;
		}
		if(isset($_GET['delete'])){
			$delete_adminID = $_GET['delete'];
			
			mysqli_query($con, "DELETE FROM admin WHERE adminID ='$delete_adminID'");
		
		}
		
	?>
	</table>
	<br>
		<br>
		<a href="adminPage.php"><button class="button" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
</center>
</body>
</html>