<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;min-height:920px;">
			<div class="tittle">
				<h3>Quản lý đơn hàng</h3>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Danh sách đơn hàng</h2>
					</div>
					<div class="main-mini-content">
						<table class="table table-striped" id="center-content">
							<thead>
								<tr>
									<th style="width:50px;">&nbsp</th>
								    <th>Tên khách hàng</th>
								    <th>Email</th>
								    <th>Chi tiết</th>
								    <th>Tổng tiền</th>
								    <th>Thời gian</th>
								    <th>Trạng thái</th>
								    <th style="width:50px;">&nbsp</th>
								</tr>
							</thead>
							<?php foreach ($categories as $category) : ?>
								<tr>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="del_cart">
											<label for="cart_<?php echo $category['IdCart']; ?>" class="btn"><i class="fa fa-window-close"></i></label>
	    									<input id="cart_<?php echo $category['IdCart']; ?>" type="submit" name="id" value="<?php echo $category['IdCart']; ?>" class="hidden" />
										</form>
									</td>
									<td>
										<p><?php echo get_ten_user($category['IdUser']); ?></p>
									</td>
									<td>
										<p><?php echo get_email_user($category['IdUser']); ?></p>
									</td>
									<td>
										<p><?php echo $category['ChiTiet']; ?></p>
									</td>
									<td>
										<p><?php echo number_format($category['GiaTien']); ?></p>
									</td>
									<td>
										<p><?php echo $category['ThoiGian']; ?></p>
									</td>
									<td>
										<p><?php echo $category['TrangThai']; ?></p>
									</td>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="up_cart">
											<input type="hidden" name="cartid" value="<?php echo $category['IdCart'];?>">
											<input type="hidden" name="userid" value="<?php echo $category['IdUser'];?>">
											<input type="hidden" name="chitiet" value="<?php echo $category['ChiTiet'];?>">
											<input type="hidden" name="giatien" value="<?php echo $category['GiaTien'];?>">
											<input type="hidden" name="date" value="<?php echo $category['ThoiGian'];?>">
											<?php
												if($category['TrangThai'] == 'Chưa thanh toán'){
													echo "<input type='hidden' name='trangthai' value='Đã thanh toán'>";
												}
												else{
													echo "<input type='hidden' name='trangthai' value='Chưa thanh toán'>";
												}
											 ?>
											<label for="up_cart<?php echo $category['IdCart']; ?>" data-toggle='tooltip' data-placement='bottom' title='Thay đổi trạng thái giỏ hàng' class="btn"><i class="fa fa-pencil-square-o"></i></label>
	    									<input id="up_cart<?php echo $category['IdCart']; ?>" type="submit" class="hidden"/>
										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</content>
</body>
</html>