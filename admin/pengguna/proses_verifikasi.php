<?php
if(isset($_GET['id_pengguna'])){
    $status = $_GET['status'];
    $id_pengguna = $_GET['id_pengguna'];
    $exe = mysqli_query($konek, "update pengguna set status_akun='$status' where id=$id");
    if($exe){
        echo "<script> alert('Proses verifikasi akun berhasil $status!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=?page=tb_pengguna_read'>";
    } else {
        echo "<script> alert('Gagal verifikasi akun')</script>";
        echo "<meta http-equiv='refresh' content='0;url=?page=tb_pengguna_read'>";
    }
}
?>