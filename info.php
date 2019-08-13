<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include 'koneksi.php';
$id=$_SESSION['id'];
$query=mysql_query("SELECT * FROM `login` WHERE id = '$id'");
$data=mysql_fetch_array($query);





$level=$_SESSION['level'] =='user';
if (!$level) {
	header('location:login.php');
}

 ?>

	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>
<!-- Nav -->
<nav class="nav navbar-default navbar-fixed-top" style="background-color: transparent;">
		<div class="container-fluid">
			<div class="container" >
				<div class="col-md-3">
					<img src="img/logo.png">
				</div>
				<div class="col-md-9" style="padding-right: 0;padding-left: 0;">
				
						<div class="navbar-header">
							<button type="button" class="navbar-toggle ton" data-target=".navbar-collapse" data-toggle="collapse" style="border: none;background-color: transparent;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right" >
							<li><a href="index.php" style="color:#ff6681">Home</a></li>
						
							<li><a href="#rute" style="color: #ff6681;" class="page-scrol">Route</a></li>
							<li><a href="#map" class="page-scrol"  style="color: #ff6681;">Map View</a></li>
							<li class="nav-item dropdown" style="" >
        <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown" role="button" data-toggle="dropdown" style="background-color:#ff6681;color:#fff;">
          Hii..<?php echo $data['username']; ?>
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="info_pesanan.php" style="color: #ff6681;">Informasi Pesanan</a></li>
          <li class="dropdown-item"><a href="info.php" style="color: #ff6681;">Informasi Akun</a> </li>
          <li class="dropdown-item" ><a href="logout.php" style="color: #ff6681;">Logout</a> </li>
        </ul>
      </li>
						</ul>
						
					</div>
				</div>
	
		</div>

	</nav>
<!-- End Nav -->
<!-- Carousel -->
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3" >
		
	<div class="panel panel-login">
		<div class="panel-body">
		<div class="row">

		


	<div class="row" style="margin-top:150px; ">
		
			<div class="row">
		
						<h2 class="text-center">INFORMASI AKUN</h2>
				
			
				<div class="col-sm-6 col-sm-offset-3">
					<div class="form-group">
				<img class="img-responsive img-circle user text-center" src="<?php echo $data['foto']; ?>">
			</div>
				</div>
			</div>

		<div class="col-sm-9">
	
			
				<div class="form-group">
					<label><i class="fa fa-user"></i> Username</label>
					<input type="text" value="<?php echo $data['username'] ?>" name="user" class="form-control" disabled placeholder="Username" required="" style="color:#ff6681;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-lock"></i> Password</label>
					<input type="Password" name="pass" required="" class="form-control" disabled="" value="<?php echo $data['password'] ?>" style="color:#ff6681;">

				</div>
				
				
			
				<div class="row">
	<div class="container">
	<div class="col-sm-4">
		<ul class="list-inline text-center">
			<li class=""><a href="gantips" class="btn btn-primary">Ganti Password</a></li>
			<li class="">	
				<a href="gantips" class="btn btn-primary">Ganti Profile</a>
	</li>
			

		</ul>
</div>
</div></div>

			

						</div>
		</div>
			</form>
	</div>
		</div>
			</div>
	</div>
</div>
</div>
<!-- Carousel -->
</body>
<script src="jquery/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</html>