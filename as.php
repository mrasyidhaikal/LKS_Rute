<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" >
		<div class="container-fluid">
			<div class="container" style="margin-top:.1em;padding-right: 0;padding-left: 0;">
				<div class="col-md-3">
					<img src="<?php echo base_url('asset/img/logo.png') ?>" class="img-responsive logo">
				</div>
				<div class="col-md-9" style="padding-right: 0;padding-left: 0;">
				
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" style="border: none;background-color: transparent;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav justify-content-center">
							<li><a href="">Home</a></li>
							<li><?php echo anchor('admin/insert','Insert Data'); ?></li>
							<li><a href="">Services</a></li>
							<li><a href="">Contact Us</a></li>
							<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							
							<li><?php echo anchor('page/logout','Logout')?></li>
						</ul>
					</div>
				</div>
	
		</div>
	</nav>
<div class="carousel slide" data-ride="carousel" id="my-slide">
	<div class="carousel-inner">
		<div class="item active">
			<div class="carousel-caption">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			</div>
			<img src="<?php echo base_url('asset/img/1.jpg') ?>" class="img-responsive">
			
		</div>
		<div class="item">
			<div class="carousel-caption">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			</div>
			<img src="<?php echo base_url('asset/img/2.jpg') ?>" class="img-responsive">
					
		</div>
	</div>
	<a href="#my-slide" data-slide="prev" class="left carousel-control">
		<i class="glyphicon glyphicon-chevron-left"></i>
	</a>
	<a href="#my-slide" data-slide="next" class="right carousel-control">
		<i class="glyphicon glyphicon-chevron-right"></i>
	</a>
</div>
</div>



<section>
	<div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form>
					<div class="row">
						<div class="col-sm-12">
							<h1>Contact Us</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="inputBox">
								<div class="inputText">Frist Name</div>
								<input type="text" name="" class="input">
							</div>
						</div>
					
						<div class="col-sm-6">
							<div class="inputBox">
								<div class="inputText">Last Name</div>
								<input type="text" name="" class="input">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="inputBox">
								<div class="inputText">Email</div>
								<input type="text" name="" class="input">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="inputBox">
								<div class="inputText">Mobile</div>
								<input type="text" name="" class="input">
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12">
							<div class="inputBox">
								<div class="inputText">Messages</div>
								<textarea class="input"></textarea>
							</div>
						</div>
						</div>
							<div class="row">
						<div class="col-sm-12">
								<input type="submit" name="message" value="Send Message" class="btn btn-danger">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<article class="index-table">
<div class="container">
	<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr class="danger">
			<th>FristaName:</th>
			<th>LastName:</th>
			<th>Age:</th>
			<th>Status:</th>
		</tr>
		<tr>
			<td>Daniel</td>
			<td>Nielson</td>
			<td>28</td>
			<td>Married</td>
		</tr>
	</table>
	</div>
</div>
</article>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card" style="width: 18rem;">
  <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/2.jpg') ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('asset/jquery/jquery.min.js'); ?>"></script>

    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>	
<script type="text/javascript">
	$(document).ready(function() {
		$('.navbar-toggle').click(function() {
			$(this).toggleClass("active")
		})
		$('.carousel').carousel({
	 	 interval: 2000
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