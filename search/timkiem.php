<?php
 include_once '../config/database.php' ;
 include_once '../models/category.php' ;
 include_once '../models/story.php' ;
 $database = new Database();
 $db = $database->getConnection();
 $story = new Story($db);
 $category = new Category($db);
        // Nếu người dùng submit form thì thực hiện
        if (isset($_POST['ok']))
        {
            // Gán hàm addslashes để chống sql injection
            $search = $_POST['search'] ;

            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            }
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from list where name like '%$search%'";
                $stmt=$story->conn->prepare($query);
                $stmt->execute();
                // Kết nối sql
                // mysql_connect("localhost", "story", "root", "");

                // Thực thi câu truy vấn
                // $sql = mysql_query($query);

                // Đếm số đong trả về trong sql.
                // $num = mysql_num_rows($sql);
                $num = 5 ;
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "")
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";

                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['images']}</td>";
                            echo "<td>{$row['link']}</td>";
                            echo "<td>{$row['view']}</td>";
                            echo "<td>{$row['nation']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>  
    </body>
</html>