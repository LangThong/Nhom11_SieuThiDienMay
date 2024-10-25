<?php
require('model/database.php');
require('model/nhomsp_db.php');
require('model/sanpham_db.php');
require('model/user_db.php');
require('model/cart_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];//exam: add product
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
if ($action == 'home') {
    $categories = get_nhomsp();
    $categories1 = get_nhomsp();
    $users = get_user();
    include('home.php');
}
if ($action == 'ql_sp') {
    $category_id = $_GET['category_id'];
    if ($category_id == '0') {
        $categories = get_nhomsp();
        $categories2 = get_nhomsp();
        $products = get_sanpham_all();
        $category_name = 'Tất cả';
        include('ql_sp.php');
    }   
    else {
        $hangsx = $_GET['hangsx'];
        if ($hangsx == '0'){
            $category_name = get_ten_nhomsp($category_id);
            $categories = get_nhomsp();
            $categories2 = get_nhomsp();
            $products = get_sanpham_theo_nhomsp($category_id);
            include('ql_sp.php');
        }
        else{
            $category_name = $hangsx;
            $categories = get_nhomsp();
            $categories2 = get_nhomsp();
            $products = get_sanpham_theo_hangsx($hangsx);
            include('ql_sp.php');
        }
    }
} else if ($action == 'del_nhomsp') {
    $category_id = $_POST['category_id'];
    delete_nhomsp($category_id);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'del_sp') {
    $id_sanpham = $_POST['id_sanpham'];
    delete_sanpham($id_sanpham);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'them_nhomsp') {
    $ten_nhomsp = $_POST['ten_nhomsp'];
    $hinh_nhomsp = $_POST['hinh_nhomsp'];
    them_nhomsp($ten_nhomsp, $hinh_nhomsp);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'them_sp') {
    $category_id = $_POST['category_id'];
    $ten_sp = $_POST['ten_sp'];
    $hangsx = $_POST['hangsx'];
    $hinh = $_POST['hinh'];
    $gia = $_POST['gia'];
    $chitiet = $_POST['chitiet'];
    $giamgia = $_POST['giamgia'];
    $baohanh = $_POST['baohanh'];
    add_sanpham($category_id, $ten_sp, $hangsx, $hinh, $gia, $chitiet, $giamgia, $baohanh);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'ql_hinhanh') {
    $hinh_nsp = get_hinh_nsp();
    $hinh_sp = get_hinh_sp();
    include('ql_hinhanh.php');
} else if ($action == 'del_img_nsp') {
    $img = $_POST['id_img'];
    unlink('../images/nhomsp/'.$img);
    $hinh_nsp = get_hinh_nsp();
    $hinh_sp = get_hinh_sp();
    include('ql_hinhanh.php');
} else if ($action == 'del_img_sp') {
    $img = $_POST['id_img'];
    unlink('../images/sanpham/'.$img);
    $hinh_nsp = get_hinh_nsp();
    $hinh_sp = get_hinh_sp();
    include('ql_hinhanh.php');
} else if ($action == 'edit_nsp'){
        $category_id = $_GET['category_id'];
        $category_name1 = get_ten_nhomsp($category_id);
        $category_img = get_hinh_nhomsp($category_id);
        $categories = get_nhomsp();
        $categories2 = get_nhomsp();
        $products = get_sanpham_all();
        $category_name = 'Tất cả';
        include('sua_nhomsp.php');
} else if ($action == 'edit_sp'){
        $product_id = $_GET['product_id'];
        $products = get_sanpham($product_id);
        $categories = get_nhomsp();
        $category_name = 'Tất cả';
        include('edit_sp.php');
} else if ($action == 'sua_sp') {
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $ten_sp = $_POST['ten_sp'];
    $hangsx = $_POST['hangsx'];
    $hinh = $_POST['hinh'];
    $gia = $_POST['gia'];
    $chitiet = $_POST['chitiet'];
    $giamgia = $_POST['giamgia'];
    $baohanh = $_POST['baohanh'];
    sua_sp($category_id, $ten_sp, $hangsx, $hinh, $gia, $chitiet, $giamgia, $baohanh, $product_id);
    header("Location: .?action=edit_sp&product_id=$product_id");
} else if ($action == 'sua_nhomsp') {
    $ten_nhomsp = $_POST['ten_nhomsp'];
    $hinh_nhomsp = $_POST['hinh_nhomsp'];
    $category_id = $_POST['category_id'];
    sua_nhomsp($ten_nhomsp, $hinh_nhomsp, $category_id);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'ql_user') {
    $id = $_GET['id'];
    if($id =='0'){
        $users = get_user();
        $breadcrumb = 'Tất cả';
        include('ql_user.php');
    }
    else{
        $users = get_user_theo_loai($id);
        $breadcrumb = get_loai_user($id);
        if($breadcrumb == '1'){
            $breadcrumb = 'Người dùng';
        }
        else{
            $breadcrumb = 'Quản trị viên';
        }
        include('ql_user.php');
    }

} else if ($action == 'del_user') {
    $id = $_POST['id'];
    delete_user($id);
    header("Location: .?action=ql_user&id=0");
} else if ($action == 'them_admin') {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    them_admin($user, $email, $pass);
    header("Location: .?action=ql_user&id=0");
} else if ($action == 'ql_cart') {
    $categories = get_cart();
    include('ql_cart.php');
} else if ($action == 'del_cart') {
    $id = $_POST['id'];
    delete_cart($id);
    header("Location: .?action=ql_cart");
} else if ($action == 'up_cart') {
    $cartid = $_POST['cartid'];
    $userid = $_POST['userid'];
    $chitiet = $_POST['chitiet'];
    $trangthai = $_POST['trangthai'];
    $giatien = $_POST['giatien'];
    $date = $_POST['date'];
    $Phone = $_POST['Phone'];
    $shipping_address = $_POST['shipping_address'];
    up_cart($userid, $chitiet, $giatien, $trangthai, $date, $cartid,$Phone,$shipping_address);
    header("Location: .?action=ql_cart");
}
?>