
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="../images/admin.jpg">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <!-- <h1>Update Stories</h1> -->
    <form action="/action_page.php" class="was-validated" method="POSTs">
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label">Name:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3">
            <label for="myfile">Link:</label>
            <input type="file" class="form-control" id="uname" placeholder="Enter username" name="link" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="mb-3">
            <label for="myfile">Images:</label>
            <input type="file" class="form-control" id="uname" placeholder="Enter username" name="images" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Nation:</label>
            <select class="form-control" id="sel1" name="nation">
                <option>Japan</option>
                <option>China</option>
                <option>Korea</option>
                <option>American</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Type:</label>
            <select class="form-control" id="sel1" name="catagory">
                <option>Anime</option>
                <option>Manga</option>
                <option>Trinh thám</option>
                <option>Hành động</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
          <label class="form-check-label" for="myCheck">I agree on blabla.</label>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <button type="submit" class="btn btn-primary" name="update" >Submit</button>
    </form>
</body>
</html>
<?php
  include_once '../config/database.php' ;
  include_once '../models/product.php';
  // instantiate database and objects
  $database = new Database();
  $db = $database->getConnection();
  $product = new Product($db);
  $id = $_GET['id']; 
  if(isset($_POST['update'])){

  }

?>