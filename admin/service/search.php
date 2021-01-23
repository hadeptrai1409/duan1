<?php 
extract($_REQUEST);
$result = search_service($keyword);



?>

<html>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm 
</h6>
    
  </div>
  <div class="card-body">
    <div class="table-responsive">

  
  <form action="" method="POST" class="col-12">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>
                <input type="checkbox" name="checkall" id="checkall">
            </th>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Sale</th>
            <th>View</th>
            <th>Id_dichvu</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>
                
            </th>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Sale</th>
            <th>View</th>
            <th>Id_dichvu</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach($result as $r) : ?>
          <tr>
            <td>
                <input type="checkbox" name="id[]" id="" value="<?=$r['id_service']?>">
            </td>
            <td><?=$r['id_service']?></td>
            <td><?=$r['name_service']?></td>
            <td>
                <img src="../images/<?=$r['image_service']?>" width="120" alt="">
            </td>
            <!-- <td><?= ($r['status']) ? 'Có hàng' : 'Hết hàng'?></td> -->
            <td><?= $r['price'] ?></td>
            <td><?= $r['sale'] ?></td>
            <td><?= $r['view'] ?></td>
            <td><?= $r['id_dichvu'] ?></td>
            <td>
                <a href="<?=ROOT ?>admin/?page=service&action=edit&id=<?=$r['id_service']?>" class="btn btn-primary">Sửa</a>
                <a href="<?=ROOT ?>admin/?page=service&action=delete&id=<?=$r['id_service']?>" 
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