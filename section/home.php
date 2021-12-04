<?php
  include_once './config/database.php' ;
  include_once './models/category.php' ;
  include_once './models/story.php' ;
  $database = new Database();
  $db = $database->getConnection();
  $story = new Story($db);
  $category = new Category($db);
  $stmt = $story->readALL();
  echo "<aside class='left'>";
  echo "<h1>Truyện Mới Cập Nhập</h1>";
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      echo "<div class='menu_left'>";
      echo "<img src='images/onepiece.png' alt=' 'style='width:150px ;height:200px'>";
      echo "<h2><a href='./view/homeview.php' onmouseover='this.style.color = red' onmouseout='this.style.color = blue'>{$name}</a></h2>";
      echo "</div>"; 
  }
  echo"</aside>";
?>