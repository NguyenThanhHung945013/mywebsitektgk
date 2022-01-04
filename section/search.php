<?php
//   session_start();    
  include_once './config/database.php' ;
  include_once './models/category.php' ;
  include_once './models/story.php' ;
  $database = new Database();
  $db = $database->getConnection();
  $story = new Story($db);
  $category = new Category($db);
  $page = isset($_GET['pa']) ? $_GET['pa'] : 1;
  $records_per_page = 15;
  $total_rows = 60;
  
//   $_SESSION['search'] = $_GET['s'] ;
  $category_id = 2 ;
  $from_record_num = ($records_per_page * $page) - $records_per_page;
  if( $_SESSION['search'] ==""){
    header('location:../index.php');

  }
  $query = "select * from list where name like '%{$_SESSION['search']}%'";
  $stmt=$story->conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();
  $query = "select * from list where name like '%{$_SESSION['search']}%'  LIMIT {$from_record_num},{$records_per_page}";
  $stmt=$story->conn->prepare($query);
  $stmt->execute();
 
  $page_title = "$num kết quả với từ khóa <b>{$_SESSION['search']}</b>";
  echo "<aside class='left' style='height: 830px ; '>";
  echo "<h1>{$page_title}</h1>";
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      echo "<div class='menu_left'>";
      echo "<a href='./view/{$link}' onmouseover='this.style.color = red' onmouseout='this.style.color = blue'><img src='images/{$images}' alt=' 'style='width:150px ;height:200px'></a>";
      echo "<h2><a href='./view/{$link}' onmouseover='this.style.color = red' onmouseout='this.style.color = blue'>{$name}</a></h2>";
      echo "</div>"; 
  }
  echo"</aside>";
  
?>