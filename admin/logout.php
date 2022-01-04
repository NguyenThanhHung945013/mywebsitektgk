<?php   
    session_start();
    unset($_SESSION['id']);
    echo "thành công";
    header('location:./index.php');
?>
