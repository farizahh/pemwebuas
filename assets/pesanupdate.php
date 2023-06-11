<?php

include '../koneksi.php';

	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$phone = $_POST['phone'];
	$makanan = $_POST['makanan'];
	$minuman = $_POST['minuman'];

	$hasil = mysqli_query($conn, "UPDATE pesan SET nama='$nama', phone='$phone', makanan='$makanan', minuman='$minuman' WHERE no = $no");
	
	if ($hasil) {
		echo "<script>alert('Data berhasil diubah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=pesanan.php'>";

	}
?>