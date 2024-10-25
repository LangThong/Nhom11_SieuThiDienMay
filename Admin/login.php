<?php
session_start();
$loi=array();
$loi["username"]=$loi["password"]=$oi["ok"]=NULL;
$username=$Password=NULL;
if (isset($_POST["ok"])) {
	if (empty($_POST["user"])) {
		$loi["username"]="Vui lòng nhập username";
	}
	else{
		$username=$_POST["user"];
	}
	if (empty($_POST["pass"])) {
		$loi["password"]=" Vui lòng nhập password";
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
			$oi["ok"]="Bạn đã nhập sai username hoặc password";
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
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body style="background: #F7F7F7; height: 100%">
	<div class="login" style="width:600px;margin:auto;position:relative;">
			<center><i class="fa fa-user-circle"" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal" action="login.php" method="post">
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;">&nbsp</p>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-sm-3 control-label">USER NAME</label>
				    <div class="col-sm-8">
				    	<input type="text" name="user" class="form-control" placeholder="User name">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">PASSWORD</label>
				    <div class="col-sm-8">
				    	<input type="password" class="form-control" name="pass" placeholder="Password">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;"><?php echo $oi["ok"] ?></p>
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-8">
				    	<button type="submit" name="ok" class="btn btn-default">Đăng Nhập</button>
				    	<a href="register.php" class="btn btn-default">Đăng Ký</a>
				    </div>
				</div>
			</form>
	</div>
</body>
</html>