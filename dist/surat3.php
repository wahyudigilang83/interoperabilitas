<?php
//include master file
require('fpdf.php');
include "phpqrcode/qrlib.php"; 
session_start();
include 'koneksi.php';
$id = $_GET['id'];

// cetak qr
$tempdir = "qrcode-img/"; //Nama folder tempat menyimpan file qrcode
	if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

$codeContents = "https://elektro-pnb.id/suratsehat/surat2.php?id=".$nik; 
$fileName = "Surat_sehat_".$id. '.png'; 
$pngAbsoluteFilePath = $tempdir.$fileName; 
$quality = "H";
$ukuran = 9;
$padding = 1;
QRcode::png($codeContents, $pngAbsoluteFilePath,$quality,$ukuran,$padding);

// cek apakah yang mengakses halaman ini sudah login
    class pdf extends FPDF{
        function letak($gambar){
            //memasukkan gambar untuk header
            $this->Image($gambar,25,9,25,25);
            //menggeser posisi sekarang
        }

        function judul($teks1, $teks3, $teks4, $teks5){
            $this->Cell(10);
            $this->SetFont('Times','B','15');
            $this->Cell(0,5,$teks1,0,1,'C');
            $this->Cell(10);
            $this->SetFont('Times','B','20');
            $this->Cell(0,9,$teks3,0,1,'C');
            $this->Cell(10);
            $this->SetFont('Times','I','8');
            $this->Cell(0,5,$teks4,0,1,'C');
            $this->Cell(10);
            $this->SetFont('Times','I','14');
            $this->Cell(0,5,$teks5,0,1,'C');
        }

        function garis(){
            $this->SetLineWidth(1);
            $this->Line(20,36,190,36);
            $this->SetLineWidth(0);
            $this->Line(20,37,190,37);
        }

        function waktu()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(125);
            $this->SetFont('Times','','10');
            $this->Cell(0,15,'Waktu Pemeriksaan : '.$d['waktu'],0,1,'C');
            }
        }

        function cover($text1, $text2, $text3, $text4)
        {
            $this->SetFont('Times','B','18');
            $this->Cell(0,5,$text1,0,1,'C');
            $this->SetFont('Times','I','14');
            $this->Cell(0,8,$text2,0,1,'C');
            $this->Cell(10,7,'',0,1);
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,10,$text3,0,1,);
            $this->Cell(10);
            $this->Cell(20,1,$text4,0,1,);
            $this->Cell(10,7,'',0,1);
            $this->Cell(10,7,'',0,1);
        }
        function nama()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Nama               : '.$d['nama'],0,1,);
            }
        }
        function umur()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(9);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,' Umur               : '.$d['umur'].' Tahun',0,1,);
            }
        }
        function jk()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Jenis Kelamin  : '.$d['jenis_kelamin'],0,1,);
            }
        }
        function pekerjaan()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Pekerjaan         : '.$d['pekerjaan'],0,1,);
            }
        }
        function alamat()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Alamat             : '.$d['alamat'],0,1,);
            $this->Cell(10,7,'',0,1);
            }
        }
        function tujuan()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $tujuan = $d['tujuan'];
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,"Demikian surat keterangan ini diperbuat untuk kepentingan :",0,1,);
            $this->Cell(10);
            $this->SetFont('Times','B','14');
            $this->Cell(20,6,$tujuan,0,1,);
            $this->Cell(10,7,'',0,1);
            }
        }
        
        function bb()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Berat Badan        : '.$d['bb'].' Kg',0,1,);
            }
        }
        function tb()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Tinggi Badan      : '.$d['tb'].' Cm',0,1,);
            }
        }
        function gol_darah()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Golongan Darah : '.$d['gol_darah'],0,1,);
            }
        }
        function tensi()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Tekanan Darah   : '.$d['tensi'],0,1,);
            }
        }
        function buta()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Buta Warna        : '.$d['buta_warna'],0,1,);
            }
        }
        function suhu()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(9);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,' Suhu Tubuh        : '.$d['suhu'].' C',0,1,);
            }
        }
        function ket()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Keterangan         : '.$d['keterangan'],0,1,);
            }
        }
        function berlaku()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(10);
            $this->SetFont('Times','','14');
            $this->Cell(20,6,'Berlaku Hingga  : '.$d['berlaku'],0,1,);
            $this->Cell(10,7,'',0,1);
            }
        }

        function tempat()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(90);
            $this->SetFont('Times','','14');
            $this->Cell(0,15,'Jimbaran, '.$d['tgl_buat'],0,1,'C');
            $this->Cell(10,7,'',0,1);
            $this->Cell(10,7,'',0,1);
            $this->Cell(10,7,'',0,1);
            $this->Cell(10,7,'',0,1);
            }
        }

        function cap($gambar1){
            //memasukkan gambar untuk header
            $this->Image($gambar1,125,218,55);
            //menggeser posisi sekarang
        }

        function dokter()
        {
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
            $this->Cell(90);
            $this->SetFont('Times','','14');
            $this->Cell(0,15,$d['dokter'],0,1,'C');
            }
        }
}
$qrcodeimage = "qrcode-img/Surat_sehat_" . $id . ".png";

//instantisasi objek
$pdf = new PDF('P','mm', 'A4');

//Mulai dokumen
$pdf->AddPage();
//meletakkan gambar
$pdf->letak('pngegg.png');
//meletakkan judul disamping logo diatas
$pdf->judul('PEMERINTAHAN KABUBAPTEN BADUNG', 'RUMAH SAKIT-SAKITAN','Jln Jalanan No. 100 Kode Pos : 80362 Telp./Fax 08970274763', 'Jimbaran Bali');
//membuat garis ganda tebal dan tipis
$pdf->garis();
$pdf->waktu();
$pdf->cover('SURAT KESEHATAN','Nomor  :  445  /  RS  /  TU-I  /  2000  /  27.28','Yang bertanda tangan dibawah ini adalah Kepala Rumah Sakit-sakitan Daerah ','Jimbaran Kabupaten Badung menerangkan bahwa :');
$pdf->nama();
$pdf->umur();
$pdf->jk();
$pdf->pekerjaan();
$pdf->alamat();
$pdf->tujuan();
$pdf->bb();
$pdf->tb();
$pdf->gol_darah();
$pdf->tensi();
$pdf->suhu();
$pdf->buta();
$pdf->ket();
$pdf->berlaku();
$pdf->tempat();
$pdf->dokter();
$pdf->cap('cap5.jpeg');
$pdf->Image($qrcodeimage,25,219,35,35);


include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE id = $id");
            while($d = mysqli_fetch_array($data)){
                $nik = $d['nik'];
            }

$filename = "SURAT SEHAT $nik.pdf";
$pdf->Output($filename, 'I');