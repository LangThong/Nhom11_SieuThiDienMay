<?php include 'view/header.php'; ?>
	<content>
		<div class="slide-block container">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  			<div class="carousel-inner" role="listbox">
	    			<div class="item active">
	      				<img class="img-responsive" src="images/featured/featured-1.jpg">
	    			</div>
	    			<div class="item">
						<img class="img-responsive" src="images/featured/featured-3.jpg">
	    			</div>
	  			</div>
	  			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    			<span class="sr-only">Previous</span>
	  			</a>
	  			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    			<span class="sr-only">Next</span>
	  			</a>
			</div>
		</div>
		<div class="main-block container">
			<p class="title col-lg-12 col-md-12 col-sm-12 col-xs-12">CÁC NHÓM SẢN PHẨM CHÍNH</p>
			<?php foreach ($categories as $category) { ?>
			<a class="categories-content col-lg-3 col-md-3 col-sm-6 col-xs-12" href="?action=productions&id_nsp=<?php echo $category['IdNhomSP'];?>">
				<img src="images<?php echo $category['HinhNSP']; ?>">
				<p class="categories-name"><?php echo $category['TenNhomSP']; ?></p>
				<p class="count">
					<?php 	get_soluong_sanpham($category['IdNhomSP']);
					?> products
				</p>
			</a>
			<?php } ?>
		</div>
		<div class="main-block container">
			<p class="title col-lg-12 col-md-12 col-sm-12 col-xs-12">CÁC SẢN PHẨM MỚI NHẤT</p>
			<?php foreach ($products as $product) { ?>
			<div class="categories-content col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="img-mini-content col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:100%;min-height: 250px;float:left;">
					<a href="?action=product_detail&id_nsp=<?php echo $product['IdNhomSP'];?>&id_sp=<?php echo $product['IdSP']; ?>">
						<img src="images<?php echo $product['Hinh']; ?>">
					</a>
				</div>
				<p class="categories-name"><?php echo $product['TenSP']; ?></p>
				<p class="price"><span>$<?php echo $product['Gia']; ?></span> - <span class="discount">$<?php echo $product['GiamGia']; ?></span></p>
				<a class="add-cart" href=""><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
			</div>
			<?php } ?>
		</div>
	</content>
<?php include 'view/footer.php'; ?>