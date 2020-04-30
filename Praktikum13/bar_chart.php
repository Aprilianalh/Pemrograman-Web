<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"select * from tb_coronavirus");
while($row = mysqli_fetch_array($query)){
	$nama_negara[] = $row['Country'];
	$jumlah_kasus[] = $row['Total Cases'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> GRAFIK KASUS CORONAVIRUS </title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<h3 style="padding-left: 10%"> GRAFIK PERBANDINGAN TOTAL CASES 10 NEGARA </h3>
	<h4 style="padding-left: 25%"> - BAR CHART - </h4>
	<div style="width: 1000px;height: 1000px">
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik Kasus',
					data: <?php echo json_encode($jumlah_kasus); ?>,
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
</body>
</html>