<?php

function connection() {
    try{
        $conn = new PDO("mysql:host=localhost; dbname=duan1; charset=utf8", "root", "");
    }catch(PDOException $e){
        echo "Failed" . $e->getMessage();
    }
    return $conn;
}
// lấy toàn bộ dữ liệu bảng $table
function listAll($table){
$conn = connection();
try{ 
$sql = "SELECT * FROM $table ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
echo "Lỗi xử lý dữ liệu" . $e->getMessage();
}finally{
    unset ($conn);
}
return $result;
}


// hàm lấy 1 dòng dữ liệu (1 bản ghi) trong hàng
// theo điều kiện id ($id) và giá trị của nó ($value)
function listOne($table, $id, $value){
$conn = connection();
try{
$sql = "SELECT * FROM $table WHERE $id=:$id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":$id", $value);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
echo "lỗi không thể lấy dữ liệu" . $e->getMessage();
}finally{
    unset($conn);
}
return $result;
}


// hàm thêm vào 1 dòng dữ liệu trong bảng $table
// dữ liệu là một bảng $data bao gồm có key và value
function insert($table, $data=array()) {
    $conn = connection();
    try{ 
        $sql = "INSERT INTO $table SET " ;
        foreach ($data as $key => $value){
            $sql .= "$key=:$key , " ; 
        }
        $sql = rtrim($sql, ", "); 
        $stmt = $conn->prepare($sql); 
        $stmt->execute($data); 
    }catch(PDOException $e){ 
echo "lỗi dữ liệu" . $e->getMessage();
}finally{
    unset($conn);
}

}

// hàm cập nhật dữ liệu trong bảng $table
// dữ liệu được cập là một mảng $data
// Có điều cập nhật theo id
function update($table, $data = array(), $id, $value_id){
$conn = connection();
try{ 
    $sql = " UPDATE $table  SET ";
    foreach ($data as $key => $value) {
        $sql .= "$key=:$key, ";
    }
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE $id=:$id";
    $data[$id] = $value_id; // thêm key là id vào mảng data
    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute($data);

}catch(PDOException $e){
echo "lỗi dữ liệu" . $e->getMessage();
}finally {
unset($conn);
}
return $result;
}

// update pass

// hàm xóa dữ liệu với bảng $table
// có điều kiện là id với giá trị $value
function delete($table, $id, $value_id){ 
    $conn = connection();
    try{ 
        $sql = "DELETE FROM $table WHERE $id=:$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$id", $value_id);
        $result = $stmt->execute();
        
    }catch(PDOException $e){
    echo "lỗi dữ liệu" . $e->getMessage();
    }finally {
    unset($conn);
    }
}

// phương thức thực thi câu lệnh sql select
// trả về giá trị bản ghhi lấy được

function query($sql) {
    $conn = connection();
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch(PDOException $e){
        echo "Lỗi dữ liệu" . $e->getMessage();
    }finally{
        unset($conn);
    }
}

// Phương thức thực thi câu lệnh có điều kiện 
function query_where($table, $arr) {
    $conn = connection();
    try{
        $sql = "SELECT * FROM $table WHERE $arr[0] $arr[1] :$arr[0]";
        $stmt = $conn->prepare($sql);
        $data = [
            $arr[0] => $arr[1]
        ]; 
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch(PDOException $e){
        echo "Lỗi dữ liệu" . $e->getMessage();
    }finally{
        unset($conn);
    }
}

// Lấy ra chi tiết danh mục
function detail_categori() {
    $conn = connection();
    try{
        $sql = "SELECT pro.id as id, pro.cate_id, pro.name, detail,description,pro.image,price,sale,status 
    FROM categories as cate INNER JOIN products as pro ON cate.id=pro.cate_id
    WHERE cate.id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch(PDOException $e){
        echo "Lỗi dữ liệu" . $e->getMessage();
    }finally{
        unset($conn);
    }
}

?>