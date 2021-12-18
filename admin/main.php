<?php
  session_start();
  include_once '../config/database.php' ;
  include_once '../models/story.php' ;
  include_once '../models/category.php' ;
  include_once '../admin/admin.php' ;
  $database = new Database();
  $db = $database->getConnection();
  $admin = new Admin($db);
  $story = new Story($db);
  $category = new Category($db);
  // if(!isset($_POST['login']) && !isset($_GET['pa']))
  //   header('location:index.php');
  if(!isset($_GET['pa']))
    $_GET['pa'] = 1 ;
  if(!isset($_SESSION['id']))
    $_SESSION['id'] = 1 ;
  if(isset($_POST['login'])){
    $acc = false ;
    $em = $_POST['email'];
    $pass = $_POST['password'];
    $stmt = $admin->ConnectAccount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      if($email=== $em && $pass === $password){
        $acc = true ;
        $_SESSION['id'] = $id ;
      }
    }
    if($acc==false)
      header('location:index.php?acc=false');
  }
  
  $stmt=$admin->Account($_SESSION['id']);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  extract($row);
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
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <header>
        <div class="head_right">
            <h1></h1>
        </div>
        <div class="head_left">
        
            <a href="information.php"><img src="<?=$avatar?>" alt="Logo" style="width:40px;" class="rounded-pill"></a>
        
            <i><?=$name?></i>
            <a href="logout.php" class='btn btn-info left-margin'>Logout</a>
        </div>
    </header>
    <nav>  
        <a href='main.php' class="btn btn-info left-margin">Tất cả</a>
        <a href='main.php' class="btn btn-success left-margin">Quốc gia</a>
        <a href='main.php' class="btn btn-danger left-margin">Thể loại</a>
    </nav>
    <?php 
    $page = isset($_GET['pa']) ? $_GET['pa'] : 1;
    $records_per_page = 5;
    $total_rows = 60;
    $from_record_num = ($records_per_page * $page) - $records_per_page;
    $stmt = $story->readAll($from_record_num, $records_per_page);
    $num = $stmt->rowCount();

    echo "<div class='main'>
        <a href='add.php' class='btn btn-info left-margin'>Creat</a>
        <table class='table table-dark table-bordered'>
            <thead>
              <tr>
                <th>Images</th>
                <th>Name</th>
                <th>Category</th>
                <th>Nation</th>
                <th>Action</th>
              </tr>
            </thead>" ;
            
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              extract($row);
              echo "<tr>
                <td>{$name}</td>
                <td><img src='../images/{$images}'style='width:50px ;height:50px'>
                <td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo "{$category->name}";
                echo "</td>
                <td>{$nation}</td>
                <td>
                  <button class='btn btn-info left-margin' left-margin'>Read</button>
                  <a href='update.php?id={$id}' class='btn btn-info left-margin'>Update</a>
                  <button class='btn btn-info left-margin' onclick='delete_story({$id})'>Delete</button>                </td>
             </tr>";
              }
      
          echo "</table>
    </div>" ;
    
    ?>
    <footer>
    <?php
    echo "<ul class='pagination' style='margin-left:40%;'>";
        $page_url = "main.php" ;
        // button for first page
        if($page>1){
          echo "<li><a href='{$page_url}?pa=1' title='Go to the first
          page.'>";
          echo "First";
          echo "</a></li>";
        }

        // calculate total pages
        $total_pages = ceil($total_rows / $records_per_page);
        // range of links to show
        $range = 2;
        // display links to 'range of pages' around 'current page'
        $initial_num = $page - $range;
        $condition_limit_num = ($page + $range) + 1;
        for ($x=$initial_num; $x<$condition_limit_num; $x++) {
        // be sure '$x is greater than 0' AND 'less than or equal to the$total_pages'
          if (($x > 0) && ($x <= $total_pages)) {
        // current page
            if ($x == $page) {
        
              echo "<li class='active'><a href=\"#\">$x <span class=\"sr-
              only\">(current)</span></a></li>";
        
          }
        // not current page
            else {
              echo "<li><a href='{$page_url}?pa=$x'>$x</a></li>";
            }
          }
        }
        // button for last page
        if($page<$total_pages){
          echo "<li><a href='" .$page_url."?pa={$total_pages}' title='Last
          page is {$total_pages}.'>";
          echo "Last";
          echo "</a></li>";
        }
        echo "</ul>";
    ?>
    </footer>
</body>
</html>
<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script language="javascript">
		function delete_story(id) {
			option = confirm('Bạn có muốn xoá loại truyện này không')
          if(!option) {
            return;
          }
          $.ajax({
            url : "delete.php",
            type : "post",
            dataType:"text",
            data : {
                 'id' : id
              },
              success : function (result){
				        location.reload()
            }
          });
		}
		
    </script>