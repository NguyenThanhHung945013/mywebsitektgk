<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id ;
    include_once '../admin/login.php' ;
?>