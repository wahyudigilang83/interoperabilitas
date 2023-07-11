<?php 
    session_start();       
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nik']==""){
        header("location:index.php?pesan=gagal");
        }                  
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm',array(95,95));
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,'ANTRIAN SURAT SEHAT',0,1,'C');
$pdf->Cell(10,7,'',0,1);
 // koneksi database
    include 'koneksi.php';
 // menampilkan data pegawai
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY id DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
        $pdf->SetFont('Arial','B',60);
        $pdf->Cell(0,7,$d['no_antrean'],0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,7,$d['tanggal'],0,1,'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,4,$d['waktu'],0,1,'C');
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(0,9,'RUMAH SAKIT-SAKITAN',0,1,'C');
        $no = $d['no_antrean'];
 }
 $filename = "NOMOR ANTREAN $no.pdf";
 $pdf->Output($filename, 'D');
?>