<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");
	
	
$adminID=$_POST['adminID'];
$password=$_POST['password'];

$sql="select * from admin where adminID='$adminID' and password='$password'";
$result = mysqli_query ($con, $sql);

if (mysqli_num_rows($result) > 0)
	{
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['adminID']=$adminID;
	$_SESSION['password']=$password;
	$_SESSION['loggedin']=true;
	header("Location:adminpage.php");
	
	}	
else 
	{
		echo '<script language="javascript" type="text/javascript">alert("The Username and password do not match");document.location.href="adminLogin.php"</script>';
	}

?>