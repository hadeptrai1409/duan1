<?php
require_once ".././libs/datlich.php";
require_once ".././config/config.php";

    $id = $_GET['id'];
    // echo $id;
    delete_datlich($id);
    header('Location:' . ROOT . 'admin/?page=datlich');
    die;

    
?>