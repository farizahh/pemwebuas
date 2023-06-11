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
		<script type="text/javascript" src="../assets/chartjs/Chart.js"></script>
	</head>
		
	<body>
		<br><h3 align="center">PRESENTASE PENJUALAN BAKSO SETIAP MENU</h3>
		<div style="width: 800px;margin: 0px auto;">
			<canvas id="myChart"></canvas>
		</div>
	
		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ["Bakso Mini", "Bakso Jumbo", "Bakso Spesial"],
					datasets: [{
						label: '',
						data: [
						<?php 
						$mini = mysqli_query($conn, "SELECT * FROM pesan WHERE makanan='Bakso Mini'");
						echo mysqli_num_rows($mini);
						?>, 
						<?php 
						$jumbo = mysqli_query($conn, "SELECT * FROM pesan WHERE makanan='Bakso Jumbo'");
						echo mysqli_num_rows($jumbo);
						?>, 
						<?php 
						$spesial = mysqli_query($conn, "SELECT * FROM pesan WHERE makanan='Bakso Spesial'");
						echo mysqli_num_rows($spesial);
						?>
						],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)'
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>
  </body>
</html>