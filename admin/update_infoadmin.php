        <?php
          if(isset($_POST['cancal'])){
            header("location:./main.php");
          }
            $error = "" ;
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
              $admin->name = $_POST['name'] ;
              $admin->avatar = $_POST['images'] ;
              $password_old = $_POST['old'];
              $password_new = $_POST['new'];
              $password_agane = $_POST['agane'];
              
              if(strcmp($password, $password_old)!=0 && $password_old!=""){
                $error = "Mật khẩu không đúng";
                header("location:./information.php?id={$id}&error={$error}");
              }
              else if(strcmp($password_new, $password_agane) != 0 ){
                $error = "Mật khẩu không khớp";
                header("location:./information.php?id={$id}&error={$error}");
              }
              else{
                if($admin->avatar==""){
                  $admin->avatar = $avatar ;
                }
                if($password_new == ""){
                    $admin->password = $password ;
                }
                else{
                  $admin->password =$password_new ;
                }
               
                if($admin->update($id)){
                    header('location:./main.php');
                }
            }   
        
            

        ?>