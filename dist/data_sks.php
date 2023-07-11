<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$nama    = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir   = $_POST['tgl_lahir'];
$jenis_kelamin    = $_POST['jenis_kelamin'];
$gol_darah = $_POST['gol_darah'];
$alamat = $_POST['alamat'];
$kelurahan    = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$agama   = $_POST['agama'];
$status_kawin    = $_POST['status_kawin'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$berlaku = $_POST['berlaku'];
$tgl_buat    = $_POST['tgl_buat'];
$bb = $_POST['bb'];
$tb   = $_POST['tb'];
$tensi    = $_POST['tensi'];
$buta_warna = $_POST['buta_warna'];

//update data ke database
mysqli_query($koneksi,"insert into tb_sks values('$nik', '$nama', '$tempat_lahir', '$tgl_lahir', 
                '$jenis_kelamin', '$gol_darah', '$alamat', '$kelurahan', '$kecamatan',
                '$agama', '$status_kawin', '$pekerjaan', '$kewarganegaraan', '$berlaku',
                '$tgl_buat', '$bb', '$tb', '$tensi', '$buta_warna')");

//mengalihkan halaman kembali ke index.php
header("location:data_diri_pasien.php");

?>