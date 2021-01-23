<?php
require_once "../libs/user.php";
require_once "../config/config.php";

    $id = $_GET['id'];
    // echo $id;
    delete_user('id', $id);
    header('Location:' . ROOT . 'admin/?page=user');
    die;

    
?>