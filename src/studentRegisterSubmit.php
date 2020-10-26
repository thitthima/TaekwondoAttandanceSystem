<?php
session_start();
		include 'config.php';
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
					header("location:studentRegister.php");
				}
				else
				{
	
			$sql="INSERT INTO student (studentID,password,name,matricNo,phoneNo,email,gender,faculty,program)
				 VALUES ('$studentID','$password','$name','$matricNo','$phoneNo','$email','$gender','$faculty','$program')";
				 header ("location:studentLogin.php");
				 
			$result = mysqli_query($con, $sql);
							
				if (mysqli_query($result))
				{
					echo 'alert ("User Registered .. Go to login page to login");';
					header ("location:studentLogin.php");
				}
				else
				{
					echo 'alert ("Login Error");';
					header("location:studentRegister.php");
				}
			}
						
		mysqli_close($con);
?>










