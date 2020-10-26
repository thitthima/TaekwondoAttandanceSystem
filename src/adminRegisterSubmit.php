  <?php
  session_start();
		include 'config.php';
		include 'connection.php';
	
			$adminID =$_POST['adminID'];
			$password =$_POST['password'];
			$name =$_POST['name'];
			$IC =$_POST['IC'];
			$phoneNo=$_POST['phoneNo'];
			$email =$_POST['email'];
			$gender=$_POST['gender'];
			
				$s = "select * from admin where adminID='$adminID'";
				$rst=mysqli_query($con,$s);
				$num=mysqli_num_rows($rst);

		if($num >0)
				{
					$message = "This adminID is already taken.";
					header("location:adminRegister.php");
				}
				else
				{
	
			$sql="INSERT INTO admin (adminID,password,name,IC,phoneNo,email,gender)
				 VALUES ('$adminID','$password','$name','$IC','$phoneNo','$email','$gender')";
				 
			$result = mysqli_query($con, $sql);
							
				if (mysqli_query($result))
				{
					echo 'alert ("User Registered .. Go to login page to login");';
					header ("location:mainpage.php");
				}
				else
				{
					echo 'alert ("Login Error");';
					header("location:adminRegister.php");
				}
			}
						
		mysqli_close($con);
?>


