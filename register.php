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
	<div class="col-sm-6 col-sm-offset-3" style="margin-top:20px; ">
		
	<div class="panel panel-login">
		<div class="panel-body">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<img src="img/logo.png" class="img-responsive text-center" width="220px;">
		</div>
		</div>
		<h2 style="color:#ff6681;">REGISTER</h2>
	<div class="row">
		<div class="col-sm-10">
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label><i class="fa fa-user"></i> Username</label>
					<input type="text" name="user" class="form-control" required="" placeholder="Username" style="color:#ff6681;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-lock"></i> Password</label>
					<input type="Password" required="" name="pass" class="form-control" placeholder="Password" style="color:#ff6681;">
				</div>
						<div class="form-group">
					<label><i class="fa fa-lock"></i> Confirm Password</label>
					<input type="Password" required="" name="pass2" class="form-control" placeholder="Confirm Password" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-envelope"></i> Email</label>
					<input type="mail" required="" name="mail" class="form-control" placeholder="Email" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-image"></i> Foto</label>
					<input type="file" name="foto" class="form-control" placeholder="" required="" style="color:#ff6681;">
				</div>
						</div>
					<div class="col-sm-1">
				<div class="form-group">
					<button type="submit" class="btn btn-primary logg" name="register"><i class="fa fa-lock-open fa-2x"></i> </button>
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
			<li class=""><a href="login.php" class="btn btn-primary reg" style="color:white;"> LOGIN</a></li>
			

		</ul>
</div>
</div></div>

</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<?php 
include 'koneksi.php';

if (isset($_POST['register'])) {
$user=$_POST['user'];
$pass=$_POST['pass'];
$pas2=$_POST['pass2'];
$mail=$_POST['mail'];


		    $fl_name = $_FILES['foto']['name'];

			$error = $_FILES['foto']['error'];	
			$tmp = $_FILES['foto']['tmp_name'];
		
		



		$ekstensi=['jpg','jpeg','png'];
		$nama = explode('.', $fl_name);
		$nama = strtolower(end($nama));	
		if (!in_array($nama, $ekstensi)) {
			echo "<script>
				window.alert('File Tidak Cocock')
				window.location='registration.php'</script>";
		}
		if ($pass !== $pas2) {
			echo "<script>
				window.alert('Password Tidak Sama')
				window.location='registration.php'</script>";
		}
		else{
			$baru = uniqid();
			$baru .='.';
			$baru .=$nama;
			$id=uniqid();
				$path = "user/".$baru;
			move_uploaded_file($tmp,$path);

			$query=mysql_query("INSERT INTO `lks`.`login` (`id`, `username`, `password`, `level`, `foto`) VALUES ('$id', '$user', '$pass', 'user', '$path');");
			echo "<script>
				window.alert('Success')
				window.location='register.php'</script>";
		}
}


?>

</html>
