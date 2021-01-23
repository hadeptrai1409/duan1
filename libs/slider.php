<?php
require_once "database.php";
// lấy tất cả danh mục
function list_all_slider(){
    return listAll('slider');
}
// thêm dữ liệu vào bảng
function insert_slider($image) {
    $data = [
        'image' =>$image
    ];
    return insert('slider', $data);
}
// xóa
function delete_slider($id,$value){
    return delete('slider', $id, $value);
}
?>