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
error_reporting(0);



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

<!-- Carousel -->

<!-- Place -->
<section id="rute" style="margin-top: 200px;padding-bottom: 300px";>
<div class="row">
		<div class="col-sm-12 col-sm-offset-1">
			<h2 style="color:#ff6681;">Pesanan <?php echo $data['username']; ?></h2>
		<span class="garis"></span>

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
$id=$_SESSION['id'];
$rute=mysql_query("SELECT * FROM pesanan WHERE id_user=$id ");
$row = mysql_fetch_array($rute)

 ?>		
	<h2>Id Pesanan: <?php echo $row['id_pesanan']; ?></h2>
	<span class="gariss"></span>
	<h4><b><i class="fa fa-money-bill"></i> Harga:Rp.<?php echo $row['harga']; ?> -,</b></h4>


<?php 
$idd=$row['id_rute'];
$te=mysql_query("SELECT * FROM rute WHERE id_rute=$idd");
$dd = mysql_fetch_array($te);

 ?>		
	<h4><b><i class="fa fa-shuttle-van"></i> Depature: <?php echo $dd['berangkat']; ?></b></h4>
	<h4><b><i class="fa fa-shuttle-van" style="transform: scaleX(-1);"></i> Tujuan: <?php echo $dd['tujuan']; ?></b></h4>
	<h4><b><i class="fa fa-clock"></i> Waktu Berangkat: <?php echo $dd['waktu_berangkat']; ?></b></h4>
	<h4><b><i class="fa fa-clock	"></i> Total Waktu Perjalanan: <?php echo $dd['total_waktu']; ?> Jam</b></h4>





	
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