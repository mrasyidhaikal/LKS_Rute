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
							<li><a href="index.php" style="color:#ff6681;">Home</a></li>
							<li><a href="#map" class="page-scrol"  style="background-color:#ff6681;color:#fff;">Hasil Pencarian</a></li>
							<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #ff6681;">
          Hii..<?php echo $data['username']; ?>
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="" style="color: #ff6681;">Informasi Pesanan</a></li>
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

<!-- Carousel -->

<!-- Place -->
<section id="rute" style="margin-top: 200px;padding-bottom: 300px";>
<div class="row">
		<div class="col-sm-12 text-center">
			<h2 style="color:#ff6681;">Hasil</h2>
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
		<?php 
include 'koneksi.php';
$id=$_GET['id'];
$rute=mysql_query("SELECT * FROM rute WHERE id_rute=$id ");
while ($row = mysql_fetch_array($rute)) {

 ?>		
	<h2><?php echo $row['nama_acara']; ?></h2>
	<span class="gariss"></span>
	<p><?php echo $row['Deskripsi']; ?></p>
	<h4><b><i class="fa fa-bus-alt"></i> Kendaraan:<?php echo $row['kendaraan']; ?></b></h4>
	<h4><i class="fa fa-shuttle-van"></i> Jam Berangkat: <?php echo $row['waktu_berangkat']; ?></h4>
	<h4><i class="fa fa-clock"></i> Total Waktu Perjalanan: <?php echo $row['total_waktu']; ?> Jam</h4>
	<h4><i class="fa fa-map"></i> Jarak: <?php echo $row['jarak']; ?> KM</h4>
	<h4><i class="fa fa-money-bill"></i> Harga: Rp.<?php $a=$row['jarak'];$b=$a*20000;echo $b; ?> -,</h4>
	<?php } ?>
<a href="p_pesan.php?acara=<?php echo $id; ?>" type="submit" name="pesan" class="btn btn-primary" style="width: 300px;font-size:20px; height: 50px;">Pesan</a>





	
</div></div></div></div></div>
</section>	
<!-- End Jadwal -->

<!-- Footer -->
<footer>
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
	 	 interval: 1000
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