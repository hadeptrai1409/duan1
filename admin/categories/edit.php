
<?php
require_once "../libs/categories.php";
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

  updated_category($name,$image,$id);

  if($okupload == true){
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.$image);
  }

  header("location:".ROOT.'admin/?page=category');
}


$cate = list_one_category($id);

 
?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục sản phẩm</h6>
    
  </div>
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục" 
            required value="<?=$cate['name']?>">
        </div>
        <?php if($cate['image'] != '') :    ?>
          <img src="../images/<?=$cate['image']?>" width="120" alt="Chưa có ảnh hiển thị">
          <input type="hidden" name="anh" value="<?=$cate['image']?>">
        <?php endif ?>
        <div class="form group">
            <input type="file" name="image" id="" class="fomr-input-file border">
        </div>
        <!-- <input type="hidden" name="id" value="<?=$cate['image']?>"> -->
        <button type="submit" name="btnsua">Ghi Lại</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->