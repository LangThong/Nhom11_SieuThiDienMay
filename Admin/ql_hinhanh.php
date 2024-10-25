<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;min-height:100%;">
			<div class="tittle">
				<h3>Quản lý hình ảnh</h3>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<div class="mini-content">
					<div class="title">
						<h2>Hình ảnh các nhóm sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<?php foreach ($hinh_nsp as $file) { ?>
							<div class="img-mini-content col-lg-3 col-md-6 col-sm-6 col-xs-12" style="min-height: 150px;border:1px solid #E6E9ED">
								<img data-toggle="modal" class="img-exm bs-example-modal-lg" data-target="#<?php echo substr($file,0,-4); ?>" src="../images/nhomsp/<?php echo $file; ?>">
								<div class="modal fade bs-example-modal-lg"  id="<?php echo substr($file,0,-4); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											    <h4 class="modal-title" id="myModalLabel">/nhomsp/<?php echo $file; ?></h4>
											</div>
											<div class="modal-body" style="text-align:center;">
												<img style="max-width:100%;" src="../images/nhomsp/<?php echo $file; ?>">
										    </div>
											<div class="modal-footer">
												<form method="post">
													<input type="hidden" name="action" value="del_img_nsp">
													<label for="<?php echo $file; ?>" class="btn"><i class="fa fa-trash-o"></i></label>
			    									<input id="<?php echo $file; ?>" type="submit" name="id_img" value="<?php echo $file; ?>" class="hidden" />
												</form>
										    </div>
										</div>
									</div>
								</div>
							</div>		
						<?php } ?>
					</div>
				</div>
				<div class="mini-content">
					<div class="title">
						<h2>Hình ảnh các sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<?php foreach ($hinh_sp as $file) { ?>
							<div class="img-mini-content col-lg-3 col-md-6 col-sm-6 col-xs-12" style="min-height: 150px;border:1px solid #E6E9ED">
								<img data-toggle="modal" class="img-exm bs-example-modal-lg" data-target="#<?php echo substr($file,0,-4); ?>" src="../images/sanpham/<?php echo $file; ?>">
								<div class="modal fade bs-example-modal-lg"  id="<?php echo substr($file,0,-4); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											    <h4 class="modal-title" id="myModalLabel">/sanpham/<?php echo $file; ?></h4>
											</div>
											<div class="modal-body" style="text-align:center;">
												<img style="max-width:100%;" src="../images/sanpham/<?php echo $file; ?>">
										    </div>
										    <div class="modal-footer">
										    	<form method="post">
													<input type="hidden" name="action" value="del_img_sp">
													<label for="<?php echo $file; ?>" class="btn"><i class="fa fa-trash-o"></i></label>
			    									<input id="<?php echo $file; ?>" type="submit" name="id_img" value="<?php echo $file; ?>" class="hidden" />
												</form>
										    </div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="mini-content">
					<div class="title">
						<h2>Thêm hình ảnh nhóm sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<form action="upload_nsp.php" class="dropzone">
							<div class="dz-default dz-message">
								<span>Drop files here to upload</span>
							</div>
						</form>
					</div>
				</div>
				<div class="mini-content">
					<div class="title">
						<h2>Thêm hình ảnh sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<form action="upload_sp.php" class="dropzone">
							<div class="dz-default dz-message">
								<span>Drop files here to upload</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</content>
</body>
</html>