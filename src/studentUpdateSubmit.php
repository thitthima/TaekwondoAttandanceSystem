<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");

	$sql = "UPDATE student SET studentID='$_POST[studentID]', password='$_POST[password]', name='$_POST[name]', matricNo='$_POST[matricNo]', phoneNo='$_POST[phoneNo]',email='$_POST[email]', gender='$_POST[gender]', faculty='$_POST[faculty]', program='$_POST[program]'
	WHERE studentID='$_POST[studentID]'";

	if (mysqli_query($con, $sql)) 
	{
		echo "Data updated successfully";
		header ("location:studentRecord.php");
	} else {
		echo "Error: " . mysqli_error($con);
	}

	mysqli_close($con);
	
?>
