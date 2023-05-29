<?php
	include('koneksi.php');
	$covid = mysqli_query($koneksi,"SELECT * FROM tb_covid");
	while($row = mysqli_fetch_array($covid)){
		$country[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_case) AS total_case FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_case[] = $row['total_case'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Grafik Bar Covid Menggunakan Chart JS</title>
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
					labels: <?php echo json_encode($country); ?>,
					datasets: [{
						label: 'Total Case Covid Disetiap Negara',
						data: <?php echo json_encode($tot_case); ?>,
						backgroundColor: 'rgba(173, 216, 230, 1)',
						borderColor: 'rgba(0, 0, 255, 1)',
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