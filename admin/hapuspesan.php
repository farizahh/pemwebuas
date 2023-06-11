<?php 
	// koneksi database
	include '../koneksi.php';
 
	$no = $_GET['no'];
 
 	$hsl = mysqli_query($conn, "DELETE from pesan where no='$no'");
 
	if ($hsl) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='1 url=index.php'>";
	}
 
?>