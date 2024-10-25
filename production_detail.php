<?php include 'view/header.php'; ?>
	<content>
		<div class="container">
			<div class="main-block col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
						    <th>Nhóm sản phẩm</th>
						</tr>
					</thead>
					<?php foreach ($categories as $category) { ?>
					<tr>
						<td><a href="?action=productions&id_nsp=<?php echo $category['IdNhomSP'];?>"><?php echo $category['TenNhomSP'];?></a></td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<div class="main-block col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<p class="title col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $products['TenSP'];?></p>
				<div class="categories-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="production-img col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img style="width:initial;max-width:100%;margin:20px 0;" src="images<?php echo $products['Hinh'];?>">
					</div>
					<div style="text-align:left;" class="production-detail col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<p style="font-size:20px;font-weight:bold;">Thông tin sản phẩm</p>
						<p>Bảo hành: <?php echo $products['BaoHanh'];?> tháng</p>
						<p>Hãng sản xuất: <?php echo $products['HangSX'];?></p>
						<p>Giá: $ <?php echo $products['Gia'];?></p>
						<p>Chi tiết:</p>
						<p><?php echo $products['ChiTiet'];?></p>
						<a style="float:left;margin-bottom:20px;"class="submit" href="?action=addcart&item=<?php echo $products['IdSP']; ?>">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		</div>
	</content>
<?php include 'view/footer.php'; ?>