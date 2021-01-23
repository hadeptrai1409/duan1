<?php

session_start();
require_once "../../config/config.php";

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    header("Location:".ROOT.'admin/go/login.php');
}

?>


