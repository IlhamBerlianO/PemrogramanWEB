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
<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Grafik Bar Covid Menggunakan Chart JS</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<script type="text/javascript" src="Chart.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Total Cases</h3>
					<div style="width: 600px;height: 330px">
						<canvas id="myChart1"> </canvas>
					</div>

					<script>
						var ctx1 = document.getElementById("myChart1").getContext('2d');
						var myChart1 = new Chart(ctx1, {
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
				</div>
				<div class="col-md-6">
					<h3>Total Deaths</h3>
					<div style="width: 600px;height: 330px">
						<canvas id="myChart2"> </canvas>
					</div>

					<script>
						var ctx2 = document.getElementById("myChart2").getContext('2d');
						var myChart2 = new Chart(ctx2, {
							type: 'bar',
							data: {
								labels: <?php echo json_encode($country2); ?>,
								datasets: [{
									label: 'Total Deaths Covid Disetiap Negara',
									data: <?php echo json_encode($tot_det); ?>,
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
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3>Total Recovered</h3>
					<div style="width: 600px;height: 330px">
						<canvas id="myChart3"> </canvas>
					</div>

					<script>
						var ctx3 = document.getElementById("myChart3").getContext('2d');
						var myChart3 = new Chart(ctx3, {
							type: 'bar',
							data: {
								labels: <?php echo json_encode($country3); ?>,
								datasets: [{
									label: 'Total Recovered Covid Disetiap Negara',
									data: <?php echo json_encode($tot_rec); ?>,
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
				</div>
				<div class="col-md-6">
					<h3>Active Cases</h3>
					<div style="width: 600px;height: 330px">
						<canvas id="myChart4"> </canvas>
					</div>

					<script>
						var ctx4 = document.getElementById("myChart4").getContext('2d');
						var myChart4 = new Chart(ctx4, {
							type: 'bar',
							data: {
								labels: <?php echo json_encode($country4); ?>,
								datasets: [{
									label: 'Active Cases Covid Disetiap Negara',
									data: <?php echo json_encode($tot_act); ?>,
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
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3>Total Tests</h3>
					<div style="width: 600px;height: 330px">
						<canvas id="myChart5"> </canvas>
					</div>

					<script>
						var ctx5 = document.getElementById("myChart5").getContext('2d');
						var myChart5 = new Chart(ctx5, {
							type: 'bar',
							data: {
								labels: <?php echo json_encode($country5); ?>,
								datasets: [{
									label: 'Total Tests Covid Disetiap Negara',
									data: <?php echo json_encode($tot_tes); ?>,
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
				</div>
			</div>
		</div>
	</body>
</html>