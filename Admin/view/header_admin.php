<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang Quản lý</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/dropzone.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/dropzone.js"></script>
	<script src="../js/table.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styles_admin.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script>
		$(document).ready(function(){
    		$('#sp_datatable').DataTable();
		});
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
	</script>
</head>
<body>
	<content style="background-color:#2A3F54;width:100%;float:left;min-height:100%;">
		<div class="left-col col-lg-2 col-md-3 col-sm-3 col-xs-12" style="color:#E7E7E7;">
			<div class="user" style="width:100%;text-align:center;float:left">
				<div class="logo">
					<center><img src="image/admin.png" height="70" alt=""></center>
					<?php 
					if ($_SESSION["Loai"]==2) {
					echo"<p>Xin chào,".$_SESSION['Username']. "</p>
					<p><a href='logout.php'>Logout</a></p>";
				}
					else{
						header("location:../index.php");
						exit();
					}
					?>
				</div>
			</div>
			<div class="rightnav" style="width:100%;text-align:left;float:left;">
				<table class="table table-hover">
					<thead>
						<tr>
						    <th colspan="2" style="text-align:center;">MENU</th>
						</tr>
					</thead>
					<tr>
						<td style="width:10px;"><i class="fa fa-home"></i></td>
						<td><a href="?action=home">Thống kê</td>
					</tr>
					<tr>
						<td style="width:10px;"><i class="fa fa-user"></i></td>
						<td><a href="?action=ql_user&id=0">Quản lý người dùng</td>
					</tr>
					<tr>
						<td style="width:10px;"><i class="fa fa-shopping-cart"></i></td>
						<td><a href="?action=ql_cart">Quản lý đơn hàng</td>
					</tr>
					<tr>
						<td style="width:10px;"><i class="fa fa-picture-o"></i></td>
						<td><a href="?action=ql_hinhanh">Quản lý hình ảnh</td>
					</tr>
					<tr>
						<td style="width:10px;"><i class="fa fa-list-alt"></i></td>
						<td><a href="?action=ql_sp&category_id=0">Quản lý sản phẩm</td>
					</tr>
				</table>
			</div>
		</div>