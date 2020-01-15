	<a href="<?= base_url(); ?>cGaji" class="btn btn-outline-info btn-light float-right row mr-4">KEMBALI</a>
	<!-- <body background="https://webdesignerwall.com/wp-content/uploads/2014/05/animated-backgrounds.jpg"> -->

	<!DOCTYPE html>
	<html>

	<head>
		<title>Grafik Gaji Pegawai</title>
		<script type="text/javascript" src="assets/package/dist/Chart.js"></script>
		<?php
		foreach ($data as $pr) {
			$GRADE[] = $pr->GRADE;
			$GAJI[] = (float) $pr->GAJI;
		}
		?>
	</head>

	<body>
		<style type="text/css">
			body {
				font-family: roboto;
			}
		</style>

		<h2 class="text-info row-ml-5">Grafik Pegawai</h2>

		<div style="width: 1000px;height: 1000px">
			<canvas id="myChart"></canvas>
		</div>


		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: <?php echo json_encode($GAJI); ?>,
					datasets: [{
						label: '# of Votes',
						data: <?php echo json_encode($GRADE); ?>,
						backgroundColor: [
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgb(0, 51, 153, 0.2)',
						],
						borderColor: [
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		</script>
	</body>

	</html>




	<!-- 
	data <?= json_encode($ID); ?>
	data <?= json_encode($GAJI); ?> 
	❤️❤
	-->