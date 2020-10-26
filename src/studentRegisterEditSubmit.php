<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}		include 'config.php';
		include 'connection.php';
	
			$studentID =$_POST['studentID'];
			$password =$_POST['password'];
			$name =$_POST['name'];
			$matricNo =$_POST['matricNo'];
			$phoneNo=$_POST['phoneNo'];
			$email =$_POST['email'];
			$gender=$_POST['gender'];
			$faculty=$_POST['faculty'];
			$program=$_POST['program'];
			
				$s = "select * from student where studentID='$studentID'";
				$rst=mysqli_query($con,$s);
				$num=mysqli_num_rows($rst);


		if($num >0)
				{
					$message = "This studentID is already taken.";
					header("location:studentRegisterAdminEdit.php");
				}
				else
				{
	
			$sql="INSERT INTO student (studentID,password,name,matricNo,phoneNo,email,gender,faculty,program)
				 VALUES ('$studentID','$password','$name','$matricNo','$phoneNo','$email','$gender','$faculty','$program')";
				 
			$result = mysqli_query($con, $sql);
							
				if (mysqli_query($result))
				{
					echo 'alert ("User Registered .. Go to login page to login");';
					header ("location:studentRecord.php");
				}
				else
				{
					echo 'alert ("Login Error");';
					header("location:studentRegisterAdminEdit.php");
				}
			}
						
		mysqli_close($con);
?>










