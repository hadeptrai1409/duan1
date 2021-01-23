<?php
require_once "../libs/slider.php";
require_once "../config/config.php";

$id = $_GET['id'];
delete_slider('id', $id);

header('Location:' . ROOT . 'admin/?page=slider');
die;

?>