<?php 
session_start();
include 'koneksi.php';

$id_pesanan=uniqid();
$id_rute=$_GET['acara'];
$id_user=$_SESSION['id'];

$q =mysql_fetch_array(mysql_query("SELECT * FROM rute WHERE id_rute=$id_rute"));
$a=$q['jarak'];
$harga=$a*20000;

$query="INSERT INTO `lks`.`pesanan` (`id_pesanan`, `id_rute`, `harga`, `id_user`) VALUES ('$id_pesanan', '$id_rute', '$harga', '$id_user');";
$ins=mysql_query($query).mysql_error();
if ($ins) {
	echo "<script> window.alert('Sukses Di Pesan');
			window.location='info.php'</script>";
}

 ?>