<?php
require_once "../libs/nhanvien.php";
require_once "../config/config.php";

    $id = $_GET['id'];
    // echo $id;
    delete_nhanvien('id', $id);
    header('Location:' . ROOT . 'admin/?page=nhanvien');
    die;

    
?>