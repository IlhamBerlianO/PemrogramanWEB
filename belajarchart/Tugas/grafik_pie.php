<?php
	include('koneksi.php');
	$covid = mysqli_query($koneksi,"SELECT * FROM tb_covid");
	while($row = mysqli_fetch_array($covid)){
		$country[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_case) AS total_case FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_case[] = $row['total_case'];
	}
	mysqli_data_seek($covid, 0); // Mengembalikan pointer hasil query ke awal

	while($row = mysqli_fetch_array($covid)){
		$country2[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_deaths) AS total_deaths FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_det[] = $row['total_deaths'];
	}
	mysqli_data_seek($covid, 0); // Mengembalikan pointer hasil query ke awal

	while($row = mysqli_fetch_array($covid)){
		$country3[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_recovered) AS total_recovered FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_rec[] = $row['total_recovered'];
	}
	mysqli_data_seek($covid, 0); // Mengembalikan pointer hasil query ke awal

	while($row = mysqli_fetch_array($covid)){
		$country4[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(active_cases) AS active_cases FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_act[] = $row['active_cases'];
	}
	mysqli_data_seek($covid, 0); // Mengembalikan pointer hasil query ke awal

	while($row = mysqli_fetch_array($covid)){
		$country5[] = $row['country'];
		$query = mysqli_query($koneksi,"SELECT SUM(total_tests) AS total_tests FROM tb_covid WHERE id='".$row['id']."'");
		$row = $query->fetch_array();
		$tot_tes[] = $row['total_tests'];
	}
?>
<!doctype html>
<html>
	<head>
		<title>Membuat Grafik Pie Covid Menggunakan Chart JS</title>
		
        <!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<script type="text/javascript" src="Chart.js"></script>
	</head>

	<body>
	<div class="container">
            <div class="row">
                <div class="col-md-6">
					<h3>Total Cases</h3>
					<div id="canvas-holder">
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
									label: 'Total Case Covid Disetiap Negara'
								}],
								labels: <?php echo json_encode($country); ?>
							},
							options: {
								responsive: true
							}
						};

						document.addEventListener('DOMContentLoaded', function() {
							var ctx = document.getElementById('chart-area').getContext('2d');
							window.myPie = new Chart(ctx, config);
						});
					</script>
				</div>
				<div class="col-md-6">
                    <h3>Total Deaths</h3>
					<div id="canvas-holder">
						<canvas id="chart-area2"></canvas>
					</div>

					<script>
						var config2 = {
							type: 'pie',
							data: {
								datasets: [{
									data:<?php echo json_encode($tot_det); ?>,
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
									label: 'Total Deaths Covid Disetiap Negara'
								}],
								labels: <?php echo json_encode($country2); ?>
							},
							options: {
								responsive: true
							}
						};

						document.addEventListener('DOMContentLoaded', function() {
							var ctx2 = document.getElementById('chart-area2').getContext('2d');
							window.myPie = new Chart(ctx2, config2);
						});
					</script>
				</div>
			</div>
			<div class="row">
                <div class="col-md-6">
					<h3>Total Recovered</h3>
					<div id="canvas-holder">
						<canvas id="chart-area3"></canvas>
					</div>

					<script>
						var config3 = {
							type: 'pie',
							data: {
								datasets: [{
									data:<?php echo json_encode($tot_rec); ?>,
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
									label: 'Total Recovered Covid Disetiap Negara'
								}],
								labels: <?php echo json_encode($country3); ?>
							},
							options: {
								responsive: true
							}
						};

						document.addEventListener('DOMContentLoaded', function() {
							var ctx3 = document.getElementById('chart-area3').getContext('2d');
							window.myPie = new Chart(ctx3, config3);
						});
					</script>
				</div>
				<div class="col-md-6">
                    <h3>Active Cases</h3>
					<div id="canvas-holder">
						<canvas id="chart-area4"></canvas>
					</div>

					<script>
						var config4 = {
							type: 'pie',
							data: {
								datasets: [{
									data:<?php echo json_encode($tot_act); ?>,
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
									label: 'Active Cases Covid Disetiap Negara'
								}],
								labels: <?php echo json_encode($country4); ?>
							},
							options: {
								responsive: true
							}
						};

						document.addEventListener('DOMContentLoaded', function() {
							var ctx4 = document.getElementById('chart-area4').getContext('2d');
							window.myPie = new Chart(ctx4, config4);
						});
					</script>
				</div>
			</div>	
			<div class="row">
                <div class="col-md-6">
					<h3>Total Tests</h3>
					<div id="canvas-holder">
						<canvas id="chart-area5"></canvas>
					</div>

					<script>
						var config5 = {
							type: 'pie',
							data: {
								datasets: [{
									data:<?php echo json_encode($tot_rec); ?>,
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
									label: 'Total Tests Covid Disetiap Negara'
								}],
								labels: <?php echo json_encode($country5); ?>
							},
							options: {
								responsive: true
							}
						};

						document.addEventListener('DOMContentLoaded', function() {
							var ctx5 = document.getElementById('chart-area5').getContext('2d');
							window.myPie = new Chart(ctx5, config5);
						});
					</script>
				</div>
			</div>
		</div>
	</body>
</html>