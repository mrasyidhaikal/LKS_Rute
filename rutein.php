<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include 'koneksi.php';
$id=$_SESSION['id'];
$query=mysql_query("SELECT * FROM `login` WHERE id = '$id'");
$data=mysql_fetch_array($query);





$level=$_SESSION['level'] =='admin';
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
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:#fcc1cb;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <img src="img/logo.png" width="190px" style="margin-top: 30px;">
                    </a>
                </li>
                <li style="margin-top: 100px;">
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">User</a>
                </li>
                <li>
                    <a href="rute.php">Rute</a>
                </li>
                <li>
                	<a href="rutein.php">Insert Rute</a>
                </li>
                <li>
                    <a href="#">Pesanan</a>
                </li>
               <li>
                    <a href="logout.php">Logout</a>
                </li>
              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
       
           <div class="row">
	<div class="container">
	<div class="col-sm-6" style="margin-top:120px; ">
		
	<div class="panel panel-login">
		<div class="panel-body">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			
		</div>
		</div>
		<h2 style="color:#ff6681;">Input Data</h2>
	<div class="row">
		<div class="col-sm-10">
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label><i class="fa fa-user"></i> Id Rute</label>
					<input type="text" name="id" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Waktu Berangkat</label>
					<input type="time" name="waktudatang" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Waktu Sampai</label>
					<input type="time" name="waktusampai" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Lokasi Berangkat</label>
					<input type="text" name="lokasi" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Tujuan</label>
					<input type="text" name="tujuan" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div><div class="form-group">
					<label><i class="fa fa-user"></i> Foto</label>
					<input type="file" name="foto" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Kendaraan</label>
					<input type="text" name="kendaraan" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-user"></i> Deskripsi</label>
					<textarea name="deskripsi" class="form-control" placeholder="Username" required="" style="color:#ff6681;">
					</textarea>
				</div>
		
				<div class="form-group">
					<label><i class="fa fa-user"></i> Nama Acara</label>
					<input type="text" name="nama_acara" class="form-control" placeholder="Nama Acara" required="" style="color:#ff6681;">
				</div>
				<div class="form-group">
					<label><i class="fa fa-user"></i> Total Waktu</label>
					<input type="text" name="total_waktu" class="form-control" placeholder="Total Waktu" required="" style="color:#ff6681;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-user"></i> Jarak</label>
					<input type="text" name="jarak" class="form-control" placeholder="Jarak" required="" style="color:#ff6681;">
				</div>

					
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="simpan" style="width: 100%;">Simpan</button>
				</div>
</div>
			</form>
	</div>
		</div>
			</div>
	</div>
</div>
</div>
<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$id_rute=$_POST['id'];
$waktudatang=$_POST['waktudatang'];
$waktusampai=$_POST['waktusampai'];
$berangkat=$_POST['lokasi'];
$tujuan=$_POST['tujuan'];
$kendaraan=$_POST['kendaraan'];
$deskripsi=$_POST['deskripsi'];
$nama_acara=$_POST['nama_acara'];
$total_waktu=$_POST['total_waktu'];
$jarak=$_POST['jarak'];

	 $fl_name = $_FILES['foto']['name'];

			$error = $_FILES['foto']['error'];	
			$tmp = $_FILES['foto']['tmp_name'];
		
		



		$ekstensi=['jpg','jpeg','png'];
		$nama = explode('.', $fl_name);
		$nama = strtolower(end($nama));	

			$baru = uniqid();
			$baru .='.';
			$baru .=$nama;
			$id=uniqid();
				$path = "rut/".$baru;
			move_uploaded_file($tmp,$path);
			$in=mysql_query("INSERT INTO `lks`.`rute` (`id_rute`, `waktu_berangkat`, `waktu_sampai`, `berangkat`, `tujuan`, `foto`, `kendaraan`, `Deskripsi`, `nama_acara`, `total_waktu`, `jarak`) VALUES ('$id_rute', '$waktudatang', '$waktusampai', '$berangkat', '$tujuan', '$path', '$kendaraan', '$deskripsi', '$nama_acara', '$total_waktu', '$jarak');").mysql_error();
			echo "<script> window.alert('Success');
			window.location='rutein.php'</script>";
}
 ?>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->

        <!-- page-content" -->
    </div></div></div></div>

	<!-- Footer -->
<footer style="z-index:1000px;">
 <div id="page-content-wrapper">
 <div class="container" > 
   <div class="row" >
   
            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo"><img src="img/logo.png"></span>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="address">
                    <span>Contact</span>       
                    <li>
                       <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                    </li>
                    <li>
                       <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                    </li> 
                    <li>
                       <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                    </li> 
               </ul>
            </div>
       
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Contact</span>       
                    <li>
                       <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                    </li>
                    <li>
                       <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                    </li> 
                    <li>
                       <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                    </li> 
               </ul>
           </div>
       
       
       </div> 
    </div>
</footer>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>