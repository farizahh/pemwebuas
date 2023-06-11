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
				<br><h3 align="center">Tampilan Menu</h3>
		
				<div class="container-fluid">				
					<table class="table table-bordered" align="center">
						<thead class="thead-light">
							<tr style="background-color: #e5e3e3; color: black:" align="center">
								<th>No. </th>
								<th>Nama Menu </th>
								<th>Gambar</th>
								<th>Harga</th>
								<th><i class='bx bx-cog'></i></th>
							</tr>
						</thead>
						
							<?php
							$query = mysqli_query($conn, "SELECT * FROM menu")or die(mysql_error());
							$no = 1;
							while($data = mysqli_fetch_array($query)){
							?>
							
						
						<tbody>
							<tr>
								<td align="center"> <?php echo $no++; ?> </td>
								<td> <?php echo $data['nama']; ?> </td>
								<td> <?php echo $data['gambar']; ?> </td>
								<td> <?php echo $data['harga']; ?> </td>
								
								<td align="center"><a href="editpesan.php?no=<?php echo $data['no']?>" class="btnu"><i class='bx bxs-edit'></i></a> |
									<a href="hapuspesan.php?no= <?php echo $data['no']?>" class="btnu"><i class='bx bxs-trash'></i></a>
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