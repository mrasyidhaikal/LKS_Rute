<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body style="background-color:#2f3542;">
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3" style="margin-top:120px; ">
		
	<div class="panel panel-login">
		<div class="panel-body">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<img src="img/logo.png" class="img-responsive text-center" width="220px;">
		</div>
		</div>
		<h2 style="color:#ff6681;">LOGIN</h2>
	<div class="row">
		<div class="col-sm-10">
			<form method="POST" action="">
				<div class="form-group">
					<label><i class="fa fa-user"></i> Username</label>
					<input type="text" name="user" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-lock"></i> Password</label>
					<input type="Password" name="pass" required="" class="form-control" placeholder="Password" style="color:#ff6681;">
				</div>
						</div>
					<div class="col-sm-1">
				<div class="form-group">
					<button type="submit" class="btn btn-primary log" name="login"><i class="fa fa-lock-open fa-2x"></i> </button>
				</div>
</div>
			</form>
	</div>
		</div>
			</div>
	</div>
</div>
</div>
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		

		<ul class="list-inline text-center">
			<li class=""><button class="btn btn-default"><i class="fab fa-google"> Google</button></i></li>
			<li class=""><button class="btn btn-default"><i class="fab fa-facebook"> Facebook</button></i></li>
			<li class=""><button class="btn btn-default"><i class="fab fa-twitter"> Twiiter</button></i></li>

		</ul>
</div>
</div></div>
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		

		<ul class="list-inline text-center">
			<li class=""><a href="register.php" class="btn btn-primary reg" style="color:white;"> REGISTER</a></li>
			

		</ul>
</div>
</div></div>

</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<?php 

include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {

$us=$_POST['user'];
$pas=$_POST['pass'];
$data=mysql_fetch_array(mysql_query("SELECT * FROM `login` WHERE username='$us' AND password='$pas' ORDER BY id"));
$username=$data['username'];
$password=$data['password'];
$level=$data['level'];
$id=$data['id'];
if ($us==$username && $pas==$password) {
	if ($level=='user') {
		$_SESSION['level']=$level;
		$_SESSION['id']=$id;
		echo "<script> window.alert('Login Success');
			window.location='index.php'</script>";
	}
	elseif ($level=='admin') {
	$_SESSION['level']=$level;
	$_SESSION['id']=$id;
	echo "<script> window.alert('Login Success');
			window.location='admin.php'</script>";
	}

}

else{
	echo "<script> window.alert('Login Gagal')</script>";
}
}






 ?>
</html>
