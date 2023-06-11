<?php
	include "koneksi.php";
	
?>

<html>
	<head>
		<meta charset="uft-8">
		<title>Bakso Tekwoleh</title>
		<link rel="stylesheet" href="assets/fas/css/all.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	</head>
	
	<body>
		<div class="header">
			<?php include("navbar.php"); ?>
		</div>
		<div class="container reservasi">
		<br><a href="index.php"><button type="button" class="btn btn-outline-warning">Back</button></a><br>
		
		<div class="reservasi">	
			<div class="row">
				<div class="col">
					<h3 align="center"> Form Reservasi</h2>
					<form action="reservasi_prosess.php" method="POST">
						<div class="form-group">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" name="namar" required>
						</div><br>
						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" name="emailr" required>
						</div><br>
						<div class="form-group">
							<label class="form-label">No. Telepon</label>
							<input type="number" class="form-control" name="phoner" required>
						</div><br>
						<div class="form-group">
							<label class="form-label">Tanggal Reservasi</label>
							<input type="date" class="form-control" name="tgl" required>
						</div><br>
						
						<div class="row">
							<a href="reservasi_prosess.php"><input type="submit" class="btn btn-primary"></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>