<?php
     include_once '../config/database.php' ;
     include_once '../models/story.php';
     // instantiate database and objects
     $database = new Database();
     $db = $database->getConnection();
     $story = new Story($db);
     $story->readALL($from_record_num,$records_per_page);
?>