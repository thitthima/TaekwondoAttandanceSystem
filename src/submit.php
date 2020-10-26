<?php
session_start();
if(!isset($_SESSION["loggedin"])||$_SESSION["loggedin"]!== true){
	header("adminLogin.php");
	exit;
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");
	
$adminID=$_POST['adminID'];
$password=$_POST['password'];


//$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql="select * from Coding where adminID='$adminID' and password='$password'";
$result = mysqli_query ($con, $sql);

if (mysqli_num_rows($result) > 0)
	{
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['adminID']=$adminID;
	$_SESSION['password']=$password;
	header("Location:success.php");
	}	
else 
	{
		echo '<script language="javascript" type="text/javascript">alert("The username and password do not match");document.location.href="adminLogin.php"</script>';
	}

?>