<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");
	
$studentID=$_POST['studentID'];
$password=$_POST['password'];

$sql="select * from student where studentID='$studentID' and password='$password'";
$result = mysqli_query ($con, $sql);

if (mysqli_num_rows($result) > 0)
	{
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['studentID']=$studentID;
	$_SESSION['password']=$password;
		$_SESSION['loggedin']=true;
	header("Location:studentPage.php");
	}	
else 
	{
		echo '<script language="javascript" type="text/javascript">alert("The Username and password do not match");document.location.href="adminlogin.php"</script>';
	}

?>