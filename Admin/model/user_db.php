<?php 
function them_admin($user, $email, $pass){
    global $db;
    $query = "INSERT INTO user (Username, Email, Matkhau, Loai)"
            . "VALUES ('$user', '$email', '$pass', '2')";
    $db->exec($query);
}
function get_user() {
    global $db;
    $query = "SELECT * FROM user ORDER BY Loai";
    $username = $db->query($query);
    return $username;
}
function get_id_user($username) {
    global $db;
    $query = "SELECT * FROM user WHERE Username = '$username'";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['IdUser'];
    return $category_name;
}
function delete_user($id) {
    global $db;
    $query = "DELETE FROM user WHERE IdUser = '$id'";
    $db->exec($query);
}
function get_user_theo_loai($id) {
    global $db;
    $query = "SELECT * FROM user WHERE Loai = " . $id;
    $product = $db->query($query);
    return $product;
}
function get_loai_user($id) {
    global $db;
    $query = "SELECT * FROM user WHERE Loai = $id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['Loai'];
    return $category_name;
}
function get_ten_user($category_id) {
    global $db;
    $query = "SELECT * FROM user WHERE IdUser = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['Username'];
    return $category_name;
}
function get_email_user($category_id) {
    global $db;
    $query = "SELECT * FROM user WHERE IdUser = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['Email'];
    return $category_name;
}
function get_soluong_user($id) {
    global $db;
    $query = "SELECT count(*) from user WHERE user.Loai = '$id'";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}
 ?>