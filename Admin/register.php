<?php 
	$loi=array();
	$tb["username"]=$tb["password"]=$tb["mail"]=$tb["oke"]=NULL;
	$user=$pass=$email=NULL;
	if (isset($_POST["ok"])) {
		if (empty($_POST["user"])) {
			$tb["username"]="Vui lòng nhập tên tài khoản";
		}
		else{
			$user=$_POST["user"];
		}
		if (empty($_POST["pass"])) {
			$tb["password"]="Vui lòng nhập mật khẩu";
		}
		else{
			$pass=$_POST["pass"];
		}
		if (empty($_POST["email"])) {
			$tb["mail"]="Vui lòng nhập Email";
		}
		else{
			$email=$_POST["email"];
		}
		if ($user && $email && $pass) {
			$us="root";
			$pas="";
			$conn=mysqli_connect("localhost",$us,$pas,"datanhom11");
			mysqli_select_db($conn,"datanhom11");
			mysqli_query($conn,"insert into user(Username, Email,Matkhau,Loai) value('$user','$email','$pass','1')");
			
			$tb["oke"]="Đăng ký thành công";mysqli_close($conn);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Ký</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body style="background: #F7F7F7">
	<div class="login" style="width:600px;margin:auto;position:relative; top: 40px;box-shadow: 5px 4px 8px rgba(0,0,0, .08);">
			<center><i class="fa fa-user-plus" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal" action="register.php" method="post">
			    <div class="text-center">
					<h1>Đăng Ký</h1>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;"><?php echo $tb["oke"] ?></p>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-sm-3 control-label">Tên tài khoản</label>
				    <div class="col-sm-8">
				    	<input type="text" name="user" class="form-control" placeholder="Nhập tên tài khoản">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">Mật Khẩu</label>
				    <div class="col-sm-8">
				    	<input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-sm-3 control-label">Email</label>
				    <div class="col-sm-8">
				    	<input type="email" name="email" class="form-control" placeholder="Email">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-4  col-sm-8">
				    	<button type="submit" name="ok" class="btn btn-primary">Đăng Ký</button>
				    	<a href="login.php" class="btn btn-primary">Đăng Nhập</a>
				    </div>
				</div>
			</form>
	</div>
</body>
</html>