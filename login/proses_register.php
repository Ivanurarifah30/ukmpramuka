<?php
include 'koneksi.php';
if (isset($_POST['btn_daftar'])) { //cek apakah tombol daftar telah diklik
    $nar = $_POST['nar']; //ambil nilai dari inputan npm simpan di $npm
    $nama_lengkap = $_POST['nama_lengkap']; //ambil nilai dari inputan nama_lengkap simpan di $nama_lengkap
    $username = $nar; //ambil nilai dari $nar simpan di $username
    $password = md5($_POST['password']); //ambil nilai dari password, lalu enkripsi simpan di $password
    $cek_nar = mysqli_query($konek, "select * from tb_pengguna where nar$nar='$nar'");
    if (mysqli_num_rows($cek_nar) > 0) { //jika npm sudah terdaftar di sistem
        echo "<script> alert('NAR sudah terdaftar di sistem!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=register_view.php'>";
    } else { //jika npm belum terdaftar di sistem, maka masukan data pengguna
        $exe = mysqli_query($konek, "insert into pengguna values (null, '$nar', '$nama_lengkap', '$username', '$password', '$status', 'diajukan')"); //jalankan query tambah data ke tabel pengguna
        if ($exe) { //jika query tambah data berhasil
            echo "<script> alert('Pendaftaran akun anda berhasil dilakukan, tunggu operator kemahasiswaan untuk menyetujui pendaftaran akun anda!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=login_view.php'>";
        } else { //jika query tambah data gagal
            echo "<script> alert('Pendaftaran akun anda gagal diproses. Silakan daftar ulang!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=register_view.php'>";
        }
    }
}
