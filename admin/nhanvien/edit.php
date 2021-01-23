
<?php
require_once "../libs/nhanvien.php";
require_once "../config/config.php";

$id = $_GET['id'];

if(isset($_POST['btnsave'])){
  extract($_REQUEST);
  var_dump($_REQUEST);
  $anhcu = isset($_POST['anh']) ? $_POST['anh'] : '';
  $okupload = false;
  $dir = "../images/";
  if($_FILES['image']['size'] > 0){
    $okupload = true;
    $image = uniqid().$_FILES['image']['name'];
  }else{
    $image = "";
  }

  if($okupload == true){
    $image = $image;
  }else{
    $image = $anhcu;
  }

  updated_nhanvien($fullname, $address, $ngay_sinh,$ngay_lam, $luong, $gender, $id);

  if($okupload == true){
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.$image);
  }

  header("location:".ROOT.'admin/?page=nhanvien');
}


$u = list_one_nhanvien($id);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa Nhân Viên </h6>
    
  </div>
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập tên " required value="<?=$u['fullname']?>">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập Địa Chỉ " value="<?=$u['address']?>" >
        </div>
        <div class="form-group">
            <label for="name">Ngày Sinh</label>
            <input type="text" name="ngay_sinh" id="phone" class="form-control" placeholder="Nhập ngày sinh của bạn " value="<?=$u['ngay_sinh']?>" >
        </div>
        <div class="form-group">
            <label for="name">Ngày Làm</label>
            <input type="text" name="ngay_lam" id="created_at" class="form-control" placeholder="Ngày Làm " value="<?=$u['ngay_lam']?>">
        </div>
        <div class="form-group">
            <label for="name">Lương</label>
            <input type="text" name="luong" id="updated_at" class="form-control" placeholder="Số lương hiện tại" value="<?=$u['luong']?>">
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Nhập giới tính " value="<?=$u['gender']?>" >
        </div>
        <button type="submit" name="btnsave">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->