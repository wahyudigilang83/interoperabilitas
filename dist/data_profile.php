<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$username = $_POST['username'];
$password   = $_POST['password'];

//update data ke database
mysqli_query($koneksi,"UPDATE tb_dokter set nama_dokter='$nama_dokter', username='$username',
                password='$password'");

//mengalihkan halaman kembali ke index.php
header("location:profile.php");

?>