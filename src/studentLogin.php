
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 5%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


img.TAEKWONDO {
  width: 20%;
  border-radius: 20%;
  margin-left: 250px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<?php
session_start();
?>
<body>

<h2>Login to UTeM TAEKWONDO ATTENDANCE SYSTEM</h2>

<form action="studentsubmit.php" method="post">
  <div class="login">
    <img src="TAEKWONDO.jpg" alt="TAEKWONDO" class="TAEKWONDO">
  </div>

  <div class="container">
    <label for="studentID"><b>StudentID</b></label>
    <input type="text" placeholder="Enter studentID" name="studentID" required>
	<br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" require>
    <br>
    <button type="submit">Login</button>
	<br>
       <center><button class="button" onclick="goBack()">Back</button></center>
    
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </div>

</form>

</body>
</html>


