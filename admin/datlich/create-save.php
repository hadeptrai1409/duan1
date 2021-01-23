<?php
require_once "../../libs/datlich.php";
require_once "../../config/config.php";
if(isset($_POST['btnsubmit'])) {
	extract($_REQUEST);
    var_dump($_REQUEST);
    
    insert_dat_lich($name,$phone,$ngay_dat,$created_at,$address, $dichvu,$nhanvien);
header('Location:' . ROOT . 'layout/datlich.php');
}

?>