<?php
require_once "database.php";
// Đặt lịch
function list_all_datlich() {
    return listAll('dat_lich');
}
function insert_dat_lich($name,$phone,$ngay_dat,$created_at,$address, $dichvu,$nhanvien) {
    $created_at = date("Y-m-d");
    $data = [
        'name' =>$name,
        'phone' =>$phone,
        'ngay_dat' => $ngay_dat,
        'created_at' => $created_at,
        'address' => $address,
        'dichvu' =>$dichvu,
        'nhanvien' =>$nhanvien
    ];
    return insert('dat_lich', $data);
}

//Xóa dữ liệu
function delete_datlich($id){
    return delete('dat_lich','id', $id); 
}

?>