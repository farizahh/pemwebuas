<?php
	include "koneksi.php";
	
?>

<html>
	<head>
		<meta charset="uft-8">
		<title>Bakso Tekwoleh</title>
		<link rel="stylesheet" href="assets/fas/css/all.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	</head>
		
	<body>
		<div class="header">
			<?php include("navbar.php"); ?>
			
			<div class="bg-img">
				<img src="assets/img/head.jpg" class="img-fluid"><br><br>
			</div>
		</div>
							
		<div class="container">
			<!-- menu -->
			<div class="row align-items-start">
				<div class="col">
					<div class="card">
						<img src="assets/img/mini.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center">Bakso Mini | Rp. 15.000</h5>
							<a href="pesan.php" class="btn btn-primary">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<img src="assets/img/jumbo.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center">Bakso Jumbo | Rp. 20.000</h5>
							<a href="pesan.php" class="btn btn-primary">Pesan</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<img src="assets/img/spesial.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center">Bakso Spesial | Rp. 25.000</h5>
							<a href="pesan.php" class="btn btn-primary">Pesan</a>
						</div>
					</div>
				</div>
			</div><br>
		</div>
		<!-- reservation -->
		<div class="reservasi">	
			<div class="row">
				<div class="col">
				<br><a class="reserv" href="reservasi.php"><h3 align="center">Reservation</h3></a>
				<form action="reservasi_prosess.php" method="POST">
				<div class="form-group">
					<label class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="namar" required>
				</div>
				<div class="form-group">
					<label class="form-label">Email</label>
					<input type="text" class="form-control" name="emailr" required>
				</div>
				<div class="form-group">
					<label class="form-label">No. Telepon</label>
					<input type="number" class="form-control" name="phoner" required>
				</div>
				<div class="form-group">
					<label class="form-label">Tanggal Reservasi</label>
					<input type="date" class="form-control" name="tgl" required>
				</div><br>
				
				<div class="row">
					<a href="reservasi_prosess.php"><input type="submit" class="btn btn-primary"></a>
				</div>
			</form>
				</div>
			
				<div class="col">
					<br><img src="assets/img/bakso.jpeg">
				</div>
			</div>
		</div>
							
		<div class="footer">
		</div>
	</body>
</html>