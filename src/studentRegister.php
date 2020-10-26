<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration Page(Student)</title>
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

		button {
 			background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
  			cursor: pointer;
  			width: 20%;
		}
	</style>
	<?php
session_start();
?>
		
		<div class="register">
		<h1 align="center">Register</h1>
		<form action="studentRegisterSubmit.php" method="post" style="text-align:left;">
				
					
				<label><b>StudentID:</b></label><br>
					<input name="studentID" type="text" class="inputvalues" placeholder="studentID" required/><br><br>
				
				<label><b>Password:</b></label><br>
					<input name="password" type="password" class="inputvalues" placeholder="Password" required/><br><br>

				<label><b>Name:</b></label><br>
					<input name="name" type="text" class="inputvalues" placeholder="Fullname" required/><br><br>

				<label><b>Matric Number:</b></label><br>
					<input name="matricNo" type="text" class="inputvalues" placeholder="matricNo" required/><br><br>
					
				<label><b>Phone Number:</b></label><br>
					<input name="phoneNo" type="text" class="inputvalues" placeholder="PhoneNo" required/><br><br>

				<label><b>Email:</b></label><br>
					<input name="email" type="text" class="inputvalues" placeholder="Email" required/><br><br>

				<label><b>Gender:</b></label><br>
					<select class="gender" name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>

				<label><b>Faculty:</b></label><br>
					<select class="faculty" name="faculty">
						<option value="FTMK">FTMK</option>
						<option value="FKP">FKP</option>
						<option value="FKEKK">FKEKK</option>
						<option value="FKE">FKE</option>
						<option value="FKM">FKM</option>
						<option value="FTKEE">FTKEE</option>
						<option value="FTKMP">FTMKP</option>
						<option value="FPTT">FPTT</option>
					</select><br><br>

				<label><b>Program:</b></label><br>
					<input name="program" type="text" class="inputvalues" placeholder="program" required/><br><br>

				
				<input name="submit" type="submit" value="Register" class="btn-register"/><br>
				</br>
		</form>
		<center><a href="mainpage.php"><button class="button" onclick="goBack()">Back</button></a></center>
	
		</script>
	</body>
</html>


