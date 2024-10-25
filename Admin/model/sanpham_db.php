<?php
function get_sanpham_theo_nhomsp($category_id) {
    global $db;
    $query = "SELECT * FROM sanpham WHERE sanpham.IdNhomSP = '$category_id' ORDER BY IdSP";
    $products = $db->query($query);
    return $products;
}

function get_soluong_sanpham($category_id) {
    global $db;
    $query = "SELECT count(*) from sanpham WHERE sanpham.IdNhomSP = '$category_id'";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}

function get_sanpham_12_new() {
    global $db;
    $query = "SELECT * FROM sanpham ORDER BY IdSP DESC LIMIT 12";
    $product = $db->query($query);
    return $product;
}

function get_sanpham_all() {
    global $db;
    $query = "SELECT * FROM sanpham";
    $product = $db->query($query);
    return $product;
}

function get_sanpham($id_sanpham) {
    global $db;
    $query = "SELECT * FROM sanpham WHERE IdSP = " . $id_sanpham;
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

function get_sanpham_theo_hangsx($hangsx) {
    global $db;
    $query = "SELECT * FROM sanpham WHERE HangSX = '$hangsx'";
    $product = $db->query($query);
    return $product;
}

function delete_sanpham($id_sanpham) {
    global $db;
    $query = "DELETE FROM sanpham WHERE IdSP = '$id_sanpham'";
    $db->exec($query);
}

function add_sanpham($category_id, $ten_sp, $hangsx, $hinh, $gia, $chitiet, $giamgia, $baohanh) {
    global $db;
    $query = "INSERT INTO sanpham (IdNhomSP, TenSP, HangSX, Hinh, Gia, ChiTiet, GiamGia, BaoHanh) "
            . "VALUES ('$category_id', '$ten_sp', '$hangsx', '$hinh', '$gia', '$chitiet', '$giamgia', '$baohanh')";
    $db->exec($query);
}
function sua_sp($category_id, $ten_sp, $hangsx, $hinh, $gia, $chitiet, $giamgia, $baohanh, $id_sanpham){
    global $db;
    $query = "UPDATE `sanpham` SET `IdNhomSP` = '$category_id', `TenSP` = '$ten_sp', `HangSX` = '$hangsx', `Hinh` = '$hinh', `Gia` = '$gia', `ChiTiet` = '$chitiet', `GiamGia` = '$giamgia', `BaoHanh` = '$baohanh' WHERE `sanpham`.`IdSP` = '$id_sanpham'";
    $db->exec($query);
}
function get_hinh_sp(){
    $path= getcwd();
    $img_path = dirname($path).'/images/sanpham';
    $items= scandir($img_path);
    $files= array();
    foreach ($items as $item){
        $item_path= $img_path.DIRECTORY_SEPARATOR.$item;
        if(is_file($item_path)){
        $files[]= $item;}
        }
    return $files;
}
?>