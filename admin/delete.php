<?php
    include_once '../config/database.php' ;
    include_once '../models/product.php';
    // instantiate database and objects
    $database = new Database();
    $db = $database->getConnection();
    $product = new Product($db);
    $id = $_POST['id']; 
    if(isset($_POST['id'])){
        $product->delete_id($id);
    }
?>