<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="SIMPRASKA">
<meta name="description" content="Sistem Informasi Manajemen UKM Pramuka">
<meta name="keywords" content="SIMPRASKA">
<title>SIMPRASKA</title>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
<script src="assets/js/plugin/webfont/webfont.min.js"></script>
<script>
	WebFont.load({
		google: {"families":["Lato:300,400,700,900"]},
		custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
</script>
<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="admin/assets/css/atlantis.css?1">
<link rel="stylesheet" href="admin/assets/plugins/selectric/public/selectric.css">
<link rel="stylesheet" type="text/css" href="<?= clearCacheFile('admin/assets/css/main.css');?>">
<?php 
if(isset($_SESSION['login'])) {
	$id_pengguna = $_SESSION['id_pengguna'];
	$username = $_SESSION['username'];

		$syntax_sql = "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'";

	$syntax = mysqli_query($conn, $syntax_sql);
	$online = mysqli_fetch_array($syntax);
	if($_SESSION['status'] == "Puskesmas") {
		$query_puskemas = mysqli_query($conn, "SELECT * FROM tb_puskesmas, tb_desa, tb_kecamatan WHERE tb_puskesmas.id_desa=tb_desa.id_desa AND fk_kecamatan=tb_kecamatan.id_kecamatan AND tb_puskesmas.username = '$username'");
		$row_puskesmas = mysqli_fetch_array($query_puskemas);
		$id_puskesmas = $row_puskesmas['id_puskesmas'];
		$nama_puskesmas = $row_puskesmas['nama_puskesmas'];
	}
}
?>