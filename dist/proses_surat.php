<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$bb = $_POST['bb'];
$tb = $_POST['tb'];
$gol_darah = $_POST['gol_darah'];
$tensi    = $_POST['tensi'];
$buta_warna = $_POST['buta_warna'];
$suhu   = $_POST['suhu'];
$keterangan    = $_POST['keterangan'];
$berlaku = $_POST['berlaku'];
$tgl_buat = $_POST['tgl_buat'];
$waktu   = $_POST['waktu'];
$dokter   = $_POST['dokter'];
$tujuan   = $_POST['tujuan'];
$status = "1";

mysqli_query($koneksi,"INSERT INTO tb_sks values('','$nik','$nama','$umur','$jenis_kelamin',
                                                '$pekerjaan','$alamat','$bb','$tb','$gol_darah',
                                                '$tensi','$buta_warna','$suhu','$keterangan',
                                                '$berlaku','$tgl_buat','$waktu','$dokter','$tujuan')");
$last_id = mysqli_insert_id($koneksi);


mysqli_query($koneksi,"UPDATE tb_antrian set status='$status',id_sks='$last_id' WHERE id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:surat_cetak.php?id=$last_id");

?>