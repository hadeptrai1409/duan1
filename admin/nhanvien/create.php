
<?php
require_once "../libs/nhanvien.php";
require_once "../config/config.php";
$u = list_all_nhanvien();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thêm </h6>
    
  </div>
  <div class="card-body">
    <form action="nhanvien/create-save.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập tên " required>
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập Địa Chỉ " >
        </div>
        <div class="form-group">
            <label for="name">Ngày Sinh</label>
            <input type="text" name="ngay_sinh" id="phone" class="form-control" placeholder="Nhập ngày sinh của bạn " >
        </div>
        <div class="form-group">
            <label for="name">Ngày Làm</label>
            <input type="text" name="ngay_lam" id="created_at" class="form-control" placeholder="Ngày Làm " >
        </div>
        <div class="form-group">
            <label for="name">Lương</label>
            <input type="text" name="luong" id="updated_at" class="form-control" placeholder="Số lương hiện tại" >
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Nhập giới tính " >
        </div>
        <button type="submit" name="btnsave">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->