<?php
require_once "../libs/categories.php";
require_once "../config/config.php";

$id = $_GET['id'];
delete_category('id', $id);

header('Location:' . ROOT . 'admin/?page=category');
die;

?>