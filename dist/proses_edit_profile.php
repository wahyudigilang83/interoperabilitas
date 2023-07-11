<?php
    include 'koneksi.php';

    $id_dokter =$_POST['id_dokter'];
    $nama_dokter =$_POST['nama_dokter'];
    mysqli_query($koneksi, "UPDATE tb_dokter set nama_dokter='$nama_dokter' where id_dokter='$id_dokter'");

	header("location:profile.php");
?>