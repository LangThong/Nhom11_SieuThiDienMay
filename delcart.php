<?php

session_start();
$cart = $_SESSION['cart'];
$id = $_GET['item'];
if ($id == 0) {
    unset($_SESSION['cart']);
    header("Location: .?action=home");
} else {
    unset($_SESSION['cart'][$id]);
    header("Location: .?action=view_cart");
}
exit();
?>