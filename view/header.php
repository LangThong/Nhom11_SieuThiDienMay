 <!DOCTYPE html>
<html>
<head>
	<title>Nhóm 11_Siêu Thị Điện Máy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="?action=home"><img src="images/logo2.png"class="logo" style="width: 140px; top: 50px;"></a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    		<ul class="nav navbar-nav">
	    			<li><a href="?action=home">Trang Chủ</a></li>
	    			<li><a href="?action=productions&id_nsp=0">Cửa Hàng</a></li>
	    		</ul>
	    		<ul class="nav navbar-nav navbar-right">
	    			<?php           
		                if (isset($_SESSION['Username'])) {
		                   echo "<li class='login-dn' style='color:#333;'>
		                   			<a href='?action=view_cart' data-toggle='tooltip' data-placement='bottom' title='".$cart_info."'><i class='glyphicon glyphicon-user'></i> &nbsp;" .$_SESSION['Username']. "</a>
		                   		</li>
		                   		<li>
		                   			<a href='Admin/logout.php'> <i class='glyphicon glyphicon-log-out'></i> Đăng xuất</a>
		                   		</li>";
		                }
			            else{
						echo"<li class='login-dn'><a href='admin/login.php'>Đăng nhập <i class='glyphicon glyphicon-log-in'></i></a></li>";
						echo"<li><a href=''>|</a></li>";
						echo"<li><a href='admin/register.php'>Đăng Ký <i class='glyphicon glyphicon-log-out'></i></a></li>";
			            }
	            	?>	
	    		</ul>
	    	</div>
	    	</div>
	    </nav>
	</header>
