<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Pengguna</h5>
            <a href="?page=pengguna_add" class="btn btn-success btn-sm"><i class="ti ti-plus"></i>Tambah Data</a>
            <hr>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username / NAR</th>
                        <th>Nama Lengkap</th>
                        <th>Status Akun</th>
                        <?php if ($_SESSION['status'] == 'admin') { ?>
                            <th>Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($konek, "select * from tb_pengguna where status='anggota_racana'");
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nar'] ?></td>
                            <td><?= $row['nama_lengkap'] ?></td>
                            <td><?= $row['status_akun'] ?></td>
                            <?php if ($_SESSION['status'] == 'admin') { ?>
                                <td>
                                    <?php if ($row['status_akun'] == 'diajukan') { ?>
                                        <a href="?page=verifikasi_akun&id=<?= $row[0] ?> &status=diverifikasi" class="btn btn-success btn-sm" onclick="return confirm('Yakin ingin menyetujui akun ini?')"><i class="ti ti-check"></i>Setujui</a>
                                        <a href="?page=verifikasi_akun&id=<?= $row[0] ?> &status=ditolak" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menolak akun ini?')"><i class="ti ti-x"></i>Tolak</a>
                                    <?php } ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>