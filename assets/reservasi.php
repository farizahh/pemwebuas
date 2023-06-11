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
				<br><h3 align="center">Tampilan Reservasi</h3>
		
				<div class="container-fluid">				
					<table class="table table-bordered" align="center">
						<thead class="thead-light">
							<tr style="background-color: #e5e3e3; color: black:" align="center">
								<th>No. </th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>No. Telp</th>
								<th>Tanggal</th>
								<th><i class='bx bx-cog'></i></th>
							</tr>
						</thead>
						
							<?php
							$query = mysqli_query($conn, "SELECT * FROM reservasi")or die(mysql_error());
							$no = 1;
							while($data = mysqli_fetch_array($query)){
							?>
							
						
						<tbody>
							<tr>
								<td align="center"> <?php echo $no++; ?> </td>
								<td> <?php echo $data['namar']; ?> </td>
								<td> <?php echo $data['emailr']; ?> </td>
								<td> <?php echo $data['phoner']; ?> </td>
								<td> <?php echo $data['tgl']; ?> </td>
								
								<td align="center"><a href="resedit.php?no=<?php echo $data['no']?>" class="btnu"><i class='bx bxs-edit'></i></a> |
									<a href="hapusres.php?no= <?php echo $data['no']?>" class="btnu"><i class='bx bxs-trash'></i></a>
								</td>
								<?php } ?>
							</tr>
						</tbody>				
					</table>
				</div>
			</div>
		</div>
  </body>
</html>