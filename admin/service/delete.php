<?php
require_once "../libs/service.php";
require_once "../config/config.php";

    $id = $_GET['id'];
    // echo $id;
    delete_service($id);
    header('Location:' . ROOT . 'admin/?page=service');
    die;

    
?>