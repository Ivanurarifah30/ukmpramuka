<div class="sidebar-wrapper scrollbar scrollbar-inner">
	<div class="sidebar-content">
		<div class="user">
			<div class="avatar-sm float-left mr-2">
				<img src="assets/img/avatar.png" alt="Logo Avatar" class="avatar-img rounded-circle">
			</div>
			<div class="info">
				<a>
					<span>
						<?= strtok($online['nama_lengkap'], "");?>
						<span class="user-status"><?= $online['status'];?></span>
					</span>
				</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php if($online['status'] == "Admin") { ?>
		<ul class="nav nav-primary">
			<li class="nav-item active">
				<a href="beranda">
					<i class="fas fa-home"></i>
					<p>Beranda</p>
				</a>
			</li>
			<li class="nav-section">
				<span class="sidebar-mini-icon">
					<i class="fa fa-ellipsis-h"></i>
				</span>
				<h4 class="text-section">Daftar Menu</h4>
			</li>
			<li class="nav-item">
				<a data-toggle="collapse" href="#base">
					<i class="fas fa-layer-group"></i>
					<p>Data</p>
					<span class="caret"></span>
				</a>
				<div class="collapse" id="base">
					<ul class="nav nav-collapse">
							<li>
								<a href="data_anggota">
									<span class="sub-item">Data Anggota</span>
								</a>
							</li>
							<li>
								<a href="data_pembina">
									<span class="sub-item">Data Pembina</span>
								</a>
							</li>
							</li>
							<li>
								<a href="data_kdr">
									<span class="sub-item">Data KDR</span>
								</a>
							</li>
							<li>
								<a href="data_proker">
									<span class="sub-item">Data Proker</span>
								</a>
							</li>
							<li>
								<a href="data_barang_kabagracana">
									<span class="sub-item">Data Kabag Racana</span>
								</a>
							</li>
							<li>
								<a href="arsipan_data">
									<span class="sub-item">Arsipan Data</span>
								</a>
							</li>
							<li>
								<a href="data_pengguna">
									<span class="sub-item">Data Pengguna</span>
								</a>
							</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a data-toggle="collapse" href="#sidebarLayouts">
					<i class="fas fa-database"></i>
					<p>LPJ</p>
					<span class="caret"></span>
				</a>
				<div class="collapse" id="sidebarLayouts">
					<ul class="nav nav-collapse">
						<li>
							<a href="lpj_kegiatan">
								<span class="sub-item">LPJ Kegiatan</span>
							</a>
						</li>
						<li>
							<a href="lpj_kepengurusan">
								<span class="sub-item">LPJ Kepengurusan</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#laporan">
						<i class="fas fa-print"></i>
						<p>Laporan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="laporan">
						<ul class="nav nav-collapse">
							 <li>
								<a href="print/c-puskesmas">
									<span class="sub-item">Puskesmas</span>
								</a>
							</li>
							<!-- <li>
								<a href="laporan-kecamatan">
									<span class="sub-item">Penyakit Menular Per Kecamatan</span>
								</a>
							</li> -->
							<li>
								<a href="laporan-penyakit">
									<span class="sub-item">Penyakit Terbanyak</span>
								</a>
							</li>
							<li>
								<a href="laporan-penyebaran">
									<span class="sub-item">Penyebaran Penyakit</span>
								</a>
							</li>
							<li>
								<a href="laporan-meninggal">
									<span class="sub-item">Meninggal Dunia</span>
								</a>
							</li>
							<li>
								<a href="laporan-sembuh">
									<span class="sub-item">Pasien Sembuh</span>
								</a>
							</li>
							<li>
								<a href="laporan-perawatan">
									<span class="sub-item">Pasien Dalam Perawatan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			<?php }elseif($online['level'] == "Puskesmas") { ?>
				<ul class="nav nav-primary">
			<li class="nav-item active">
				<a href="beranda">
					<i class="fas fa-home"></i>
					<p>Beranda</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="pasien">
					<i class="fas fa-users"></i>
					<p>Data Pasien</p>
				</a>
			</li>
			<li class="nav-section">
				<span class="sidebar-mini-icon">
					<i class="fa fa-ellipsis-h"></i>
				</span>
				<h4 class="text-section">Daftar Menu</h4>
			</li>
			<li class="nav-item">
				<a data-toggle="collapse" href="#sidebarLayouts">
					<i class="fas fa-database"></i>
					<p>Transaksi</p>
					<span class="caret"></span>
				</a>
				<div class="collapse" id="sidebarLayouts">
					<ul class="nav nav-collapse">
						<li>
							<a href="penyebaran">
								<span class="sub-item">Penyebaran Penyakit </span>
							</a>
						</li>
						<li>
							<a href="meninggal">
								<span class="sub-item">Meninggal Dunia</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
					<a data-toggle="collapse" href="#laporan">
						<i class="fas fa-print"></i>
						<p>Laporan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="laporan">
						<ul class="nav nav-collapse">
							<li>
								<a href="laporan-penyebaran">
									<span class="sub-item">Penyebaran Penyakit</span>
								</a>
							</li>
							<li>
								<a href="laporan-meninggal">
									<span class="sub-item">Meninggal Dunia</span>
								</a>
							</li>
							<li>
								<a href="laporan-sembuh">
									<span class="sub-item">Pasien Sembuh</span>
								</a>
							</li>
							<li>
								<a href="laporan-perawatan">
									<span class="sub-item">Pasien Dalam Perawatan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			<?php } ?>
	</div>
</div>