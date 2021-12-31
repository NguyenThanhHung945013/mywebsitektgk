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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form action="main.php" class="was-validated w3-container" method="POST">
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label">Email:</label>
          <input type="email" class="form-control" id="uname" placeholder="Enter username" name="email" required>
          <div class="valid-feedback"><b>Valid.</b></div>
          <div class="invalid-feedback"><b>Please fill out this field.</b></div>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
          <div class="valid-feedback"><b>Valid.</b></div>
          <div class="invalid-feedback"><b>Please fill out this field.</b></div>
          <input type="checkbox" onclick="myFunction()">Show Password

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