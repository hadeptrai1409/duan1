<?php
require_once "database.php";
// Hàm lấy ra toàn bộ sản phẩm (products)
function list_all_service() {
    return listAll('service');
}

// Hàm lấy ra 1 bản ghi (dòng)
function list_one_service($value) {
    return listOne('service','id', $value);
}
function list_alll_service($value) {
    return listAll('service','id', $value);
}
// thêm dữ liệu vào bảng 
function insert_service($cate_id,$name,$image,$description,$price,$sale,$view) {
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
        'updated_at' =>$created_at
    ];
    return insert('service', $data);
}

// Sửa dữ liệu trên một bảng 
function updated_service($cate_id,$name,$image,$description,$price,$sale,$view,$id){
    $updated_at = date("Y-m-d");
    $data = [
        'cate_id' => $cate_id,
        'name' =>$name,
        'image' =>$image,
        'description' =>$description,
        'price' => $price,
        'sale' => $sale,
        'view' => $view
        
    ];
    return update('service', $data, 'id', $id);
}

//Xóa dữ liệu
function delete_service($id){
    return delete('service','id', $id); 
}

function search_service($name) {
    $sql = "SELECT p.id as id_service, 
    p.name as name_service, 
    p.image as image_service,  
   price, sale, view, id_dichvu

   FROM service  p INNER JOIN categories c ON p.cate_id=c.id WHERE p.name LIKE '%$name%'";

   return query($sql);
}


// Hiển thị danh sách sản phẩm có hạn chế
function list_limit_service($count) {
$sql = "SELECT * FROM service ORDER BY id DESC LIMIT 0,3 ";
return query($sql); 
}
// Hiển thị danh sách sản phẩm có hạn chế
function list_limit_service_two() {
    $sql = "SELECT * FROM album WHERE year LIKE '%2020%' ORDER BY id DESC LIMIT 0,4 ";
    return query($sql);  
    } 

// Hiển thị danh sách sản phẩm có hạn chế
function list_limit_service_three() {
    $sql = "SELECT * FROM album WHERE year LIKE '%2019%' ORDER BY id DESC LIMIT 0,4 ";
    return query($sql);  
    } 
// Sản phẩm giảm giá
function list_sale_product() {
    $arr = ['sale' , '>' , 0];
    return query_where('products', $arr);
}

// Chi tiết sản phẩm
function product_detail($id){
$sql = "SELECT * FROM products WHERE id=:id";
}

// Chi tiết danh mục
function categories_detail($id_cate) {
    $sql = "SELECT * FROM products WHERE cate_id = $id_cate ORDER BY id DESC";
    return query($sql);
}
// Hàm cập nhật lượng view(số lượng lượt xem bài)
function update_views_product($id) {
    $sql = "UPDATE products SET view=view+1 WHERE id=$id";
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 
}
// Phân trang 

?>