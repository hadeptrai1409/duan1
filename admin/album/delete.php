<?php
require_once "../libs/album.php";
require_once "../config/config.php";

$id = $_GET['id'];
delete_album('id', $id);

header('Location:' . ROOT . 'admin/?page=album');
die;

?>