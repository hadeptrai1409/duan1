<?php
require_once "./config/config.php"; 
require_once "./libs/categories.php"; 
require_once "./libs/service.php"; 
require_once "./libs/database.php"; 
require_once "./libs/comment.php"; 
require_once "./libs/user.php"; 
require_once "./libs/search.php"; 


$page = isset($_GET['page']) ? $_GET['page'] : '';
$categories = list_all_category();
 
switch ($page){
        case '' :
        case 'home':  
            $view_page = "layout/home.php";
        break;
        case 'category' : 
            $view_page = "layout/categori.php";
        break; 
        case 'search' : 
            $view_page = "layout/search.php";
        break;
        case 'products' : 
            // $product = list_one_products($id);
            $title = $service['name']; 
            // $view_page = "layout/product.php";
        break;
        case 'logout' :
            unset($_SESSION['user']);
            header('location ' . ROOT);
            die;
        break;
       
        default : 
            $view_page = "site/404.php";
        break;
}

 include_once "layout/layout.php";
?>
