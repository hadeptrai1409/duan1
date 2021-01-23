<?php
session_start();
require_once "../../libs/nhanvien.php";
require_once "../../config/config.php";
if(isset($_POST['btnsave'])) {
    extract($_REQUEST);
    // $okupload = false;
    // // var_dump($_FILES['image']);die;
    // if($_FILES['image']['size'] > 0) {
    //     $okupload = true;
    //     $image = uniqid() . $_FILES['image']['name'];
    // }else{
    //     $image = '';
    // }
    insert_nhanvien($fullname, $address, $ngay_sinh,$ngay_lam, $luong, $gender);
    // if ($okupload) {
    //     move_uploaded_file($_FILES['image']['tmp_name'], '../../images/'. $image);
        
    // }
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' . ROOT . 'admin/?page=nhanvien');
    die();
}


?>