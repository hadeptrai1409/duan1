
<?php
require_once "../libs/user.php";
require_once "../config/config.php";

$id = $_GET['id'];
// echo $id;
// if(isset($_POST['btnsua'])) {
//   extract($_REQUEST);
//   // var_dump($_REQUEST);
//   $okupload = false;
//   // var_dump($_FILES['image']);die;
//   if($_FILES['image']['size'] > 0) {
//       $okupload = true;
//       $image = uniqid() . $_FILES['image']['name'];
//   }else{
//       $image = '';
//   }
//   updated_category($name, $image,$id);
//   if ($okupload) {
//       move_uploaded_file($_FILES['image']['tmp_name'], '../../images/'. $image);
      
//   }
//   header('Location:' . ROOT . 'admin/?page=category');
// }

// $cate = list_one_category($id);

// var_dump($cate);

if(isset($_POST['btnsua'])){
  extract($_REQUEST);
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

  updated_user($fullname, $username, $email, $password, $role, $address, $phone, $gender, $id);

  if($okupload == true){
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.$image);
  }

  header("location:".ROOT.'admin/?page=user');
}


$u = list_one_user($id);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa Username </h6>
    
  </div>
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập tên " required value="<?=$u['fullname']?>">
        </div>
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Nhập Username " required value="<?=$u['username']?>">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Nhập Email " value="<?=$u['email']?>">
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Nhập Password " value="<?=$u['password']?>">
        </div>
        <div class="form-group">
            <label for="name">Role</label>
            <input type="text" name="role" id="role" class="form-control" placeholder="Vai Trò " value="<?=$u['role']?>">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập Địa Chỉ " value="<?=$u['address']?>">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại " value="<?=$u['phone']?>">
        </div>
        <div class="form-group">
            <label for="name">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Nhập giới tính " value="<?=$u['gender']?>">
        </div>
        <div class="form-group">
            <label for="name">Created_at</label>
            <input type="text" name="created_at" id="created_at" class="form-control" placeholder="Ngày Tạo " value="<?=$u['created_at']?>">
        </div>
        <div class="form-group">
            <label for="name">Updated_at</label>
            <input type="text" name="updated_at" id="updated_at" class="form-control" placeholder="Ngày Cập Nhật " value="<?=$u['updated_at']?>">
        </div>
        <button type="submit" name="btnsua">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->