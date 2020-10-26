<?php
session_start();
if(!isset($_SESSION["loggedin"])||$_SESSION["loggedin"]!== true){
	header("adminLogin.php");
	exit;
}

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"taekwondo");

	$sql = "UPDATE admin SET adminID='$_POST[adminID]',password='$_POST[password]', name='$_POST[name]', IC='$_POST[IC]', phoneNo='$_POST[phoneNo]', email='$_POST[email]',gender='$_POST[gender]'
	WHERE adminID='$_POST[adminID]'";

	if (mysqli_query($con, $sql)) 
	{
		echo "Data updated successfully";
		header ("location:adminRecord.php");
	} else {
		echo "Error: " . mysqli_error($con);
	}

	mysqli_close($con);
	
?>
