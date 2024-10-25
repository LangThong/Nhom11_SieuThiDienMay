<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;min-height:920px;">
			<div class="tittle">
				<h3>Dashboard</h3>
			</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="mini-content">
						<div class="title">
							<h2>Thống kê sản phẩm</h2>
						</div>
						<div class="main-mini-content">
							<table class="table table-striped" id="center-content">
								<thead>
									<tr>
									    <th>Nhóm sản phẩm</th>
									    <th>Hình ảnh</th>
										<th>Số lượng</th>
									</tr>
								</thead>
								<?php foreach ($categories as $category) : ?>
									<tr>
										<td>
											<a href="?action=ql_sp&category_id=<?php echo $category['IdNhomSP']; ?>&hangsx=0"><?php echo $category['TenNhomSP']; ?></a>
										</td>
										<td>
											<img style="width:100px;" src="../images<?php echo $category['HinhNSP']; ?>">
										</td>
										<td>
											<p></p><?php 	get_soluong_sanpham($category['IdNhomSP']);?> sản phẩm
										</td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="title">
							<h2>Tỷ lệ %</h2>
						</div>
						<div class="main-mini-content">
							<script type="text/javascript">
						      google.charts.load('current', {'packages':['corechart']});
						      google.charts.setOnLoadCallback(drawChart);
						      function drawChart() {
						        var data = new google.visualization.DataTable();
						        data.addColumn('string', 'Topping');
						        data.addColumn('number', 'Sản phẩm');
						        data.addRows([
						        	<?php foreach ($categories1 as $category) : ?>
						          ['<?php echo $category['TenNhomSP'];?>', <?php 	get_soluong_sanpham($category['IdNhomSP']);?>],
						          <?php endforeach; ?>
						        ]);
						        var options = {'width':0,
						                       'height':350,
						                   is3D: true};
						        var chart = new google.visualization.PieChart (document.getElementById('chart_sp'));
						        chart.draw(data, options);
						      }
						    </script>
							<div id="chart_sp">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="mini-content">
						<div class="title">
							<h2>Thống kê người dùng</h2>
						</div>
						<div class="main-mini-content">
							<table class="table table-striped" id="center-content">
								<thead>
									<tr>
									    <th>Cấp độ</th>
										<th>Số lượng</th>
									</tr>
								</thead>
									<tr>
										<td>
											Quản trị viên
										</td>
										<td>
											<?php get_soluong_user('2');?> thành viên
										</td>
									</tr>
									<tr>
										<td>
											Người dùng
										</td>
										<td>
											<?php get_soluong_user('1');?> thành viên
										</td>
									</tr>
							</table>
						</div>
						<div class="title">
							<h2>Tỷ lệ %</h2>
						</div>
						<div class="main-mini-content">
							<script type="text/javascript">
						      google.charts.load('current', {'packages':['corechart']});
						      google.charts.setOnLoadCallback(drawChart);
						      function drawChart() {
						        var data = new google.visualization.DataTable();
						        data.addColumn('string', 'Topping');
						        data.addColumn('number', 'Sản phẩm');
						        data.addRows([
						          ['Quản trị viên', <?php get_soluong_user('2');?>],
						          ['Người dùng', <?php get_soluong_user('1');?>],
						        ]);
						        var options = {	width:0,
						                       	height:350,
						                       	font:40,
						                   		is3D: true};
						        var chart = new google.visualization.PieChart (document.getElementById('chart_user'));
						        chart.draw(data, options);
						      }
						    </script>
							<div id="chart_user">
							</div>
						</div>
					</div>
				</div>
		</div>
	</content>
</body>
</html>