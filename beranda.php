<?php
include 'koneksi.php';
if(!isset($_SESSION['login'])) {
	header("Location: " . getBaseURL());
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php';?>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php include 'menu/navbar.php';?>
		</div>
		<div class="sidebar sidebar-style-2">
			<?php include 'menu/sidebar.php';?>
		</div>
		<div class="main-panel">
			<div class="container">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Selamat Datang <?= $online['nama_lengkap'];?></h2>
								<!-- <h5 class="text-white op-7 mb-2">Sistem Informasi Monitoring Sub Kontraktor di PT HRS</h5> -->
							</div>
						</div>
					</div>
				</div>
					<div class="page-inner mt--5">
						<div class="row mt-2">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<h2>Data Penyakit Bulan Ini (<?= formatDateIndonesia(date('F'));?>) 2023</h2>
										<div class="table-responsive">
											<table id="dashboardhauling" class="display table table-striped table-hover nowrap" style="width:100%">
												<thead align="center">
													<tr>
														<th>No</th>
														<th>Kecamatan</th>
														<th>Desa</th>
														<th>Nama Penyakit</th>
														<th>Nama Puskesmas</th>
														<th>Nama Pasien</th>
													</tr>
												</thead>
												<tbody>
												<?php 
												$no = 1;
												$tahun = date('Y');
												$bulan = date('m');
												$query = mysqli_query($conn, "SELECT * FROM tb_penyebaran, tb_penyakit, tb_desa, tb_kecamatan, tb_puskesmas WHERE tb_puskesmas.id_desa=tb_desa.id_desa AND fk_kecamatan=tb_kecamatan.id_kecamatan AND tb_penyebaran.id_penyakit=tb_penyakit.id_penyakit AND tb_penyebaran.id_puskesmas=tb_puskesmas.id_puskesmas AND date(tanggal_penyebaran) LIKE '$tahun-$bulan%' ORDER BY date(tanggal_penyebaran) DESC");
												while($row = mysqli_fetch_array($query)) {
													?>
													<tr>
														<td><?= $no++;?></td>
														<td><?= $row['nama_kecamatan'];?></td>
														<td><?= $row['nama_desa'];?></td>
														<td><?= $row['nama_penyakit'];?></td>
														<td><?= $row['nama_puskesmas'];?></td>
														<td><?= $row['nama_pasien'];?></td>
													</tr>
												<?php } ?>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

		</div>
		<footer class="footer">
			<?php include 'menu/footer.php';?>
		</footer>
	</div>
</div>
<?php include 'menu/script.php';?>
<script>
        // $("#status").change(function() {
        //     $("form").submit();
        // });
	<?php
	$getTransporter = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_transporter");
	$rowTransporter = mysqli_fetch_array($getTransporter);
	$getArmada = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_armada");
	$rowArmada = mysqli_fetch_array($getArmada);
	$getDriver = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_driver");
	$rowDriver = mysqli_fetch_array($getDriver);
	?>
	Circles.create({
		id:'circles-1',
		radius:45,
		value:60,
		maxValue:100,
		width:7,
		text: <?= $rowTransporter['jumlah'];?>,
		colors:['#f1f1f1', '#FF9E27'],
		duration:400,
		wrpClass:'circles-wrp',
		textClass:'circles-text',
		styleWrapper:true,
		styleText:true
	})

	Circles.create({
		id:'circles-2',
		radius:45,
		value:70,
		maxValue:100,
		width:7,
		text: <?= $rowArmada['jumlah'];?>,
		colors:['#f1f1f1', '#2BB930'],
		duration:400,
		wrpClass:'circles-wrp',
		textClass:'circles-text',
		styleWrapper:true,
		styleText:true
	})

	Circles.create({
		id:'circles-3',
		radius:45,
		value:40,
		maxValue:100,
		width:7,
		text: <?= $rowDriver['jumlah'];?>,
		colors:['#f1f1f1', '#F25961'],
		duration:400,
		wrpClass:'circles-wrp',
		textClass:'circles-text',
		styleWrapper:true,
		styleText:true
	})

	<?php
	$month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	$myColumn = array();
	$queryChart = mysqli_query($conn, "SELECT Months.m AS bulan, IFNULL(SUM(tb_produksi.berat_bersih / 1000), 0) AS jumlah FROM (SELECT 1 as m UNION SELECT 2 as m UNION SELECT 3 as m UNION SELECT 4 as m UNION SELECT 5 as m UNION SELECT 6 as m UNION SELECT 7 as m UNION SELECT 8 as m UNION SELECT 9 as m UNION SELECT 10 as m UNION SELECT 11 as m UNION SELECT 12 as m) as Months LEFT JOIN tb_produksi ON Months.m = MONTH(tb_produksi.waktu_masuk) AND jenis_pengangkutan='Hauling' GROUP BY Months.m ORDER BY Months.m ASC");
	while($rowChart = mysqli_fetch_array($queryChart)) {
		$myColumn1[] = $rowChart['jumlah'];
	}

	$queryChart = mysqli_query($conn, "SELECT Months.m AS bulan, IFNULL(SUM(tb_produksi.berat_bersih / 1000), 0) AS jumlah FROM (SELECT 1 as m UNION SELECT 2 as m UNION SELECT 3 as m UNION SELECT 4 as m UNION SELECT 5 as m UNION SELECT 6 as m UNION SELECT 7 as m UNION SELECT 8 as m UNION SELECT 9 as m UNION SELECT 10 as m UNION SELECT 11 as m UNION SELECT 12 as m) as Months LEFT JOIN tb_produksi ON Months.m = MONTH(tb_produksi.waktu_masuk) AND jenis_pengangkutan='Getting' GROUP BY Months.m ORDER BY Months.m ASC");
	while($rowChart = mysqli_fetch_array($queryChart)) {
		$myColumn2[] = $rowChart['jumlah'];
	}
	$showChart1 = implode(", ", $myColumn1);
	$showChart2 = implode(", ", $myColumn2);
	?>

	var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

	var mytotalIncomeChart = new Chart(totalIncomeChart, {
		type: 'bar',
		data: {
			labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
			datasets : [{
				label: "TOTAL HAULING",
				backgroundColor: '#ff9e27',
				borderColor: 'rgb(23, 125, 255)',
				data: [<?= $showChart1;?>],
			},
			{
				label: "TOTAL GETTING",
				backgroundColor: '#000',
				borderColor: 'rgb(23, 125, 255)',
				data: [<?= $showChart2;?>],
			}
			],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						display: true
					},
					gridLines : {
						drawBorder: false,
						display : true
					}
				}],
				xAxes : [ {
					gridLines : {
						drawBorder: false,
						display : true
					}
				}]
			}
		}
	});

	<?php
	$month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	$arrBulanTarget = [];
	$arrBulanBersih = [];

	$myColumn3 = array();
	$queryChart3 = mysqli_query($conn, "SELECT Months.m AS bulan, IFNULL(SUM(tb_target_produksi.volume_bulanan), 0) AS jumlah FROM (SELECT 1 as m UNION SELECT 2 as m UNION SELECT 3 as m UNION SELECT 4 as m UNION SELECT 5 as m UNION SELECT 6 as m UNION SELECT 7 as m UNION SELECT 8 as m UNION SELECT 9 as m UNION SELECT 10 as m UNION SELECT 11 as m UNION SELECT 12 as m) as Months LEFT JOIN tb_target_produksi ON Months.m = MONTH(DATE_FORMAT(CONCAT(tb_target_produksi.tahun, '-', tb_target_produksi.bulan, '-01'), '%Y-%m-%d')) GROUP BY Months.m ORDER BY Months.m ASC");
	while($rowChart3 = mysqli_fetch_array($queryChart3)) {
		$myColumn3[$rowChart3['bulan']] = $rowChart3['jumlah'];
		if($rowChart3['jumlah'] != 0) {
			$arrBulanTarget[$rowChart3['bulan']] = $rowChart3['bulan'];
		}
	}

	$myColumn4 = array();
	$queryChart4 = mysqli_query($conn, "SELECT Months.m AS bulan, IFNULL(SUM(tb_produksi.berat_bersih / 1000), 0) AS jumlah FROM (SELECT 1 as m UNION SELECT 2 as m UNION SELECT 3 as m UNION SELECT 4 as m UNION SELECT 5 as m UNION SELECT 6 as m UNION SELECT 7 as m UNION SELECT 8 as m UNION SELECT 9 as m UNION SELECT 10 as m UNION SELECT 11 as m UNION SELECT 12 as m) as Months LEFT JOIN tb_produksi ON Months.m = MONTH(tb_produksi.waktu_masuk) GROUP BY Months.m ORDER BY Months.m ASC");
	while($rowChart4 = mysqli_fetch_array($queryChart4)) {
		$myColumn4[$rowChart4['bulan']] = $rowChart4['jumlah'];
		if($rowChart4['jumlah'] != 0) {
			$arrBulanBersih[$rowChart4['bulan']] = $rowChart4['bulan'];
		}
	}

	foreach($arrBulanBersih as $num) {
		if (!in_array($num, $arrBulanTarget)) {
			unset($arrBulanBersih[$num]);
			$myColumn4[$num] = 0;
		} 
	}

	$myColumn5 = [];

	foreach ($myColumn3 as $key1 => $value1) {
		foreach ($myColumn4 as $key2 => $value2) {
			if($key1 == $key2) {
				if($value1 != 0 && $value2 != 0) {
					$target_produksi = $value1;
					$volume = $value2;
					$persentase = round($volume / $target_produksi * 100);
					$myColumn5[$key1] = $persentase;
				}else {
					$myColumn5[$key1] = 0;
				}
			}
		}
	}

	$showChart3 = implode(", ", $myColumn3);
	$showChart4 = implode(", ", $myColumn4);
	$showChart5 = implode(", ", $myColumn5);
	?>

	var totalIncomeChart = document.getElementById('totalIncomeChart2').getContext('2d');

	var mytotalIncomeChart = new Chart(totalIncomeChart, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
			datasets : [{
				type: 'bar',
				label: "PLAN (MT)",
				yAxisID: 'A',
				backgroundColor: '#155399',
				borderColor: 'rgb(23, 125, 255)',
				data: [<?= $showChart3;?>],
			},
			{
				type: 'bar',
				label: "ACTUAL (MT)",
				yAxisID: 'A',
				backgroundColor: '#00fc37',
				borderColor: 'rgb(23, 125, 255)',
				data: [<?= $showChart4;?>],
			},
			{
				type: 'line',
				label: "ACH (%)",
				yAxisID: 'B',
				borderColor: 'rgb(44, 252, 3)',
				data: [<?= $showChart5;?>],
			}
			],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: true,
			},
			scales: {
				yAxes: [{
					id: 'A',
					position: 'left',
					ticks: {
						display: true
					},
					gridLines : {
						drawBorder: false,
						display : true
					},
					ticks: {
								callback: function(value, index, ticks) {
									return value + ' MT';
								}
							}
				},{
					id: 'B',
					position: 'right',
					ticks: {
						display: true
					},
					gridLines : {
						drawBorder: false,
						display : true
					},
					ticks: {
						callback: function(value, index, ticks) {
							return value + ' %';
						}
					}
				}],
				xAxes : [ {
					gridLines : {
						drawBorder: false,
						display : true
					}
				}]
			}
		}
	});

	$(document).ready(function () {
		$('#dashboardhauling').DataTable({
			scrollY: 400,
			scrollX: true,
			});
		});
</script>
</body>
</html>