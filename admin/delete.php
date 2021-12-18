<?php
   
    include_once '../config/database.php' ;
    include_once '../models/story.php';
    // instantiate database and objects
    $database = new Database();
    $db = $database->getConnection();
    $story = new Story($db);
    $id = $_POST['id']; 
    if(isset($_POST['id'])){
        $story->delete($id);
    }
?>