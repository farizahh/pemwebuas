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
		<div class="container">
			<!-- menu -->
			<h2 align="center">MENU BAKSO</h2><br>
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
	</body>
</html>