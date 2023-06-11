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
			<br><a href="index.php"><button type="button" class="btn btn-outline-warning">Back</button></a><br>
			<h2 align="center">Pesan Bakso</h2>
			
			<form action="pesan_prosess.php" method="POST">
				<div class="form-group">
					<label class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" required>
				</div><br>
				<div class="form-group">
					<label class="form-label">No. Telepon</label>
					<input type="number" class="form-control" name="phone" required>
				</div><br>
				<div class="form-group">
					<label class="form-label">Menu Makanan</label>
					<select class="form-select" name="makanan" aria-label="Default select example">
						<option selected>Open this select menu</option>
						<option value="Bakso Mini">Bakso Mini</option>
						<option value="Bakso Jumbo">Bakso Jumbo</option>
						<option value="Bakso Spesial">Bakso Spesial</option>
					</select>
				</div><br>
				<div class="form-group">
					<label class="form-label">Menu Minuman</label>
					<select class="form-select" name="minuman" aria-label="Default select example">
						<option selected>Open this select menu</option>
						<option value="Air Mineral">Air Mineral</option>
						<option value="Es Jeruk">Es Jeruk</option>
						<option value="Es Teh">Es Teh</option>
						<option value="Es Degan">Es Degan</option>
					</select>
				</div><br>	
				<div class="row">
						<a href="pesan_prosess.php"><input type="submit" class="btn btn-primary"></a>
				</div>
			</form>
		</div>
	</body>
</html>