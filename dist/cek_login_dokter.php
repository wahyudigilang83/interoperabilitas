<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = MD5($_POST['password']);

$data = mysqli_query($koneksi,"SELECT * from tb_dokter where username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['username'] = $username;
	header("location:daftar_antrean.php");
}else {
	header("location:form_login_dokter.php?pesan=gagal");
}
?>