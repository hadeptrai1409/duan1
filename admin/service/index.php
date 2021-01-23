<?php

$cate = list_all_service();
// if(isset($_GET['id'])) {
//   $id = $_GET['id'];
//   delete_products('id', $id);
//   header('Location:' . ROOT . 'admin/?page=products');
//   die;
//   }
if(isset($_POST['btn-del'])) {
  extract($_REQUEST);
  
  foreach($id as $id_products) {
    delete_service($id_products);
  } 
  header('Location: ' . ROOT . 'admin/?page=products');
  die;
  }
?>

<html>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh sách Dịch Vụ 
        <a href="<?=ROOT ?>admin/?page=service&action=add" class="btn btn-primary">Thêm mới</a></h6>
    
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
            <th>Cate_id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sale</th>
            <th>View</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>
                
            </th>
            <th>ID</th>
            <th>Cate_id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sale</th>
            <th>View</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach($cate as $c) : ?>
          <tr>
            <td>
                <input type="checkbox" name="id[]" id="" value="<?=$c['id']?>">
            </td>
            <td><?=$c['id']?></td>
            <td><?=$c['cate_id']?></td>
            <td><?=$c['name']?></td>
            <td>
                <img src="../images/<?=$c['image']?>" width="120" alt="">
            </td>
            <td><?=$c['description']?></td>
            <td><?=$c['price']?></td>
            <td><?=$c['sale']?></td>
            <td><?=$c['view']?></td>
            <td><?=$c['created_at']?></td>
            <td>
                <a href="<?=ROOT ?>admin/?page=service&action=edit&id=<?=$c['id']?>" class="btn btn-primary">Sửa</a>
                <a href="<?=ROOT ?>admin/?page=service&action=delete&id=<?=$c['id']?>" 
                onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger" >Xóa</a>
            </td>
          </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
      <button id="btndel-products" name="btn-del" type="submit" class="btn btn-danger">Xóa Tất Cả</button>
  </form>
  

    
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</html>