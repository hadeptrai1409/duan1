<?php

require_once "../libs/user.php";
require_once "../config/config.php";
$u = list_all_user();
if(isset($_POST['btn-del'])) {
  extract($_REQUEST);
  foreach($id as $id_user) {
  delete_user('id',$id_user);
  
  } 
  $_SESSION['message'] = "Xóa dữ liệu thành công";
  header('Location: ' . ROOT . 'admin/?page=user');
  die; 
  }
?> 

<html>
<!-- Begin Page Content -->
<div class="container-fluid">
  <?php if(isset($_SESSION['message'])) : ?>
<h6 class="h3 mb-2 text-success"><?=$_SESSION['message']  ?></h6>

  <?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh sách User  
        <a href="<?=ROOT ?>admin/?page=user&action=add" class="btn btn-primary">Thêm User</a></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

  
  <form action="" method="POST">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>
                <input type="checkbox" name="checkall" id="checkall">
            </th>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Created_at</th>
            <th>updated_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>
                
            </th>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Created_at</th>
            <th>updated_at</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach($u as $u) : ?>
          <tr>
            <td>
                <input type="checkbox" name="id[]" id="" value="<?=$u['id']?>">
            </td>
            <td><?=$u['id']?></td>
            <td><?=$u['fullname']?></td>
            <td><?=$u['username']?></td>
            <td><?=$u['email']?></td>
            <td><?=$u['password']?></td>
            <td><?=$u['role']?></td>
            <td><?=$u['address']?></td>
            <td><?=$u['phone']?></td>
            <td><?=$u['gender']?></td>
            <td><?=$u['created_at']?></td>
            <td><?=$u['updated_at']?></td>
            <td>
                <a href="<?=ROOT ?>admin/?page=user&action=edit&id=<?=$u['id']?>" class="btn btn-primary">Sửa</a>
                <a href="<?=ROOT ?>admin/?page=user&action=delete&id=<?=$u['id']?>" 
                onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger" >Xóa</a>
            </td>
          </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
      <button id="btndel-category" name="btn-del" type="submit" class="btn btn-danger">Xóa Tất Cả</button>
      </form>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</html>