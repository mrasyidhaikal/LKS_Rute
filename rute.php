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
                    <a href="#">Rute</a>
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
        <div id="page-content-wrapper">
            <div class="container-fluid">
                   <div class="container">
        <div class="title">
		<div class="col-sm-12">
			<h2 style="color:#ff6681;">Rute</h2>
        </div>
        <div class="row">
            <div class="col-md-3 ">
          	   <form method="POST" action="">
            	<div class="form-group">

            		<input type="text" name="cari" class="form-control">
            		<br>
            		<button class="btn btn-primary" style="width: 260px;"><i class="fa fa-search"></i></button>
            	</div>	
            		
                        </form>
 

            </div>
            <div class="col-lg-11 col-md-10 ml-auto mr-auto">
         
                <div class="table-responsive">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID Rute</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Sampai</th>
                            <th>Lokasi Pergi</th>
                            <th>Lokasi Sampai</th>
                            <th>Kendaraan</th>
                            <th>Deskripsi</th>
                            <th>Nama Acara</th>
                            <th>Total Waktu</th>
                            <th>Jarak</th>
                            <th>Foto</th>
                            <th colspan="2">Actions</th>
                        </tr>
                          <tr>
                

    <?php
    error_reporting(0);
                    $query=$_POST['cari'];
                if ($query != '') {
                    $cek=mysql_query("SELECT * FROM rute WHERE berangkat LIKE '%$query%' ");
                }
                else{
                    $cek=mysql_query("SELECT * FROM rute"); 
                }
                if (mysql_num_rows($cek )) {
                            
                while ($data = mysql_fetch_array($cek)) {
                
            ?>
                            <td><?php echo $data['id_rute']; ?></td>
                            <td><?php echo $data['waktu_berangkat']; ?></td>
                            <td><?php echo $data['waktu_sampai']; ?></td>
                          	<td><?php echo $data['berangkat']; ?><td>
                            <td><?php echo $data['tujuan']; ?><td>
                            <td><?php echo $data['kendaraan']; ?><td>
                            <td><?php echo $data['Deskripsi']; ?><td>
                            <td><?php echo $data['nama_acara']; ?><td>
                            <td><?php echo $data['total_waktu']; ?><td>
                            <td><?php echo $data['jarak']; ?> KM<td>
                            <td><img width="200px" src="<?php echo $data['foto']; ?>"><td>
                            <td><a href="hapus1.php?id=<?php echo $data['id_rute']; ?>" class="btn btn-danger btn-just-icon btn-sm" >
                                    <i class="fa fa-trash"> Hapus</i>
                       
                                </a></td>
                             <td><a href="editr.php?id=<?php echo $data['id_rute']; ?>" class="btn btn-success">
                                    <i class="fa fa-edit"> Edit</i></td>
                      
                     
                          
                        </tr>

                            
<?php } }else{
echo "<h1>Tidak Ada Data</h1>";
}
    ?>
                    </tbody>
                </table>
                </div>
    </div></div></div>
            </div>
        </div>
            </div>
        </div>
        </button>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->

        <!-- page-content" -->
    </div>

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