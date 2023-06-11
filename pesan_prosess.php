<?php

include 'koneksi.php';

	$nama = $_POST['nama'];
	$phone = $_POST['phone'];
	$makanan = $_POST['makanan'];
	$minuman = $_POST['minuman'];

		$a="INSERT INTO pesan (nama, phone, makanan, minuman) VALUES ('$nama', '$phone', '$makanan', '$minuman')";
		
		//$hsl = mysqli_query($conn, $a)or die(mysql_error());
		
		if (mysqli_query($conn, $a)) {
			echo "<script>alert('Makanan kamu telah masuk orderan, harap tunggu!')</script>";
			echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		
		}else {
			echo "Gagal simpan data pesanan";
		}  
	
?>
