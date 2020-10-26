<html>
<head>
	<title>Update Admin Record</title>
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

$sql = "SELECT * from admin";

$result = mysqli_query($con, $sql);

?>
<div class="content">
	 <center><h2><b>RECORD</b></h2></center></div>
<center>
<table>
	<tr style = background-color:#f1c40f>
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

	
	 while($row = mysqli_fetch_assoc($result)) 
	 {
		 echo "<tr><form action='updateAdminSubmit.php' method=post>";
		 echo "<td><input type=id name=adminID value='".$row['adminID']."'</td>";
		 echo "<td><input type=text name=password value='".$row['password']."'</td>";
		 echo "<td><input type=text name=name value='".$row['name']."'</td>";
		 echo "<td><input type=text name=IC value='".$row['IC']."'</td>";
		 echo "<td><input type=text name=phoneNo value='".$row['phoneNo']."'</td>";
		 echo "<td><input type=text name=email value='".$row['email']."'</td>";
		 echo "<td><input type=text name=gender value='".$row['gender']."'</td>";
		  
		 echo "<td><button class='btn-button' type='submit'>Save</button>";
		 echo "</form></tr>";
		 
	 }
	?>


</table>

	<br>
		<a href="adminRecord.php"><button class="button" onclick="goBack()">Back</button>
		
				<script>
					function goBack() {
					window.history.back();
					}
				</script>
</html>