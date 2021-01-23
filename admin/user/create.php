
<?php
require_once "../libs/user.php";
require_once "../config/config.php";
$u = list_all_user();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thêm </h6>
    
  </div>
  <div class="card-body">
    <form action="user/create-save.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập tên " required>
        </div>
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Nhập Username " required>
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Nhập Email " >
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Nhập Password " >
        </div>
        <div class="form-group">
            <label for="name">Role</label>
            <input type="text" name="role" id="role" class="form-control" placeholder="Vai Trò " >
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập Địa Chỉ " >
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại " >
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Nhập giới tính " >
        </div>
        <div class="form-group">
            <label for="name">Created_at</label>
            <input type="text" name="created_at" id="created_at" class="form-control" placeholder="Ngày Tạo " >
        </div>
        <div class="form-group">
            <label for="name">Updated_at</label>
            <input type="text" name="updated_at" id="updated_at" class="form-control" placeholder="Ngày Cập Nhật " >
        </div>
        <button type="submit" name="btnsave">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->