<?php

        $sql_cek = "SELECT * FROM tb_profil";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		{

		
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-flag"></i> Profil UKM PRAMUKA</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Instansi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="<?php echo $data_cek['nama_instansi']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Unit Kegiatan Mahasiswa</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="unit_kegiatan_mhs" name="unit_kegiatan_mhs" value="<?php echo $data_cek['unit_kegiatan_mhs']; ?>"
					 readonly/>
				</div>
		</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Racana</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="racana" name="racana" value="<?php echo $data_cek['racana']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bidang</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['bidang']; ?>"
					 readonly/>
				</div>
			</div>

		</div>
	</form>
</div>

<?php
		}
	$sql = $koneksi->query("SELECT count(npsn) as lokal1 from tb_datasekolah");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal1=$data['lokal1'];
	}
?>

<?php
		
	$sql = $koneksi->query("SELECT count(nip) as lokal2 from tb_pegawai");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal2=$data['lokal2'];
	}
?>

<?php
		
	$sql = $koneksi->query("SELECT count(nuptk) as lokal3 from tb_data_honor");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal3=$data['lokal3'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_pengguna) as rhmn from tb_pengguna");
	while ($data= $sql->fetch_assoc()) {
	
		$rhmn=$data['rhmn'];
	}
?>



<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal2;  ?>
				</h3>

				<p>Jumlah Pegawai PNS</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pegawai" class="small-box-footer">Selengkapnya
				
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal3;  ?>
				</h3>

				<p>Jumlah Pegawai Honor</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-guru_honor" class="small-box-footer">Selengkapnya
				
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $lokal1;  ?>
				</h3>

				<p>Jumlah Sekolah</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-sekolah" class="small-box-footer">Selengkapnya
				
			</a>
		</div>
	</div>
	<!-- ./col -->
	
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $rhmn;  ?>
				</h3>

				<p>User</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="index.php?page=data-pengguna" class="small-box-footer">Informasi
			</a>
		</div>
	</div>