<?php include 'view/header.php'; ?>
	<content>
		<div class="container">
			<div class="main-block col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
			<div class="main-block col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<p class="title col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $breadcrumb;?></p>
				<?php foreach ($products as $product) { ?>
				<div class="categories-content col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height:315px;">
					<div class="img-mini-content col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:100%;height:200px;float:left;">
						<a href="?action=product_detail&id_nsp=<?php echo $product['IdNhomSP'];?>&id_sp=<?php echo $product['IdSP']; ?>">
							<img src="images<?php echo $product['Hinh']; ?>">
						</a>
					</div>
					<p class="categories-name" style="width:100%;height:42px;float:left;"><?php echo $product['TenSP']; ?></p>
					<p class="price"><span>$<?php echo $product['Gia']; ?></span> - <span class="discount">$<?php echo $product['GiamGia']; ?></span></p>
					<a class="add-cart" href="?action=addcart&item=<?php echo $product['IdSP']; ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
				</div>
				<?php } ?>
			</div>
		</div>
	</content>
<?php include 'view/footer.php'; ?>