<?php
  session_start(); 
  if(isset($_SESSION["email"])){
    header("location:../html/home.html");
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  
  <script type="text/javascript" src="../js/login.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    

    <!-- Icon -->
    <div class="fadeIn first">
      <h2 style="color:black;">Hello admin login to get started.</h2>
    </div>

    <!-- Login Form -->
   
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" style="margin-top:20px;">
      <div id="errorDiv" style="display:none;" class="alert alert-error">
        
      </div>
      <input type="button" class="fadeIn fourth" value="Log In" id="loginButton">
      

    <!-- Remind Passowrd -->
    

  </div>
</div>
</body>
</html>

