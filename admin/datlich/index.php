<?php
require_once ".././libs/datlich.php";
require_once ".././config/config.php";
$cate = list_all_datlich();

if(isset($_POST['btn-del'])) {
  extract($_REQUEST);
  foreach($id as $id_category) {
  delete_category('id',$id_category);
  
  } 
  $_SESSION['message'] = "Xóa dữ liệu thành công";
  header('Location: ' . ROOT . 'admin/?page=category');
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
    <h6 class="m-0 font-weight-bold text-primary">Danh sách đặt lịch 
        <!-- <a href="<?=ROOT ?>admin/?page=category&action=add" class="btn btn-primary">Thêm mới</a></h6> -->
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
            <th>Name</th>
            <th>Phone</th>
            <th>Ngày Đặt</th>
            <th>Created_at</th>
            <th>Địa Chỉ</th>
            <th>Status</th>
            <th>Dịch Vụ</th>
            <th>Nhân viên Làm</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>
                
            </th>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Ngày Đặt</th>
            <th>Created_at</th>
            <th>Địa Chỉ</th>
            <th>Status</th>
            <th>Dịch Vụ</th>
            <th>Nhân viên Làm</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            <!-- <?php foreach($cate as $c) : ?> -->
          <tr>
            <td>
                <input type="checkbox" name="id[]" id="" value="<?=$c['id']?>">
            </td>
            <td><?=$c['id']?></td>
            <td><?=$c['name']?></td>
            <td><?=$c['phone']?></td>
            <td><?=$c['ngay_dat']?></td>
            <td><?=$c['created_at']?></td>
            <td><?=$c['address']?></td>
            <td><?=$c['status']?></td>
            <td><?=$c['dichvu']?></td>
            <td><?=$c['nhanvien']?></td>
            <td>
                
                <a href="<?=ROOT ?>admin/?page=datlich&action=delete&id=<?=$c['id']?>" 
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