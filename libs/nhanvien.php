<?php
require_once "database.php";

// Hàm lấy ra toàn bộ danh mục (user)
function list_all_nhanvien() { 
    return listAll('nhanvien');
}

// Hàm lấy ra 1 bản ghi (dòng)
function list_one_nhanvien($value) {
    return listOne('nhanvien','id', $value);
}



// thêm dữ liệu vào bảng 
function insert_nhanvien($fullname, $address, $ngay_sinh,$ngay_lam, $luong, $gender) {
    $created_at = date("Y-m-d");
    $data = [
        'fullname' => $fullname,
        'address' => $address,
        'ngay_sinh' => $ngay_sinh,
        'ngay_lam' =>$ngay_lam,
        'luong' =>$luong,
        'gender' => $gender
    ];
    return insert('nhanvien', $data);
}

// Sửa dữ liệu trên một bảng 
function updated_nhanvien($fullname, $address, $ngay_sinh,$ngay_lam, $luong, $gender, $id){
    $updated_at = date("Y-m-d");
    $data = [ 
        'fullname' => $fullname,
        'address' => $address,
        'ngay_sinh' => $ngay_sinh,
        'ngay_lam' =>$ngay_lam,
        'luong' =>$luong,
        'gender' => $gender
    ];
    return update('nhanvien', $data,'id',$id );
   
}


// Xóa dữ liệu
function delete_nhanvien($id, $value){
    return delete('nhanvien', $id, $value);
}




?>