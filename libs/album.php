<?php
require_once "database.php";
// lấy tất cả danh mục
function list_all_album(){
    return listAll('album');
}
// thêm dữ liệu vào bảng
function insert_album($image,$year) {
    $data = [
        'image' =>$image,
        'year' => $year
    ];
    return insert('album', $data);
}
// xóa
function delete_album($id,$value){
    return delete('album', $id, $value);
}
?>