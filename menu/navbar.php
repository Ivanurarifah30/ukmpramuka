<div class="logo-header" data-background-color="light-blue">
	<a href="beranda" class="logo">
		<img src="assets/img/logo.png" alt="navbar brand" class="navbar-brand img-fluid" style="height: 55px;">
	</a>
	<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			<i class="icon-menu"></i>
		</span>
	</button>
	<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
	<div class="nav-toggle">
		<button class="btn btn-toggle toggle-sidebar">
			<i class="icon-menu"></i>
		</button>
	</div>
</div>
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue">
	<div class="container-fluid">
		<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">


			
			<!-- <li class="nav-item dropdown hidden-caret">
				<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
					<i class="fas fa-layer-group"></i>
				</a>
				<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
					<div class="quick-actions-header">
						<span class="title mb-1">Aksi Cepat</span>
						<span class="subtitle op-8">Menu</span>
					</div>
					<div class="quick-actions-scroll scrollbar-outer">
						<div class="quick-actions-items">
							<div class="row m-0">
								<a class="col-6 col-md-4 p-0" href="armada">
									<div class="quick-actions-item">
										<div class="avatar-item bg-danger rounded-circle">
											<i class="far fa-calendar-alt"></i>
										</div>
										<span class="text">Armada</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="pengumuman">
									<div class="quick-actions-item">
										<div class="avatar-item bg-warning rounded-circle">
											<i class="fas fa-map"></i>
										</div>
										<span class="text">Pengumuman</span>
									</div>
								</a>
								<a class="col-6 col-md-4 p-0" href="driver">
									<div class="quick-actions-item">
										<div class="avatar-item bg-info rounded-circle">
											<i class="fas fa-file-excel"></i>
										</div>
										<span class="text">Driver</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</li> -->
			<li class="nav-item dropdown hidden-caret">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
					<div class="foto-sm">
						<img src="assets/img/foto.png" alt="Logo Foto" class="foto-img rounded-circle">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-user animated fadeIn">
					<div class="dropdown-user-scroll scrollbar-outer">
						<li>
							<div class="user-box">
								<div class="foto-lg"><img src="assets/img/foto.png" alt="image profile" class="foto-img rounded"></div>
								<div class="u-text">
									<h4><?= $online['nama_lengkap'];?></h4>
									<p class="text-muted"><?= $online['status'];?></p><a href="" id="user-logout" class="btn btn-xs btn-secondary btn-sm">Keluar</a>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="akun">Pengaturan Akun</a>
						</li>
					</div>
				</ul>
			</li>
		</ul>
	</div>
</nav>