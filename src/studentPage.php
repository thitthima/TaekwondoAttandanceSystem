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
<title>Student Page</title>
<body background="pic1.jpg">

<style>
body{
	background-color: black;
	background-repeat: no-repeat;
	background-size: 1930px;
	background-position: fixed;
}
.container{
	max-width:960px;
	width:96%;
	margin:auto;
}
div.section{
	float:center;
	width:985px;
	border-style:none;
	display:inline-block;
	background-color:black;
	color:#000;
	border:1px solid #999;
    }
	
.btn-button{
	text-align: center;
	padding:40px 50px;
	cursor:pointer;
	color:black
	border-radius:4px;
	border:none;
	background-color:yellow;
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
			  background-color: #3498db;
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
</head>

<body>
	
<br> 
  
	<br><br><br><br>
	<div class="container">
	 <div class="section">
	 <center><br>
	 <table cellspacing="5" cellpadding="30" border="0">
	<h1 style="background-color: white">Welocome to UTeM Taekwondo Attendance System. <?php
		echo 'Hi, ' . $_SESSION["studentID"];
	?></h1>


		
	<tr>
		<td><center><a href="studentDetailsForStudent.php"><button class='btn-button' type='submit'>Details</button></a></center></td>
		<td><center><a href="feeForStudent.php"><button class='btn-button' type='submit'>Fee</button></a></center></td>
	</tr>
	
	</table>
		<!-- <a href="mainpage.php"><button class="button" onclick="return confirm('Are you sure?');">LOGOUT</button></a> -->
		<form action="" method="post">

		<input type="submit" name="logout" class="button" onclick="return confirm('Are you sure?');" value="LOGOUT"></input>
	</form>
	<?php
		if(isset($_POST['logout']))
		{
			session_destroy();

			header("location:mainpage.php");
		}
	?>
		<br><br>
	</center></div>
</br>
</div>
 </body>
 </html>