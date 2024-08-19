<?php
session_start();
if ($_SESSION['username'] == '') {
  header("location:../index.php");
}
include "koneksi.php"; // memanggil file koneksi
include "template/sidebar.php"; // memanggil file sidebar
include "template/header.php"; // memanggil file header
$page = isset($_GET['page']) ? $_GET['page'] : ''; // mengambil nilai dari url pada variabel page
switch($page){
    case "dashboard": include "template/dashboard.php"; break;
    // modul
    case "al_quran": include "modul/al_quran.php"; break;
    case "detail": include "modul/detail.php"; break;

    // halaqoh
    case "halaqoh_read": include "halaqoh/halaqoh_read.php"; break;
    case "halaqoh_add": include "halaqoh/halaqoh_add.php"; break;
    case "halaqoh_edit": include "halaqoh/halaqoh_edit.php"; break;
    case "halaqoh_delete": include "halaqoh/halaqoh_delete.php"; break;
    // anggota
    case "anggota_read": include "anggota/anggota_read.php"; break;
    case "anggota_add": include "anggota/anggota_add.php"; break;
    case "anggota_edit": include "anggota/anggota_edit.php"; break;
    case "anggota_delete": include "anggota/anggota_delete.php"; break;
    // pengajar
    case "pengajar_read": include "pengajar/pengajar_read.php"; break;
    case "pengajar_add": include "pengajar/pengajar_add.php"; break;
    case "pengajar_edit": include "pengajar/pengajar_edit.php"; break;
    case "pengajar_delete": include "pengajar/pengajar_delete.php"; break;
    // kategori_prestasi
    case "kategori_read": include "kategori/view_data.php"; break;
    case "kategori_add": include "kategori/kategori_add.php"; break;
    case "kategori_edit": include "kategori/kategori_edit.php"; break;
    case "kategori_delete": include "kategori/kategori_delete.php"; break;
    // peringkat
    case "peringkat_read": include "peringkat/view_data.php"; break;
    case "peringkat_add": include "peringkat/peringkat_add.php"; break;
    case "peringkat_edit": include "peringkat/peringkat_edit.php"; break;
    case "peringkat_delete": include "peringkat/peringkat_delete.php"; break;
    // pengguna
    case "pengguna_add": include "pengguna/pengguna_add.php"; break;
    case "pengguna_read": include "pengguna/pengguna_read.php"; break;
    case "verifikasi_akun": include "pengguna/proses_verifikasi.php"; break;
    // prestasi
    case "prestasi_read": include "prestasi/prestasi_read.php"; break;
    case "prestasi_add": include "prestasi/prestasi_add.php"; break;
    case "verifikasi_prestasi": include "prestasi/proses_verifikasi.php"; break;
    default: include "template/dashboard.php"; break; // tambahkan halaman default jika $page kosong atau tidak cocok
}
include "template/footer.php";
?>