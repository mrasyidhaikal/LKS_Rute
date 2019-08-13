<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include 'koneksi.php';
$id=$_SESSION['id'];
$query=mysql_query("SELECT * FROM `login` WHERE id = '$id'");
$data=mysql_fetch_array($query);
$rute = mysql_query("SELECT * FROM `rute`");
$row=mysql_fetch_array($rute);




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
							<li><a href="" style="background-color:#ff6681;color:#fff;">Home</a></li>
						
							<li><a href="#rute" style="color: #ff6681;" class="page-scrol">Route</a></li>
							<li><a href="#map" class="page-scrol"  style="color: #ff6681;">Map View</a></li>
							<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #ff6681;">
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
<div class="carousel slide" data-ride="carousel" id="my-slide">
	<div class="carousel-inner">
		<div class="item active">
			<div class="carousel-caption">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			</div>
			<img src="img/muslimah.jpg" class="img-responsive" height="200px">
			
		</div>
				<div class="item">
			<div class="carousel-caption">
				<h2>Fashion Is Beuty</h2>
				<p>Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			</div>
			<img src="img/muslimah.jpg" class="img-responsive">
			
		</div>

	</div>

</div>
	<a href="#my-slide" data-slide="prev" class="left carousel-control">
		<i class="glyphicon glyphicon-chevron-left"></i>
	</a>
	<a href="#my-slide" data-slide="next" class="right carousel-control">
		<i class="glyphicon glyphicon-chevron-right"></i>
	</a>
</div>
<!-- Carousel -->

<!-- Place -->
<section id="rute" style="margin-top: 30px;padding-bottom: 300px;">
<div class="row">
		<div class="col-sm-12 text-center">
			<h2 style="color:#ff6681;">Route</h2>
		<hr class="garis">

</div></div>
<div class="row">
	<div class="container">
			<div class="panel-body">

	<div class="col-sm-10 col-sm-offset-1 " style="margin-top:50px; ">

</div>
</div></div></div>


	<div class="row">
	<div class="container">
			<div class="panel-body">
		
	<div class="col-sm-10 col-sm-offset-1 " style="margin-top:50px; ">
	
	<div class="panel panel-login" style="background-color:#ced6e0;">



	
	<div class="row">

		<div class="col-sm-9 col-sm-offset-1">
<h2>Search Rute</h2>
			<form method="POST" action="p_cari.php">
				<div class="form-group">
					<label><i class="fa fa-shuttle-van"></i> Event Of The Week</label>
					<select name="acara" class="form-control">
							<?php $q=mysql_query("SELECT * FROM rute");
					while ($data = mysql_fetch_assoc($q)) {
						echo '<option value="'.$data['id_rute'].'">'.$data['nama_acara'].'</option>';
					}		
				 ?>
					</select>
				
				</div>
					</div>
					<div class="col-sm-1">
				<div class="form-group">
					<button type="submit" class="btn btn-primary log" name="cari"><i class="fa fa-search fa-2x"></i> </button>
				</div>
</div>
			</form>

		</div>
			</div>
	</div>
</div>
</div>
</section>
<!-- End -->

<!-- Jadwal -->
<section id="map" style="padding-bottom: 300px;">
<div class="row">
		<div class="col-sm-12 text-center">
			<h2 style="color:#ff6681;">Map View</h2>
		<hr class="garis">

</div></div>
	<div class="row text-center">
	<div class="container">

		




					<h1></h1>
	 <div class="row text-center">
<?php 
$rute=mysql_query("SELECT * FROM rute");
while ($row = mysql_fetch_array($rute)) {

 ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="height: 200px;" src="<?php echo $row['foto'] ?>" alt="">

                    <div class="caption">
                    <h3><?php echo $row['nama_acara'] ?></h3>
                    <p><i class="fa fa-bus"></i>Kendaraan: <?php echo $row['kendaraan'] ?></p>
                    <p><i class="fa fa-map-marker"></i> Lokasi: <?php echo $row['tujuan'] ?></p>
                         <p><i class="fa fa-map-marker"></i> Lokasi: <?php echo $row['id_rute'] ?></p>
                        

                        <p>
                            <a href="hasil.php?id=<?php echo $row['id_rute'] ?>" class="btn btn-primary">Pesan Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
<?php } ?>
           


        </div>
		</div>
			</div>
	</div>
</div>
</div>
</section>
<!-- End Jadwal -->
<!-- sdsa -->
<section id="map" style="padding-bottom: 300px;">
<div class="row">
		<div class="col-sm-12 text-center">
			<h2 style="color:#ff6681;">Map View</h2>
		<hr class="garis">

</div></div>
	<div class="row text-center">
	<div class="container">

		




					<h1></h1>
	 <div class="row text-center">
<?php 
$rute=mysql_query("SELECT * FROM rute");
while ($row = mysql_fetch_array($rute)) {

 ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="height: 200px;" src="<?php echo $row['foto'] ?>" alt="">

                    <div class="caption">
                    <h3><?php echo $row['nama_acara'] ?></h3>
                    <p><i class="fa fa-bus"></i>Waktu Sampai: <?php echo $row['waktu_sampai'] ?></p>
                    <p><i class="fa fa-map-marker"></i> Lokasi: <?php echo $row['tujuan'] ?></p>
                         <p><i class="fa fa-map-marker"></i> Lokasi: <?php echo $row['id_rute'] ?></p>
                        

                        <p>
                            <a href="hasil.php?id=<?php echo $row['id_rute'] ?>" class="btn btn-primary">Pesan Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
<?php } ?>
           


        </div>
		</div>
			</div>
	</div>
</div>
</div>

<!-- ass -->
<!-- Footer -->
<footer style="position:relative;top:400px;">
 <div id="page-content-wrapper">
 <div class="container" > 
   <div class="row" >
   
            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo"><img src="img/logo.png"></span>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="address">
                    <span>Menu</span>       
                    <li>
                       <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Route</a>
                    </li>
                    <li>
                       <i class="fa fa-image" aria-hidden="true"></i> <a href="#">List Route</a>
                    </li> 
                    <li>
                       <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">User</a>
                    </li> 
               </ul>
            </div>
       
            <div class="col-md-4 col-sm-6 	col-xs-12">
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
<!-- End -->
</body>


<script src="jquery/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$('.navbar-toggle').click(function() {
			$(this).toggleClass("active")
		})
		$('.carousel').carousel({
	 	 interval: 1500
		})
	$('.page-scrol').click(function(e) {
		var href=$(this).attr('href');
		var h = $('nav').outerHeight();
		$('html, body').animate({
			scrollTop:$(href).offset().top-h
		},1000)
		e.preventDefault;
	})
	  


	})
	$(window).on("scroll",function() {
		if ($(window).scrollTop()) {
			$('.navbar-default').addClass('black');
			$('.navbar-nav.nav li a').addClass('bsr');
			$('.img-responsive.logo').addClass('bs');
		}
		else{
			$('.navbar-default').removeClass('black');
			$('.navbar-nav.nav li a').removeClass('bsr');
			$('.img-responsive.logo').removeClass('bs');
		}
	})
	$(".input").focus(function() {
		$(this).parent().addClass("focus");
	}).blur(function() {
		if ($(this).val() == '') {
			$(this).parent().removeClass("focus");
		}
	})

</script>
</html>