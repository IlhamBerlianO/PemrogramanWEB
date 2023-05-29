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
		<title>Membuat Grafik Line Covid Menggunakan Chart JS</title>

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
                        <canvas id="stackedLine"></canvas>
                    </div>

                    <script>
                        var ctx = document.getElementById("stackedLine").getContext('2d');
                        var stackedLine = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($country); ?>,
                                datasets: [{
                                    label: 'Total Cases Covid Disetiap Negara',
                                    data: <?php echo json_encode($tot_case); ?>,
                                    backgroundColor: 'rgba(173, 216, 230, 1)',
                                    borderColor: 'rgba(0, 0, 255, 1)'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        stacked: true
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <h3>Total Deaths</h3>
                    <div style="width: 600px;height: 330px">
                        <canvas id="stackedLine2"></canvas>
                    </div>

                    <script>
                        var ctx2 = document.getElementById("stackedLine2").getContext('2d');
                        var stackedLine2 = new Chart(ctx2, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($country2); ?>,
                                datasets: [{
                                    label: 'Total Deaths Covid Disetiap Negara',
                                    data: <?php echo json_encode($tot_det); ?>,
                                    backgroundColor: 'rgba(173, 216, 230, 1)',
                                    borderColor: 'rgba(0, 0, 255, 1)'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        stacked: true
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
                        <canvas id="stackedLine3"></canvas>
                    </div>

                    <script>
                        var ctx3 = document.getElementById("stackedLine3").getContext('2d');
                        var stackedLine3 = new Chart(ctx3, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($country3); ?>,
                                datasets: [{
                                    label: 'Total Recovered Covid Disetiap Negara',
                                    data: <?php echo json_encode($tot_rec); ?>,
                                    backgroundColor: 'rgba(173, 216, 230, 1)',
                                    borderColor: 'rgba(0, 0, 255, 1)'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        stacked: true
                                    }]
                                }
                            }
                        });
                    </script>
				</div>
				<div class="col-md-6">
					<h3>Active Cases</h3>
					<div style="width: 600px;height: 330px">
                        <canvas id="stackedLine4"></canvas>
                    </div>

                    <script>
                        var ctx4 = document.getElementById("stackedLine4").getContext('2d');
                        var stackedLine4 = new Chart(ctx4, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($country4); ?>,
                                datasets: [{
                                    label: 'Active Cases Covid Disetiap Negara',
                                    data: <?php echo json_encode($tot_act); ?>,
                                    backgroundColor: 'rgba(173, 216, 230, 1)',
                                    borderColor: 'rgba(0, 0, 255, 1)'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        stacked: true
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
                        <canvas id="stackedLine5"></canvas>
                    </div>

                    <script>
                        var ctx5 = document.getElementById("stackedLine5").getContext('2d');
                        var stackedLine5 = new Chart(ctx5, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($country5); ?>,
                                datasets: [{
                                    label: 'Total Tests Covid Disetiap Negara',
                                    data: <?php echo json_encode($tot_tes); ?>,
                                    backgroundColor: 'rgba(173, 216, 230, 1)',
                                    borderColor: 'rgba(0, 0, 255, 1)'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        stacked: true
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