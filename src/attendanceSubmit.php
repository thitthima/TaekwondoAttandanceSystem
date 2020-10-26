<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
	header("location:mainpage.php");
	exit;
}

		include 'config.php';
		include 'connection.php';
	
			$date =$_POST['date'];
			$adminID = $_SESSION['adminID'];
			$studentID =$_POST['studentID'];
				
				$s = "select * from student where studentID='$studentID'";
				$rst=mysqli_query($con,$s);
				$num=mysqli_num_rows($rst);

				$a = "select * from admin where adminID='$adminID'";
				$rs=mysqli_query($con,$a);
				$numb=mysqli_num_rows($rs);

				if(($num==1)&&($numb==1))
				{
					// $sql="INSERT INTO attendance (date,adminID,studentID)
				 // VALUES ('$date','$adminID','$studentID')";
				 
					// $result = mysqli_query($con, $sql);
					// header ("location:attendanceDetails.php");

					// if (mysqli_query($result))
					// {

						$sql2 = "SELECT * FROM fee WHERE studentID = '$studentID'";
						$result2 = $con->query($sql2);

						if($result2->num_rows > 0 )
						{
							$sql3 = "UPDATE fee SET outstanding = outstanding + '7' WHERE studentID = '$studentID'";
							
							if(mysqli_query($con, $sql3))
							{
								$sql="INSERT INTO attendance (date,adminID,studentID)
				 				VALUES ('$date','$adminID','$studentID')";

				 				$result = mysqli_query($con, $sql);

								echo "<script>";
								echo "alert('Attendance added successful');";
								echo "window.location.href='attendanceDetails.php'";
								echo "</script>";
								//header ("location:attendanceDetails.php");

							}

						}
						else if($result2->num_rows == 0 )
						{
							$sql4 = "INSERT INTO fee (outstanding, studentID) VALUES ('7','$studentID')";

							if(mysqli_query($con, $sql4))
							{
								$sql="INSERT INTO attendance (date,adminID,studentID)
				 				VALUES ('$date','$adminID','$studentID')";

				 				$result = mysqli_query($con, $sql);

				 				echo "<script>";
								echo "alert('Attendance added successful');";
								echo "window.location.href='attendanceDetails.php'";
								echo "</script>";
								//header ("location:attendanceDetails.php");
							}
						}



						// $sql2 = "UPDATE fee SET outstanding = outstanding + '7' WHERE studentID = '$studentID'";
				 	// 	if(mysqli_query($con, $sql2))
				 	// 	{
				 	// 		echo 'alert ("Attendance added successful ..");';
						// 	header ("location:attendanceDetails.php");
				 	// 	}


					
					// }
					// else
					// {
					// 	echo 'alert ("Error");';
					// 	header("location:attendance.php");
					// }
					
				}
				else
				{
					echo 'alert("Unregister StudentID")';
					header("location:attendance.php");
				}

				
							
					
		mysqli_close($con);
?>

 
