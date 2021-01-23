<?php
require_once "database.php";
// Hàm lấy ra toàn bộ sản phẩm (products)
function list_all_comment() {
    return listAll('comment');
}

// Hàm lấy ra 1 bản ghi (dòng)
function list_one_comment($value) {
    return listOne('comment','id', $value);
}
function list_alll_comment($value) {
    return listAll('comment','id', $value);
}
// thêm dữ liệu vào bảng 
function insert_comment($cate_id,$name,$image,$description,$price,$sale,$view,$id_dichvu) {
    $created_at = date("Y-m-d");
    $data = [
        'cate_id' => $cate_id,
        'name' =>$name,
        'image' =>$image,
        'description' =>$description,
        'price' => $price,
        'sale' => $sale,
        'view' => $view,
        'created_at' =>$created_at,
        'updated_at' =>$created_at,
        'id_dichvu' => $id_dichvu
    ];
    return insert('comment', $data);
}

// Sửa dữ liệu trên một bảng 
function updated_comment($cate_id,$name,$image,$description,$price,$sale,$view,$id_dichvu,$id){
    $updated_at = date("Y-m-d");
    $data = [
        'cate_id' => $cate_id,
        'name' =>$name,
        'image' =>$image,
        'description' =>$description,
        'price' => $price,
        'sale' => $sale,
        'view' => $view,
        'id_dichvu' => $id_dichvu
        
    ];
    return update('comment', $data, 'id', $id);
}

//Xóa dữ liệu
function delete_comment($id){
    return delete('comment','id', $id); 
}

function search_comment($name) {
    $sql = "SELECT p.id as id_product, 
    p.name as name_product, 
    p.image as image_product,  
   status, 
   price 
   FROM products  p INNER JOIN categories c ON p.cate_id=c.id WHERE p.name LIKE '%$name%'";

   return query($sql);
}



// Hàm cập nhật lượng view(số lượng lượt xem bài)
// function update_views_product($id) {
//     $sql = "UPDATE products SET view=view+1 WHERE id=$id";
//     $conn = connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute(); 
// }
// Phân trang 

?>