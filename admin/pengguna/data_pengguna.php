<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pengguna
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pengguna" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="background-color:#343A40; color :aliceblue;">
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pengguna");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nama_lengkap']; ?>
							</td>
							<td>
								<?php echo $data['username']; ?>
							</td>
							<td>
								<?php echo $data['status']; ?>
							</td>
							<td>
								<a href="?page=edit-pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="?page=del-pengguna&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
									</>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->