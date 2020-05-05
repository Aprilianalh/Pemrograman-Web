<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"select * from tb_covid");
while($row = mysqli_fetch_array($query)){
	$nama_negara[] = $row['Country'];
	$kematian_baru[] = $row['New Deaths'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> GRAFIK KASUS CORONAVIRUS </title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" style="width: 1000px; height: 1000px; padding-left: 20%;">
	<tr><td>
	<p style="text-align: center;"><b> GRAFIK PERBANDINGAN NEW DEATHS 10 NEGARA </b></p>
	<p style="text-align: center;"><b> - LINE CHART - </b></p>
	<div id="canvas-holder2" style="width: 800px; height: 500px; padding-left: 5%;">
		<canvas id="myLineChart"></canvas>
	</div>
 
	<script type="text/javascript">
		var ctx = document.getElementById("myLineChart").getContext('2d');
		var myLineChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik Kasus',
					data: <?php echo json_encode($kematian_baru); ?>,
					backgroundColor: 'rgba(54, 162, 235, 0.2)',
					borderColor: 'rgba(54, 162, 235, 1)',
					borderWidth: 1,
				}]
			},
			options: {
				scales: {
					yAxes: [{
							responsive: true
					}]
				}
			}
		});
	</script>
	</td></tr>

	<tr><td>
	<p style="text-align: center;"><b> GRAFIK PERBANDINGAN NEW DEATHS 10 NEGARA </b></p>
	<p style="text-align: center;"><b> - BAR CHART - </b></p>
	<div style="width: 800px; height: 500px; padding-left: 5%;">
		<canvas id="myChart"></canvas>
	</div>
 
	<script type="text/javascript">
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik Kasus',
					data: <?php echo json_encode($kematian_baru); ?>,
					backgroundColor: 'rgba(54, 162, 235, 0.2)',
					borderColor: 'rgba(54, 162, 235, 1)',
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
	</td></tr>

	<tr><td>
	<p style="text-align: center;"><b> GRAFIK PERBANDINGAN NEW DEATHS 10 NEGARA </b></p>
	<p style="text-align: center;"><b> - PIE CHART - </b></p>
	<div id="canvas-holder3" style="width:900px; height: 550px;">
		<canvas id="chart-area"></canvas>
	</div>
	<script type="text/javascript">
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($kematian_baru); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 136, 121, 0.2)',
					'rgba(104, 43, 71, 0.2)',
					'rgba(112, 255, 255, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(0, 0, 130, 0.2)',
					'rgba(0, 0, 0, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 136, 121, 1)',
					'rgba(104, 43, 71, 1)',
					'rgba(112, 255, 255, 1)',
					'rgba(255, 0, 0, 1)',
					'rgba(0, 0, 130, 1)',
					'rgba(0, 0, 0, 1)'
					],
					label: 'Grafik Kasus'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
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
	</td></tr>

	<tr><td>
	<p style="text-align: center;"><b> GRAFIK PERBANDINGAN NEW DEATHS 10 NEGARA </b></p>
	<p style="text-align: center;"><b> - DOUGHNUT CHART - </b></p>
	<div style="width: 900px; height: 550px;">
		<canvas id="doughnut"></canvas>
	</div>
 
	<script type="text/javascript">
		var ctx = document.getElementById("doughnut").getContext('2d');
		var doughnut = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik Kasus',
					data: <?php echo json_encode($kematian_baru); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(255, 136, 121, 0.2)',
					'rgba(104, 43, 71, 0.2)',
					'rgba(112, 255, 255, 0.2)',
					'rgba(255, 0, 0, 0.2)',
					'rgba(0, 0, 130, 0.2)',
					'rgba(0, 0, 0, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 136, 121, 1)',
					'rgba(104, 43, 71, 1)',
					'rgba(112, 255, 255, 1)',
					'rgba(255, 0, 0, 1)',
					'rgba(0, 0, 130, 1)',
					'rgba(0, 0, 0, 1)'
					],
				}]
			},
			options: {
				responsive: true
			}
		});
	</script>
	</td></tr>
	</table>
</body>
</html>