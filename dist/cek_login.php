<?php 
session_start();

include 'koneksi.php';

$nik = $_POST['nik'];

$data = mysqli_query($koneksi,"SELECT * from tb_ktp where nik='$nik'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['nik'] = $nik;
	header("location:data_diri_pasien.php");
}else {
	// $data = [
	// 	"login" => "Login gagal"
	// ]
	header("location:index.php?pesan=gagal");
}
?>