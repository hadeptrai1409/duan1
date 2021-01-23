<?php
require_once "database.php";

// Hàm lấy ra toàn bộ danh mục (user)
function list_all_user() { 
    return listAll('user');
}

// Hàm lấy ra 1 bản ghi (dòng)
function list_one_user($value) {
    return listOne('user','id', $value);
}


// Hàm login 
function login($value) {
    return listOne('user' , 'username' , $value);
}
// Hàm registration 
function registration($fullname, $username, $email, $password) {
    $data = [
        'fullname' =>$fullname,
        'username' =>$username,
        'email'    =>$email,
        'password' =>password_hash("$password", PASSWORD_DEFAULT),
    ];
    return insert('user', $data ); 
}
// thêm dữ liệu vào bảng 
function insert_user($fullname, $username, $email, $password, $role, $address, $phone, $gender) {
    $created_at = date("Y-m-d");
    $data = [
        'fullname' => $fullname,
        'username' =>$username,
        'email' => $email,
        'password' =>$password,
        'role' => $role,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender,
        'created_at' =>$created_at,
        'updated_at' =>$created_at
    ];
    return insert('user', $data);
}

// Sửa dữ liệu trên một bảng 
function updated_user($fullname, $username, $email, $password, $role, $address, $phone, $gender, $id){
    $updated_at = date("Y-m-d");
    $data = [ 
        'fullname' => $fullname,
        'username' =>$username,
        'email' => $email,
        'password' =>$password,
        'role' => $role,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender,
        'updated_at' =>$updated_at
    ];
    return update('user', $data,'id',$id );
   
}


// Xóa dữ liệu
function delete_user($id, $value){
    return delete('user', $id, $value);
}

// Kiểm tra user khi login

function check_user($username) {
// Điều kiện theo username
$sql = "SELECT * FROM user WHERE username='$username'";
$user = query($sql);
if(count($user) > 0){
    return $user[0];
}
return false;
}


?>