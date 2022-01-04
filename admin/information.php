<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ADMIN</title>
    <link rel='icon' type='image/x-icon' href='../images/admin.jpg'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link rel='stylesheet'href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />
</head>
<body>
  <?php
            $error = '' ;
            if(isset($_GET['error'])){
              $error = $_GET['error'];
            }
            $id = $_GET['id'];
            include_once '../config/database.php' ;
            include_once '../models/story.php' ;
            include_once '../models/category.php' ;
            include_once '../admin/admin.php' ;
            $database = new Database();
            $db = $database->getConnection();
            $admin = new Admin($db);
            $story = new Story($db);
            $category = new Category($db);
            $stmt=$admin->Account($id);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
    echo"
  
    <form class='infoadmin' action ='update_infoadmin.php?id={$id}' method='POST' style='padding: 0px 0px 0px 0px;'>
           <div class='w3-container w3-brown'>
              <h2 style='text-align: center;'>Thay đổi thông tin</h2>
            </div>
        
        <div class='w3-card-4 info' style='height: 435px;'>
            <img src='../images/{$avatar}' alt='Logo' style='width:300px; height: 300px; margin-left: 0%;' class='w3-circle '>
            <!-- <p><button class='w3-btn w3-brown w3-bu'>Register</button></p> -->
            <p>      
                <!-- <label class='w3-text-brown'><b>Họ và tên</b></label> -->
                <input class='w3-input w3-border w3-sand w3-bu' name='images' type='file'></p>
            <p> 
        </div>
        <div class='w3-card-4 info' style='height: 435px;'>
            
            <div class='w3-container w3_a' style='margin-left: 5%;'>
              <p>      
              <label class='w3-text-brown'><b>Họ và tên</b></label>
              <input class='w3-input w3-border w3-sand' name='name' type='text' value='{$name}'></p>
              <p>      
              <label class='w3-text-brown'><b>Nhập mật khẩu cũ</b></label>
              <input class='w3-input w3-border w3-sand' name='old' type='password'></p>
              <p>      
                <label class='w3-text-brown'><b>Nhập mật khẩu mới</b></label>
                <input class='w3-input w3-border w3-sand' name='new' type='password'></p>
              <p>      
                <label class='w3-text-brown'><b>Nhập lại mật khẩu</b></label>
                <input class='w3-input w3-border w3-sand' name='agane' type='password'></p> 
                <p style='color : red ;'>{$error}</p> 
              <p><button type = 'submit' class='w3-btn w3-brown' name= 'chane' style='margin: 8% 20% 8% 5%;' >Thay đổi</button>
                <button class='w3-btn w3-brown' type = 'submit' name='cancal' style='margin: 8% 5% 8% 5%;'>Quay lại</a></button></p>
               
          </div>
        </div>
    </form>";
  
    ?>
</body>
</html>
