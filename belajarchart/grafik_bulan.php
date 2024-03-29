<?php
	include('koneksi.php');
	$label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
	for($bulan = 1;$bulan < 13;$bulan++) {
		$query = mysqli_query($koneksi,"SELECT SUM(jumlah) AS jumlah FROM tb_penjualan WHERE MONTH(tgl_penjualan)='$bulan'");
		$row = $query->fetch_array();
		$jumlah_produk[] = $row['jumlah'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Grafik Covid Bar Chart JS</title>
		<script type="text/javascript" src="Chart.js"></script>
	</head>
	<body>
		<div style="width: 800px;height: 800px">
			<canvas id="myChart"></canvas>
		</div>

		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: <?php echo json_encode($label); ?>,
					datasets: [{
						label: 'Grafik Penjualan',
						data: <?php echo json_encode($jumlah_produk); ?>,
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