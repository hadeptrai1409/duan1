
<?php
// session_start();
require_once "../libs/album.php";
require_once "../config/config.php";
$cate = list_all_album();


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
    insert_album($image,$year); 
    if ($okupload) { 
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/'. $image);
        
    }
   
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' . ROOT . 'admin/?page=album');
    die();
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thêm danh mục Album</h6>
    
  </div>
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form group">
            <input type="file" name="image" id="" class="fomr-input-file border">
        </div><br>
        <div>
        <input type="text" name="year" id="name" class="form-control" placeholder="Year" required>
        </div> <br>
        <button type="submit" name="btnsave">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->