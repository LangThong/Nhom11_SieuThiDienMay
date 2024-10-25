<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;">
			<div class="tittle">
				<h3>Sửa đổi thông tin sản phẩm</h3>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mini-content">
					<div class="main-mini-content">
						<form class="form-horizontal" method="post">
							<input type="hidden" name="action" value="sua_sp">
							<input type="hidden" name="product_id" value="<?php echo $products['IdSP']; ?>">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div style="width:100%;float:left;text-align:center;margin-bottom:20px;">
									<img style="max-width:100%;" src="../images<?php echo $products['Hinh']; ?>">
								</div>
								<div class="form-group">
									<label for="hinh" class="col-sm-3 control-label">URL</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="hinh" name="hinh" value="<?php echo $products['Hinh']; ?>">
								    </div>
								</div>	
								<div class="form-group">
									<label for="ten_sp" class="col-sm-3 control-label">Tên sản phẩm</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="ten_sp" name="ten_sp" value="<?php echo $products['TenSP']; ?>">
								    </div>
								</div>
								<div class="form-group">
									<label for="ten_sp" class="col-sm-12 control-label">Chi tiết sản phẩm</label>
								    <div class="col-sm-12" style="margin-top:20px;">
								      <?php echo $products['ChiTiet']; ?>
								    </div>
								</div>	
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="title">
									<h2><?php echo $products['TenSP']; ?></h2>
								</div>
								<div class="form-group">
									<label for="category_id" class="col-sm-3 control-label">Loại sản phẩm</label>
								    <div class="col-sm-9">
									    <select class="form-control" name="category_id"> 
								            <option value="<?php echo $products['IdNhomSP']; ?>">--Chọn nhóm --</option>
								            <?php foreach ($categories as $category) : ?> 
								                <option value="<?php echo $category['IdNhomSP']; ?>"> 
								                    <?php echo $category['TenNhomSP']; ?> 
								           		</option> 
							           		 <?php endforeach; ?> 
							        	</select>
								    </div>
								</div>
								<div class="form-group">
									<label for="hangsx" class="col-sm-3 control-label">Hãng sản xuất</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="hangsx" name="hangsx" value="<?php echo $products['HangSX']; ?>">
								    </div>
								</div>
								<div class="form-group">
									<label for="baohanh" class="col-sm-3 control-label">Thời hạn bảo hành</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="baohanh" name="baohanh" value="<?php echo $products['BaoHanh']; ?>">
								    </div>
								</div>
								<div class="form-group">
									<label for="gia" class="col-sm-3 control-label">Giá bán</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="gia" name="gia" value="<?php echo $products['Gia']; ?>">
								    </div>
								</div>
								<div class="form-group">
									<label for="giamgia" class="col-sm-3 control-label">Giá khuyến mãi</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="giamgia" name="giamgia" value="<?php echo $products['GiamGia']; ?>">
								    </div>
								</div>
								<div class="form-group">
									<label for="chitiet" class="col-sm-3 control-label">Chi tiết sản phẩm</label>
								    <div class="col-sm-12" style="margin-top:20px;">
								    <textarea id="chitiet" name="chitiet"><?php echo $products['ChiTiet']; ?></textarea>
								    </div>
									<script type="text/javascript">CKEDITOR.replace( 'chitiet' );</script>
								</div>
								<div class="form-group" style="margin-top:50px;">
									<div class="col-sm-offset-10 col-sm-2">
								      <button type="submit" class="btn btn-default">Thay đổi</button>
								    </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</content>
</body>
</html>