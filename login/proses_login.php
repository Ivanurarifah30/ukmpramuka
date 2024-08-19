<?php
include "koneksi.php"; //panggil koneksi
if (isset($_POST['btn_login'])) { //cek apakah button login sudah diklik
    $username = $_POST['username']; //ambil nilai dari inputan username simpan di $username
    $password = md5($_POST['password']); //ambil nilai dari inputan password simpan di $password
    $query = mysqli_query($konek, "select * from tb_pengguna where username='$username' and password='$password'");
    if (mysqli_num_rows($query) > 0) { //jika username dan password benar
        $data = mysqli_fetch_array($query); //ambil data pengguna simpan di $data
        if ($data['status_akun'] == 'diajukan') { //jika status akun diajukan
            echo "<script> alert('Status akun anda masih diajukan. Silakan hubungi admin untuk diverifikasi!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=login_view.php'>";
        } else if ($data['status_akun'] == 'ditolak') { //jika status akun ditolak
            echo "<script> alert('Status akun anda ditolak. Silakan daftar ulang akun anda, atau hubungi operator!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=login_view.php'>";
        } else { //jika status akun diverifikasi
            session_start(); //memulai session, agar bisa membuat session
            $_SESSION['id_pengguna'] = $data['id_pengguna']; //ambil nilai dari kolom id simpan di session id
            $_SESSION['username'] = $data['username']; //ambil nilai dari kolom username simpan di session username
            $_SESSION['status'] = $data['status']; //ambil nilai dari kolom status simpan di session status
            echo "<script> alert('Login Berhasil! Selamat datang di SIMPRASKA')</script>";
            echo "<meta http-equiv='refresh' content='0;url=admin/index.php'>";
        }
    } else { //jika username dan password tidak terdaftar
        echo "<script> alert('Username dan password tidak terdaftar di sistem!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login_view.php'>";
    }
}
