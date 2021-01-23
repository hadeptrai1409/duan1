<?php
//  $cate = list_all_products();
 $cate = listAll('service');
 $a = listAll('categories');

?>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thêm dịch vụ</h6>

  </div>
  <div class="card-body">
    <form action="service/create-save.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="name">Cate_id</label><br>
            <select style="width:100%; height:35px" name="cate_id" id="">
            <?php foreach($a as $c) : ?>
                <option value="<?=$c['id']?>"><?=$c['name']?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="form group">
        <label for="name">Image</label><br>
        <input type="file" name="image" id="" class="fomr-input-file border">
        </div>
        <div class="form-group">
            <label for="name">Description</label><br>
            <textarea name="description" class="form-control ckeditor" id="intro" cols="30" rows="5"></textarea>
                <script>
                        CKEDITOR.replace( 'description' );
                </script>
        </div>
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá" >
        </div>
        <div class="form-group">
            <label for="name">Sale</label>
            <input type="text" name="sale" id="sale" class="form-control" placeholder="giảm giá" >
        
        <div class="form-group">
            <label for="name">View</label>
            <input type="text" name="view" id="view" class="form-control" placeholder="Lượt xem" >
        </div>
        <button type="submit" name="btnsave">Ghi Lại</button>
    </form>
  </div> 
</div> 
<script> CKEDITOR.replace( 'editor1' );</script>
</div>
<!-- /.container-fluid -->