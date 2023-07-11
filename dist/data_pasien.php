<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
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
$tgl_buat = $_POST['tgl_buat'];

//update data ke database
mysqli_query($koneksi,"UPDATE tb_ktp set nama='$nama', tempat_lahir='$tempat_lahir',
                tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', gol_darah='$gol_darah',
                alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan',
                agama='$agama', status_kawin='$status_kawin', pekerjaan='$pekerjaan',
                kewarganegaraan='$kewarganegaraan', berlaku='$berlaku', tgl_buat='$tgl_buat'
                WHERE nik='$nik'");

//mengalihkan halaman kembali ke index.php
header("location:data_diri_pasien.php");

?>