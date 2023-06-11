<?php

include 'koneksi.php';

	$namar = $_POST['namar'];
	$emailr = $_POST['emailr'];
	$phoner = $_POST['phoner'];
	$tgl = $_POST['tgl'];

		$a="INSERT INTO reservasi (namar, emailr, phoner, tgl) VALUES ('$namar', '$emailr', '$phoner', '$tgl')";
		
		//$hsl = mysqli_query($conn, $a)or die(mysql_error());
		
		if (mysqli_query($conn, $a)) {
			echo "<script>alert('Reservasi kamu sudah masuk!')</script>";
			echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		
		}else {
			echo "Gagal simpan data mahasiswa";
		}  
	
?>
