<?php

//Get categories
function get_cart() {
    global $db;
    $query = 'SELECT * FROM cart';
    $result = $db->query($query);
    return $result;
}

function them_cart($userid, $chitiet, $giatien, $trangthai, $date,$Phone,$shipping_address) {
    global $db;
    $query = "INSERT INTO `cart` (`IdCart`, `IdUser`, `ChiTiet`, `GiaTien`, `TrangThai`, `ThoiGian`,`Phone`,`shipping_address`) VALUES (NULL, '$userid', '$chitiet', '$giatien', '$trangthai', '$date', '$Phone', '$shipping_address')";
    $db->exec($query);
}
function delete_cart($id) {
    global $db;
    $query = "DELETE FROM cart WHERE IdCart = '$id'";
    $db->exec($query);
}
function up_cart($userid, $chitiet, $giatien, $trangthai, $date, $cartid,$Phone,$shipping_address){
    global $db;
    $query = "UPDATE `cart` SET `IdUser` = '$userid', `ChiTiet` = '$chitiet', `GiaTien` = '$giatien', `TrangThai` = '$trangthai', `ThoiGian` = '$date', `Phone` = '$Phone', `shipping_address` = '$shipping_address'  WHERE `cart`.`IdCart` = '$cartid'";
    $db->exec($query);
}
?>