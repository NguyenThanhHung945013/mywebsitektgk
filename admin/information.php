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
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <main class='infoadmin'>
        <?php
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

        ?>
        <div class="info">
            <img src="<?=$avatar ?>" alt="Logo" style="width:90%;" class="rounded-pill">
            <!-- <p><button class="w3-btn w3-brown w3-bu">Register</button></p> -->
            <p>      
                <!-- <label class="w3-text-brown"><b>Họ và tên</b></label> -->
                <input class="w3-input w3-border w3-sand w3-bu" name="first" type="file"></p>
            <p> 
        </div>
        <div class="w3-card-4 info">
            <div class="w3-container w3-brown">
              <h2 style="text-align: center;">Thay đổi thông tin</h2>
            </div>
            <form class="w3-container w3_a" method="POST">
              <p>      
              <label class="w3-text-brown"><b>Họ và tên</b></label>
              <input class="w3-input w3-border w3-sand" name="first" type="text" value="<?=$name ?>"></p>
              <p>      
              <label class="w3-text-brown"><b>Nhập mật khẩu cũ</b></label>
              <input class="w3-input w3-border w3-sand" name="last" type="password"></p>
              <p>      
                <label class="w3-text-brown"><b>Nhập mật khẩu mới</b></label>
                <input class="w3-input w3-border w3-sand" name="last" type="password"></p>
              <p>      
                <label class="w3-text-brown"><b>Nhập lại mật khẩu</b></label>
                <input class="w3-input w3-border w3-sand" name="last" type="password"></p>  
              <p><button class="w3-btn w3-brown">Thay đổi</button>
                <button class="w3-btn w3-brown"><a href="main.php" class="btn-info">Quay lại</a></button></p>
            </form>
        </div>
    </main>
</body>
</html>