<?php
	include "../koneksi.php";	
?>

<html>
	<head>
		<meta charset="uft-8">
		<title>Halaman Admin Bakso Tekwoleh</title>
		<link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	</head>
		
	<body>
		<div class="row">
			<div class="col col-3">
				<?php include("navbar.php"); ?>
			</div>
			<div class="col col-9">
				<br><a href="reservasi.php"><button type="button" class="btn btn-outline-warning">Back</button></a><br>
				<h2 align="center">Edit Pesanan</h2>
				
				<?php 
					$no = $_GET['no'];
					$query = mysqli_query($conn, "SELECT * FROM reservasi WHERE no = '$no' ");
				
					while ($data = mysqli_fetch_array($query)) {;
				?>
				
					<form action="resupdate.php" method="POST">
						<div class="form-group">
							<label class="form-label">Nama Lengkap</label>
							<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
							<input type="text" class="form-control" name="namar" value="<?php echo $data['namar'] ?>">
						</div><br>
						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" name="emailr" value="<?php echo $data['emailr'] ?>">
						</div><br>
						<div class="form-group">
							<label class="form-label">No. Telepon</label>
							<input type="number" class="form-control" name="phoner" value="<?php echo $data['phoner'] ?>">
						</div><br>
						<div class="form-group">
							<label class="form-label">Tanggal Reservasi</label>
							<input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl'] ?>">
						</div><br>
						
						<div class="row">
							<a href="../reservasi_prosess.php"><input type="submit" class="btn btn-primary"></a>
						</div>
					</form>
				<?php } ?>
			</div>
		</div>
  </body>
</html>