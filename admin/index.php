<?php
   session_start();
  if(!isset($_GET['acc'])){
    $_SESSION['acc'] = "none" ;
  }
  else {
    $_SESSION['acc'] = "block";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="icon" type="image/x-icon" href="../images/admin.jpg">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

      
      <form class="w3-container " action="main.php" method="POST" style="margin: 5% 30% 0% 30% ; height: 550px;">
      <div class="w3-container w3-brown" style="margin: 5% 0% 5% 0%;">
          <h2>Đăng nhập</h2>
      </div>
      <div  style='height: 200px;'>
            <img src='../images/admin.jpg' alt='Logo' style="width:200px; height: 200px; margin-left: 25% ;" class='w3-circle ' >
        <div class="mb-3 mt-3">
          <label for="uname" class="w3-text-brown"><b>Email:</b></label>
          <input type="email" class="w3-input w3-border w3-sand" id="uname" placeholder="Enter username" name="email" required>
        </div>
        <div class="mb-3">
          <label for="pwd" class="w3-text-brown"><b>Password:</b></label>
          <input type="password" class="w3-input w3-border w3-sand" id="pwd" placeholder="Enter password" name="password" required>
          
          <input type="checkbox" onclick="myFunction()"><b class="w3-text-brown">Show Password</b>

          
        </div>
        <div class="invalid-feedback" style="display:<?=$_SESSION['acc'] ?> ;" ><b>Email hoặc mật khẩu không đúng<b></div>
        <!-- <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
          <label class="form-check-label" for="myCheck"><b>I agree on blabla.</b></label>
          <div class="valid-feedback"><b>Valid.</b></div>
          <div class="invalid-feedback"><b>Check this checkbox to continue.<b></div>
        </div> -->
      <button type="submit" name="login" class="btn btn-success">Submit</button>
      
    </form>
 
</body>
</html>
<script>
  function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  }
  </script>