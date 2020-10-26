<!DOCTYPE HTML>
<html>
<head>
<title>UTemTaekwondo Attendance System</title>
<!-- <link rel="stylesheet" href="css/style.css"> -->
<body background="pic1.jpg">
	
<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
		background-position: fixed;	
	}
		
	h1
	{
	color:white;
	}
	h4
	{
	color:white;
	}
	.container{
		max-width:999px;
		width:96%;
		margin:auto;
	}
	
	.topnav {
		overflow: hidden;
		background-color: #34495e;
	}

	div.login{
		float:left;
		height:500px;
		width : 48%;
		background : white;
		padding:5px;
		border-radius:10px;
		border:2px solid #2c3e50;
    }
	
	div.left 
	{

		float : left;
		width : 99%;
	}
	div.right 
	{
		float : right;
		height:500px;
		width : 48%;
		background : white;
		padding:5px;
		border-radius:10px;
		border:2px solid #2c3e50;
	}
	.btn-button1{
		text-align: center;
		padding:10px 20px;
		cursor:pointer;
		color:#fff;
		border-radius:4px;
		border:none;
		background-color:#1abc9c;
		border-bottom:4px;
		margin-bottom:20px;
		margin-left: -120px
	}
	.btn-button2{
		text-align: center;
		padding:10px 20px;
		cursor:pointer;
		color:#fff;
		border-radius:4px;
		border:none;
		background-color:#2ecc71;
		border-bottom:4px;
		margin-bottom:20px;
		margin-left: -100px
	}
	.btn-button3{
		text-align: center;
		padding:10px 20px;
		cursor:pointer;
		color:#fff;
		border-radius:4px;
		border:none;
		background-color:#1abc9c;
		border-bottom:4px;
		margin-bottom:20px;
		margin-left: 90px;
	}
	.btn-button4{
		text-align: center;
		padding:10px 20px;
		cursor:pointer;
		color:#fff;
		border-radius:4px;
		border:none;
		background-color:#2ecc71;
		border-bottom:4px;
		margin-bottom:20px;
		margin-left: 20px;
	}

	img.logo {
  		width: 70%;
  		margin-left: 20%;

	}

	img.logo2{
		width:70%;
		margin-left: 70%;
		
	}
	
	
	}

</style>
</head>
<?php
session_start();
?>

<body>    
<br><div class="container">
    <div class="topnav">
		<h1><center>Taekwondo Attendance System</center></h1>
	</div>
	<br>
	<div class="login">
    <center> 
    <div class="left">
		<table cellspacing="0" cellpadding="10" border="0">
		<center><h2><b><u>Login</u></b></h2></center>
		<br>
		<tr>
			<td ><img src="logo.jpg" alt="logo" class="logo"></td>
		</tr>
		<tr>
			<td><h4><center><a href="studentLogin.php"><button class='btn-button1' type='submit'>STUDENT</button></a></center></h4></td>
			<td><h4><center><a href="adminLogin.php"><button class='btn-button2' type='submit'>ADMIN</button></a></center></h4></td>
		</tr>
		</table>
	
	</form> 
	</div>
    </center>
	</div>

<div class="right">
	<table cellspacing="0" cellpadding="10" border="0">
	<center><b><u><h2>Register</h2></u></b><br>
	
		<tr>
			<td><img src="logo.jpg" alt="logo2" class="logo2"></td>
		</tr>
		<tr>
			<td><h4><center>><a href="studentRegister.php"><button class='btn-button3' type='submit'>STUDENT</button></a></center></h4></td>
			<td><h4><center><a href="adminRegister.php"><button class='btn-button4' type='submit'>ADMIN</button></a></center></h4></td>
		</tr>

	
	</table>
	</center>
	</div>
</div>
</body>
</html>