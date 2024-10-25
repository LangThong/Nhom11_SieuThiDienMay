<?php 
	$loi=array();
	$tb["username"]=$tb["password"]=$tb["mail"]=$tb["oke"]=NULL;
	$user=$pass=$email=NULL;
	if (isset($_POST["ok"])) {
		if (empty($_POST["user"])) {
			$tb["username"]="Vui lòng nhập username";
		}
		else{
			$user=$_POST["user"];
		}
		if (empty($_POST["pass"])) {
			$tb["password"]="Vui lòng nhập password";
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
	<div class="login" style="width:600px;margin:auto;position:relative;">
			<center><i class="fa fa-user-plus" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal" action="register.php" method="post">
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;"><?php echo $tb["oke"] ?></p>
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
				    <label class="col-sm-3 control-label">EMAIL</label>
				    <div class="col-sm-8">
				    	<input type="email" name="email" class="form-control" placeholder="Email">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-8">
				    	<button type="submit" name="ok" class="btn btn-default">Đăng Ký</button>
				    	<a href="login.php" class="btn btn-default">Đăng Nhập</a>
				    </div>
				</div>
			</form>
	</div>
</body>
</html>