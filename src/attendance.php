<!DOCTYPE HTML>
<html>
  <head>
    <title>Attendance</title>
  </head>
  <body background="pic1.jpg">
  <style>
    body{
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center; 
      
      
    }
  
    .register{
      width:360px;
      margin:730px;
      font:Cambria, "Hoefler Text","Liberation Serif", Times, "Times New Roman", serif;
      border-radius:10px;
      border:2px solid #ccc;
      padding:10px 40px 25px;
      margin-top:70px;
      background-color:white;
    }
    
    input[type=text]{
      width:95%;
      height: 15px;
      padding:10px;
      margin-top:8px;
      border:1px solid #ccc;
      padding-left:5px;
      font-size:16px;
      font-family:Cambria, "Hoefler Text","Liberation Serif", Times, "Times New Roman", serif;
    }
    input[type=submit]{
      width:100%;
      background-color:#009;
      color:#fff;
      border:2px solid #06F;
      padding:10px;
      font-size:20px;
      cursor:pointer;
      border-radius:5px;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: black;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #3e8e41}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
  </style>
  <?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
{
  header("location:mainpage.php");
  exit;
}
?>
    
    <div class="register">
    <h1 align="center">Attendance</h1>
    <form action="attendanceSubmit.php" method="post" style="text-align:left;">
        

        <label><b>Date </b></label><br>
          <input name="date" type="date" class="inputvalues" placeholder="Date" required/><br><br>

        <label><b>Student ID:</b></label><br>
          <input name="studentID" type="text" class="inputvalues" placeholder="Student ID" required/><br><br>
        
   
         <input name="submit" type="submit" value="Submit" class="btn-register"/><br>
      <br>
    </form>
    <center><a href="attendanceDetails.php"><button class="button" onclick="goBack()">Attendance Details</button></center>
      <br>
    <center><a href="adminPage.php"><button class="button" onclick="goBack()">Back</button></center>
    
    <script>

      function goBack() {
        window.history.back();
      }



    </script>
  </body>
</html>


