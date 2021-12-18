<?php
  include_once '../config/database.php' ;
  include_once '../models/story.php' ;
  include_once '../models/category.php' ;
  include_once '../admin/admin.php' ;
  $database = new Database();
  $db = $database->getConnection();
  $admin = new Admin($db);
  $story = new Story($db);
  $category = new Category($db);
 
  
  


echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin</title>
    <link rel='icon' type='image/x-icon' href='../images/admin.jpg'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet'href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />
</head>
<body>
    
    <form action='' class='was-validated' method='POST'>
        <div class='mb-3 mt-3'>
          <label for='uname' class='form-label'>Name:</label>
          <input type='text' class='form-control' id='uname' placeholder='Enter username' name='name' required>
          <div class='valid-feedback'>Valid.</div>
          <div class='invalid-feedback'>Please fill out this field.</div>
        </div>
        <div class='mb-3 mt-3'>
            <label for='myfile'>Link:</label>
            <input type='text' class='form-control' id='uname' placeholder='Enter username' name='link' required>
            <div class='valid-feedback'>Valid.</div>
            <div class='invalid-feedback'>Please fill out this field.</div>
          </div>
          <div class='mb-3'>
            <label for='myfile'>Images:</label>
            <input type='file' class='form-control'name='images' required>
            <div class='valid-feedback'>Valid.</div>
            <div class='invalid-feedback'>Please fill out this field.</div>
          </div>
          <div class='mb-3'>
            <label for='pwd' class='form-label'>Nation:</label>
            <select class='form-control' id='sel1' name='nation'>";
                echo"<option value='Japan'>Japan</option>";
                echo"<option value='China'>China</option>";
                echo"<option value='Korea'>Korea</option>";
                echo"<option value='American'>American</option>";
          echo"</select>
            <div class='valid-feedback'>Valid.</div>
            <div class='invalid-feedback'>Please fill out this field.</div>
          </div>
          <div class='mb-3'>";
          $stmt = $category->read();          
         
          
          echo "<select class='form-control' name='category_id'>";
          while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row_category);
                  echo "<option value='{$id}'>{$name}</option>";
                }
              echo "</select>";
            echo "<div class='valid-feedback'>Valid.</div>
            <div class='invalid-feedback'>Please fill out this field.</div>
          </div>
        <div class='form-check mb-3'>
          <input class='form-check-input' type='checkbox' id='myCheck' name='remember' required>
          <label class='form-check-label' for='myCheck'>I agree on blabla.</label>
          <div class='valid-feedback'>Valid.</div>
          <div class='invalid-feedback'>Check this checkbox to continue.</div>
        </div>
        <button type='submit' class='btn btn-primary' name='add' >Submit</button>
    </form>
</body>
</html>";
  if(isset($_POST['add'])){
    $story->name = $_POST['name'];
    $story->link = $_POST['link'];
    $story->images = $_POST['images'];
    $story->nation = $_POST['nation'];
    $story->category_id = $_POST['category_id'];
    // echo "$story->category_id";
    if($_POST['images']=="")
        $story->images = $images ;
    else {
        $story->images = $_POST['images'];
    }
    
    if($story->insert())
      header('location:./main.php');
    else {
        echo"Thất bại";
    }
  }

?>