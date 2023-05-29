<?php
	include('koneksi.php');
	$produk = mysqli_query($koneksi,"SELECT * FROM tb_covid");
	while($row = mysqli_fetch_array($produk)){
		$country[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_case) AS total_case FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_case[] = $row['total_case'];
	}
?>
<!doctype html>
<html>
	<head>
		<title>Membuat Grafik Bar Covid Menggunakan Pie Chart JS</title>
		<script type="text/javascript" src="Chart.js"></script>
	</head>

	<body>
		<div id="canvas-holder" style="width:50%">
			<canvas id="chart-area"></canvas>
		</div>

		<script>
			var config = {
				type: 'pie',
				data: {
					datasets: [{
						data:<?php echo json_encode($tot_case); ?>,
						backgroundColor: [
						'rgba(6, 141, 169, 0.2)',
						'rgba(200, 142, 167, 0.2)',
						'rgba(100, 56, 67, 0.2)',
						'rgba(184, 98, 27, 0.2)',
						'rgba(57, 91, 100, 0.2)',
						'rgba(92, 82, 127, 0.2)',
						'rgba(4, 101, 130, 0.2)',
						'rgba(255, 227, 222, 0.2)',
						'rgba(125, 6, 51, 0.2)',
						'rgba(144, 55, 73, 0.2)'
						],
						borderColor: [
						'rgba(6, 141, 169, 1)',
						'rgba(200, 142, 167, 1)',
						'rgba(100, 56, 67, 1)',
						'rgba(184, 98, 27, 1)',
						'rgba(57, 91, 100, 1)',
						'rgba(92, 82, 127, 1)',
						'rgba(4, 101, 130, 1)',
						'rgba(255, 227, 222, 1)',
						'rgba(125, 6, 51, 1)',
						'rgba(144, 55, 73, 1)'
						],
						label: 'Presentase Covid Disetiap Negara'
					}],
					labels: <?php echo json_encode($country); ?>
				},
				options: {
					responsive: true
				}
			};

			window.onload = function() {
				var ctx = document.getElementById('chart-area').getContext('2d');
				window.myPie = new Chart(ctx, config);
			};

			document.getElementById('randomizeData').addEventListener('click', function() {
				config.data.datasets.forEach(function(dataset) {
					dataset.data = dataset.data.map(function() {
						return randomScalingFactor();
					});
				});

				window.myPie.update();
			});

			var colorNames = Object.keys(window.chartColors);
			document.getElementById('addDataset').addEventListener('click', function() {
				var newDataset = {
					backgroundColor: [],
					data: [],
					label: 'New dataset ' + config.data.datasets.length,
				};

				for (var index = 0; index < config.data.labels.length; ++index) {
					newDataset.data.push(randomScalingFactor());
					var colorName = colorNames[index % colorNames.length];
					var newColor = window.chartColors[colorName];
					newDataset.backgroundColor.push(newColor);
				}
				config.data.datasets.push(newDataset);
				window.myPie.update();
			});

			document.getElementById('removeDataset').addEventListener('click', function() {
				config.data.datasets.splice(0, 1);
				window.myPie.update();
			});
		</script>
	</body>
</html>
