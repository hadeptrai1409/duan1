<?php
require_once "../../libs/service.php";
require_once "../../config/config.php";
if(isset($_POST['btnsave'])) {
    extract($_REQUEST);
    $okupload = false;
    // var_dump($_FILES['image']);die;
    if($_FILES['image']['size'] > 0) {
        $okupload = true;
        $image = uniqid() . $_FILES['image']['name'];
    }else{
        $image = '';
    }
    insert_service($cate_id,$name,$image,$description,$price,$sale,$view);
    if ($okupload) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../../images/'. $image);
  
        
    }
    header('Location:' . ROOT . 'admin/?page=service');

}


?>