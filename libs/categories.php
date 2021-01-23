<?php
require_once "database.php";

// Hàm lấy ra toàn bộ danh mục (categories)
function list_all_category() {
    return listAll('categories');
}

// Hàm lấy ra 1 bản ghi (dòng)
function list_one_category($value) {
    return listOne('categories', 'id', $value);
}

// thêm dữ liệu vào bảng 
function insert_category($name, $image) {
    $created_at = date("Y-m-d");
    $data = [
        'name' =>$name,
        'image' =>$image,
        'created_at' =>$created_at,
        'updated_at' =>$created_at
    ];
    return insert('categories', $data);
}

// Sửa dữ liệu trên một bảng 
function updated_category($name, $image,$id){ 
    $update_at = date("Y-m-d");
    $data = [ 
        'name' =>$name,
        'image' =>$image,
        'updated_at' =>$update_at
    ];
    return update('categories', $data,'id',$id );
   
}

// Xóa dữ liệu
function delete_category($id,$value){
    return delete('categories', $id, $value);
}

?>