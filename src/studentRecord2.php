	<?php
	
		session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}
		$con = mysqli_connect("localhost", "root", "");
		mysqli_select_db($con,"taekwondo");


		if(isset($_GET['delete'])){
			$delete_studentID = $_GET['delete'];
			
			mysqli_query($con, "DELETE FROM student WHERE studentID ='$delete_studentID'");
            header("location:studentRecord.php");
		}
		
	?>