    <?php
          if(isset($_GET['page'])){
            // $currentPage = $_GET['page'];
            // echo "<h1>{$currentPage}<h1>";
            // $pagePath = "../section/{$_GET['page']}.php";
            // echo $pagePath;
            include_once 'index.php?page={$_GET['page']} ;'
            // include_once($pagePath);
          }
    ?>