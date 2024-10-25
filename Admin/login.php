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
        $loi["password"]="Vui lòng nhập mật khẩu";
    }
    else{
        $password=$_POST["pass"];
    }

    if ($username && $password) {
        $us="root";
        $pas="";
        $conn=mysqli_connect("localhost",$us,$pas,"datanhom11");
        mysqli_select_db($conn,"datanhom11");
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
    <style>
        body {
            background: linear-gradient(120deg, #3498db, #8e44ad);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login {
            background: white;
            width: 400px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
        }
        
        .login-icon {
            color: #3498db;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .login-icon:hover {
            transform: scale(1.1);
        }
        
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .form-control {
            border-radius: 25px;
            padding: 12px 20px;
            height: auto;
            border: 2px solid #eee;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #3498db;
            box-shadow: none;
        }
        
        .btn {
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            margin: 5px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: #3498db;
            border: none;
        }
        
        .btn-primary:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            text-align: left;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .control-label {
            font-weight: 600;
            color: #34495e;
        }
        
        .forgot-password {
            color: #7f8c8d;
            font-size: 14px;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }
        
        .forgot-password:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="login">
        <center>
            <i class="fa fa-user-circle login-icon" aria-hidden="true" style="font-size:80px;"></i>
        </center>
        <form class="form-horizontal" action="login.php" method="post">
            <div class="text-center">
                <h1>Đăng nhập</h1>
            </div>
            
            <div class="form-group">
                <label class="control-label">Tên tài khoản</label>
                <input type="text" name="user" class="form-control" placeholder="Nhập tên tài khoản">
                <?php if($loi["username"]) { ?>
                    <div class="error-message"><?php echo $loi["username"]; ?></div>
                <?php } ?>
            </div>
            
            <div class="form-group">
                <label class="control-label">Mật khẩu</label>
                <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
                <?php if($loi["password"]) { ?>
                    <div class="error-message"><?php echo $loi["password"]; ?></div>
                <?php } ?>
            </div>
            
            <?php if($oi["ok"]) { ?>
                <div class="error-message text-center mb-3"><?php echo $oi["ok"]; ?></div>
            <?php } ?>
            
            <div class="text-center">
                <button type="submit" name="ok" class="btn btn-primary">Đăng Nhập</button>
                <a href="register.php" class="btn btn-primary">Đăng Ký</a>
            </div>
            
            <a href="#" class="forgot-password text-center">Quên mật khẩu?</a>
        </form>
    </div>
</body>
</html>