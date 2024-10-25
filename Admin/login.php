<?php
session_start();
$loi=array();
$loi["username"]=$loi["password"]=$oi["ok"]=NULL;
$username=$Password=NULL;
if (isset($_POST["ok"])) {
	if (empty($_POST["user"])) {
		$loi["username"]="Vui lòng nhập tên tài khoản";
	}
	else{
		$username=$_POST["user"];
	}
	if (empty($_POST["pass"])) {
		$loi["password"]=" Vui lòng nhập mật khẩu";
	}
	else{
		$password=$_POST["pass"];
	}

	if ($username && $password) {
		$us="root";
		$pas="";
		$conn=mysqli_connect("localhost",$us,$pas,"datanhom11");
		mysqli_select_db($conn,"datanhom11");
		//truy vấn dưc liệu
		$result=mysqli_query($conn,"select * from user where Username='$username' and MatKhau='$password'");
		if (mysqli_num_rows($result)==1) {
			$data=mysqli_fetch_assoc($result);
			$_SESSION["Loai"]=$data["Loai"];
			if ($_SESSION["Loai"]==2) {
				$_SESSION["Username"]=$username;
				header("location:index.php");
				exit();
			}
			else{
				$_SESSION["Username"]=$username;
				header("location:../index.php");
				exit();
			}
			
		}
		else{
			$oi["ok"]="Bạn đã nhập sai tài khoản hoặc mật khẩu";
		}
	//đóng csdl
	mysqli_close($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body style="background: #F7F7F7; height: 100%" >

	<div class="login" style="width:600px;margin:auto;position:relative;top: 40px; box-shadow: 5px 4px 8px rgba(0,0,0, .08);">
			<center><i class="fa fa-user-circle" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal" action="login.php" method="post">
			<div class="text-center">
					<h1>Đăng nhập</h1>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;">&nbsp</p>
				    </div>
				</div>
				
				<div class="form-group">
				    <label class="col-sm-3 control-label">Tên tài khoản</label>
				    <div class="col-sm-8">
				    	<input type="text" name="user" class="form-control" placeholder="Nhập tên tài khoản">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu</label>
				    <div class="col-sm-8">
				    	<input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;"><?php echo $oi["ok"] ?></p>
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-4 col-sm-8">
				    	<button type="submit" name="ok" class="btn btn-primary">Đăng Nhập</button>
				    	<a href="register.php" class="btn btn-primary">Đăng Ký</a>
				    </div>
				</div>
			</form>
	</div>
</body>
</html>