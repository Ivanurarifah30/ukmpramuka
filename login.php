<?php
include '../koneksi.php';

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE BINARY username = '$username'");
$count = mysqli_num_rows($query);

if($count > 0) {
	$row = mysqli_fetch_array($query);	

	if(password_verify($password, $row['password'])) {
		// if($row['is_active'] == 1) {
			// $_SESSION['kode'] = $row['kode'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
			$_SESSION['status'] = $row['status'];
			// $_SESSION['is_active'] = $row['is_active'];
			$_SESSION['id_pengguna'] = $row['id_pengguna'];
			// $_SESSION['time'] = date('Y-m-d H:i:s');
			$_SESSION['login'] = true;

			// if(isset($_POST['remember'])) {
			// 	setcookie('_ga_NP5R9ZCR7Z2', md5('login'), time() + 3600, '/');
			// 	setcookie('_ga_NZ0K2CYT673', base64_encode($row['kode']), time() + 3600, '/');
			// }
			echo json_encode(['message'=>'Selamat datang '.$row['nama_lengkap'], 'status'=>'1', 'nama'=>$row['nama_lengkap']]);
		// }else {
		// 	echo json_encode(['message'=>'Akun belum aktif', 'status'=>'0']);
		// }
	}else {
		echo json_encode(['message'=>'Kata Sandi tidak cocok', 'status'=>'0']);
	}
}else {
	echo json_encode(['message'=>'Akun tidak ditemukan', 'status'=>'0']);
}
?>