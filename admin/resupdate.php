<?php

include '../koneksi.php';

	$no = $_POST['no'];
	$namar = $_POST['namar'];
	$emailr = $_POST['emailr'];
	$phoner = $_POST['phoner'];
	$tgl = $_POST['tgl'];

	$hasil = mysqli_query($conn, "UPDATE reservasi SET namar='$namar', emailr='$emailr', phoner='$phoner', tgl='$tgl' WHERE no = $no");
	
	if ($hasil) {
		echo "<script>alert('Data berhasil diubah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=reservasi.php'>";
	}
	
?>