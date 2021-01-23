<?php

require_once "../libs/nhanvien.php";
require_once "../config/config.php";
$ua = list_all_nhanvien();
if(isset($_POST['btn-del'])) {
  extract($_REQUEST);
  foreach($id as $id_nhanvien) {
  delete_nhanvien('id',$id_nhanvien);
  
  } 
  $_SESSION['message'] = "Xóa dữ liệu thành công";
  header('Location: ' . ROOT . 'admin/?page=nhanvien');
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
    <h6 class="m-0 font-weight-bold text-primary">Danh sách Nhân Viên  
        <a href="<?=ROOT ?>admin/?page=nhanvien&action=add" class="btn btn-primary">Thêm Nhân Viên</a></h6>
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
            <th>Address</th>
            <th>Ngày Sinh</th>
            <th>Ngày Làm</th>
            <th>Lương</th>
            <th>Gender</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>
                
            </th>
            <th>ID</th>
            <th>Fullname</th>
            <th>Address</th>
            <th>Ngày Sinh</th>
            <th>Ngày Làm</th>
            <th>Lương</th>
            <th>Gender</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach($ua as $u) : ?>
          <tr>
            <td>
                <input type="checkbox" name="id[]" id="" value="<?=$u['id']?>">
            </td>
            <td><?=$u['id']?></td>
            <td><?=$u['fullname']?></td>
            <td><?=$u['address']?></td>
            <td><?=$u['ngay_sinh']?></td>
            <td><?=$u['ngay_lam']?></td>
            <td><?=$u['luong']?></td>
            <td><?=$u['gender']?></td>
            <td>
                <a href="<?=ROOT ?>admin/?page=nhanvien&action=edit&id=<?=$u['id']?>" class="btn btn-primary">Sửa</a>
                <a href="<?=ROOT ?>admin/?page=nhanvien&action=delete&id=<?=$u['id']?>" 
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