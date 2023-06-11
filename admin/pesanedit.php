<?php
	include "../koneksi.php";
	$no = $_GET['no'];
	$query = mysqli_query($conn, "SELECT * FROM pesan WHERE no = '$no' ");
		
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
				<br><a href="pesanan.php"><button type="button" class="btn btn-outline-warning">Back</button></a><br>
				<h2 align="center">Edit Pesanan</h2>
				
				<?php 
					while ($data = mysqli_fetch_array($query)) {;
				?>
				
					<form action="pesanupdate.php" method="POST">
						<div class="form-group">
							<label class="form-label">Nama Lengkap</label>
							<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
							<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
						</div><br>
						<div class="form-group">
							<label class="form-label">No. Telepon</label>
							<input type="number" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
						</div><br>
						<div class="form-group">
							<label class="form-label">Menu Makanan</label>
							<select class="form-select" name="makanan" aria-label="Default select example" value="<?php echo $data['makanan'] ?>" >
								<option selected>Open this select menu</option>
								<option value="Bakso Mini">Bakso Mini</option>
								<option value="Bakso Jumbo">Bakso Jumbo</option>
								<option value="Bakso Spesial">Bakso Spesial</option>
							</select>
						</div><br>
						<div class="form-group">
							<label class="form-label">Menu Minuman</label>
							<select class="form-select" name="minuman" aria-label="Default select example" value="<?php echo $data['minuman'] ?>" >
								<option selected>Open this select menu</option>
								<option value="Air Mineral">Air Mineral</option>
								<option value="Es Jeruk">Es Jeruk</option>
								<option value="Es Teh">Es Teh</option>
								<option value="Es Degan">Es Degan</option>
							</select>
						</div><br>	
						<div class="row">
								<a href="../pesan_prosess.php"><input type="submit" class="btn btn-primary"></a>
						</div>
					</form>
				<?php } ?>
			</div>
		</div>
  </body>
</html>