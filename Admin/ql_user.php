<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;min-height:920px;">
			<div class="tittle">
				<h3>Quản lý user</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Danh sách người dùng >> <?php echo $breadcrumb; ?></h2>
					</div>
					<div class="main-mini-content">
						<table class="table table-striped" id="center-content">
							<thead>
								<tr>
									<th style="width:50px;">&nbsp</th>
								    <th>Tên người dùng</th>
								    <th>Email</th>
								    <th>Cấp độ</th>
								</tr>
							</thead>
							<?php foreach ($users as $user) : ?>
								<tr>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="del_user">
											<label for="user_<?php echo $user['IdUser']; ?>" class="btn"><i class="fa fa-window-close"></i></label>
	    									<input id="user_<?php echo $user['IdUser']; ?>" type="submit" name="id" value="<?php echo $user['IdUser']; ?>" class="hidden" />
										</form>
									</td>
									<td>
										<p><?php echo $user['Username']; ?></p>
									</td>
									<td>
										<p><?php echo $user['Email']; ?></p>
									</td>
									<td>
										<p>
											<?php
												if ($user['Loai'] == 1){
													echo '<a href="?action=ql_user&id='.$user['Loai'].'">Người dùng</a>';
												}
												else{
													echo '<a href="?action=ql_user&id='.$user['Loai'].'">Quản trị viên</a>';
												}
											?>
										</p>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Thêm quản trị viên</h2>
					</div>
					<div class="main-mini-content">
						<form class="form-group" method="post">
							<input type="hidden" name="action" value="them_admin">
							<div class="form-group">
								<label for="exampleInputName2">Nhập tên</label>
								<input type="text" class="form-control" name="user" placeholder="Nhập tên">
							</div>
							<div class="form-group">
							    <label for="exampleInputEmail2">Mật khẩu</label>
							    <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
							</div>
							<div class="form-group">
							    <label for="exampleInputEmail2">Email</label>
							    <input type="email" class="form-control" name="email" placeholder="Email">
							</div>
	  						<button type="submit" class="btn btn-primary">Thêm</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</content>
</body>
</html>