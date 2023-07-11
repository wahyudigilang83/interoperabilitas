<?php 
session_start();

include 'koneksi.php';

$nik = $_POST['nik'];

$data = mysqli_query($koneksi,"SELECT * from tb_sks where nik='$nik'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['nik'] = $nik;
	header("location:surat.php?nik=$nik");
}else {
	// $data = [
	// 	"login" => "Login gagal"
	// ]
	header("location:surat_sehat.php?pesan=gagal");
}
?>