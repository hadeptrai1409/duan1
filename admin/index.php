<?php
ob_start();
session_start();
$page = isset($_GET['page']) ? $_GET['page']:'';
include_once './template/header.php';
require_once "../libs/service.php";
require_once "../config/config.php";
require_once "../libs/user.php";
require_once "../libs/nhanvien.php";
require_once "../libs/comment.php";
require_once "../libs/slider.php";

if($_SESSION['role']  != 1 ) { 
    header("Location: go/login.php");
 }else{
    switch ($page) {
        case '':
            case 'home':
                include_once 'home/home.php';
                break;
            case 'category':
                /// Lấy hành dộng trong categories
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '': 
                        // Thêm vào giao diện hiển thị categories
                     include_once 'categories/index.php'; 
                    break; 
                    case 'add':
                        include_once 'categories/create.php';
                        break;
                    case 'edit':
                        include_once 'categories/edit.php';
                    break;
                    case 'delete':
                        include_once 'categories/delete.php';
                    break;
                }
            break;
            case 'service':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị service
                     include_once 'service/index.php'; 
                    break; 
                    case 'search':
                        include_once 'service/search.php';  
                    break;   
                    case 'add':
                        include_once 'service/create.php';
                    break;
                    case 'edit':
                        include_once 'service/edit.php';
                    break;
                    case 'delete':
                        include_once 'service/delete.php';
                    break;
                }
            break;
            case 'datlich':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị datlich
                     include_once 'datlich/index.php'; 
                    break; 
                    case 'delete':
                        include_once 'datlich/delete.php';
                    break;
                }
            break;
            case 'user':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị user
                     include_once 'user/index.php'; 
                    break;    
                    case 'add':
                        include_once 'user/create.php';
                    break;
                    case 'edit':
                        include_once 'user/edit.php';
                    break;
                    case 'delete':
                        include_once 'user/delete.php';
                    break;
                }
            break;
            case 'nhanvien':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị nhanvien
                     include_once 'nhanvien/index.php'; 
                    break;    
                    case 'add':
                        include_once 'nhanvien/create.php';
                    break;
                    case 'edit':
                        include_once 'nhanvien/edit.php';
                    break;
                    case 'delete':
                        include_once 'nhanvien/delete.php';
                    break;
                }
            break;
            case 'comment':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị comment
                     include_once 'comment/index.php'; 
                    break;    
                    case 'add':
                        include_once 'comment/create.php';
                    break;
                    case 'edit':
                        include_once 'comment/edit.php';
                    break;
                    case 'delete':
                        include_once 'comment/delete.php';
                    break;
                }
            break;
            case 'slider':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị comment
                     include_once 'slider/index.php'; 
                    break;    
                    case 'add':
                        include_once 'slider/create.php';
                    break;
                    case 'delete':
                        include_once 'slider/delete.php';
                    break;
                }
            break;
            case 'album':
                $action = isset($_GET['action']) ? $_GET['action']: '';
                switch($action){
                    case '':
                        // Thêm vào giao diện hiển thị comment
                     include_once 'album/index.php'; 
                    break;    
                    case 'add':
                        include_once 'album/create.php';
                    break;
                    case 'delete':
                        include_once 'album/delete.php';
                    break;
                }
            break;
            default:
            echo "404 Not found";
            break;
    }
}



include_once 'template/footer.php'; 
if(isset($_SESSION['message'])) { 
    unset($_SESSION['message']); 
} 
?> 
<script>
$(document).ready(function() {
    $('#checkall').change(function(){
        $('input:checkbox').prop('checked', $(this).prop('checked'));
    });
    $('#btndel-category').click(function(){
        if($('input:checked').length === 0){
            alert("Bạn cần chọn ít nhất một danh mục");
            return false;
        };
        
    });
});
$(document).ready(function() {
    $('#checkall').change(function(){
        $('input:checkbox').prop('checked', $(this).prop('checked'));
    });
    $('#btndel-products').click(function(){
        if($('input:checked').length === 0){
            alert("Bạn cần chọn ít nhất một danh mục");
            return false;
        };
        
    });
});
</script>
<?
ob_end_flush();
?>
