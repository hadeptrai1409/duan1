<?php
define('ROOT', 'http://localhost:8080/duan1/');

function check_session() {
    if (isset($_SESSION['user'])) {
        header('Location : ' . ROOT . 'admin');
        die;
    }
    return;
}

// Kiểm tra quyền hạn được vào admin
function check_role() {
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']['role'] == 1000) {
            return;
        }
        if($_SESSION['user']['role'] == 100) {
           header('location: ' . ROOT);
           die;
        }
    }
    // Trường hợp nguoiwf dùng chưa đăng nhập
    header('Location: ' . ROOT . 'admin/login.php');
}

// kiểm tra tài khoản đã đăng nhập chưa
function check_account() {
     if(isset($_SESSION['user'])) {
         return true;
     }
         return false;
}
?>