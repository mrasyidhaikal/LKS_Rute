<?php 
include 'koneksi.php';
if (isset($_POST['cari'])) {
	$acara = $_POST['acara'];
	header('location:hasil.php?acara='.$acara.'');
}
 ?>