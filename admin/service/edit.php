
<?php
require_once "../libs/service.php";
require_once "../config/config.php";

$id = $_GET['id'];

if(isset($_POST['btnsua'])){
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

  updated_service($cate_id,$name,$image,$description,$price,$sale,$view,$id);

  if($okupload == true){
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.$image);
  }

  header("location:".ROOT.'admin/?page=service');
}


$cate = list_one_service($id);
$a = listAll('categories');
 
?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa  sản phẩm</h6>
    
  </div>
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên sản phẩm" required
            value="<?=$cate['name']?>">
        </div>
        <?php if($cate['image'] != '') :    ?>
          <img src="../images/<?=$cate['image']?>" width="120" alt="Chưa có ảnh hiển thị">
          <input type="hidden" name="image" value="<?=$cate['image']?>">
        <?php endif ?>
        <div class="form group">
        <div class="form group">
            <input type="file" name="image" id="" class="fomr-input-file border">
        </div>
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea name="description" class="form-control ckeditor" id="intro" cols="30" rows="5" ><?=$cate['description']  ?></textarea>
            
                <script>
                        CKEDITOR.replace( 'description' );
                </script>
        </div>
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá" required value="<?=$cate['price']?>">
        </div>
        <div class="form-group">
            <label for="name">Sale</label>
            <input type="text" name="sale" id="sale" class="form-control" placeholder="giảm giá" value="<?=$cate['sale']?>"> 

        <div class="form-group">
            <label for="name">View</label>
            <input type="text" name="view" id="view" class="form-control" placeholder="Lượt xem" value="<?=$cate['view']?>" >
        </div>

        <button type="submit" name="btnsua">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->