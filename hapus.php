<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$query="DELETE FROM `lks`.`pesanan` WHERE `pesanan`.`id_pesanan` = '$id';";
	$jadi=mysql_query($query).mysql_error();
	if ($query) {
		echo "<script> window.alert('Delete Success');
			window.location='admin.php'</script>";
	}
	else{
		echo "Gagal";
		echo "<script> window.alert('Fail');
			window.location='admin.php'</script>";
	}
}else{
	echo "Akses Di larang";
}


 ?>	