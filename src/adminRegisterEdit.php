
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration Page(Admin)</title>
	</head>
	<body background="TAEKWONDO.jpg">
	<style>
		body{
			background-repeat: no-repeat;
			background-size: 800px;
			background-position: center; 
			
			
		}
	
		.register{
			width:360px;
			margin:50px;
			font:Cambria, "Hoefler Text","Liberation Serif", Times, "Times New Roman", serif;
			border-radius:10px;
			border:2px solid #ccc;
			padding:10px 40px 25px;
			margin-top:70px;
			background-color:white;
		}
		
		input[type=text], input[type=password]{
			width:95%;
			height: 15px;
			padding:10px;
			margin-top:8px;
			border:1px solid #ccc;
			padding-left:5px;
			font-size:16px;
			font-family:Cambria, "Hoefler Text","Liberation Serif", Times, "Times New Roman", serif;
		}
		input[type=submit]{
			width:100%;
			background-color:#009;
			color:#fff;
			border:2px solid #06F;
			padding:10px;
			font-size:20px;
			cursor:pointer;
			border-radius:5px;
		}
		.button {
			  display: inline-block;
			  padding: 10px 20px;
			  font-size: 15px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: black;
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
	</style>
		<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
?>
		<div class="register">
		<h1 align="center">Register</h1>
		<form action="adminRegisterEditSubmit.php" method="post" style="text-align:left;">
				
					
				<label><b>AdminID:</b></label><br>
					<input name="adminID" type="text" class="inputvalues" placeholder="adminID" required/><br><br>
				
				<label><b>Password:</b></label><br>
					<input name="password" type="password" class="inputvalues" placeholder="Password" required/><br><br>

				<label><b>Name:</b></label><br>
					<input name="name" type="text" class="inputvalues" placeholder="Fullname" required/><br><br>

				<label><b>Identification Card:</b></label><br>
					<input name="IC" type="text" class="inputvalues" placeholder="IC" required/><br><br>
					
				<label><b>Phone Number:</b></label><br>
					<input name="phoneNo" type="text" class="inputvalues" placeholder="PhoneNo" required/><br><br>

				<label><b>Email:</b></label><br>
					<input name="email" type="text" class="inputvalues" placeholder="Email" required/><br><br>

				<label><b>Gender:</b></label><br>
					<select class="gender" name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>
				

				
				<input name="submit" type="submit" value="Register" class="btn-register"/><br>
				</br>
		</form>

		<a href="adminRecord.php"><button class="button2" onclick="goBack()">Back</button>
			
	</body>
</html>