<?php
    include 'koneksi.php';

    $tujuan =$_POST['tujuan'];
    if($tujuan==="option4"){
        $tujuan = $_POST['tujuan2'];
    };
    $nik = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $email = $_POST['email'];
    $status = "0";
    $id_sks = "0";
    
    if($email == ""){
        header("location:cetak_antrean.php?email=kosong");
    }else{
    
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY id DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
    
        date_default_timezone_set('Asia/Singapore');

        if($d['tanggal'] == date("Y-m-d")){
            $no=$d['no_antrean']+1;
        }else{
            $no=1;
        }
    }
    mysqli_query($koneksi, "INSERT INTO tb_antrian values('','$no','$nik','$tujuan','$tanggal','$jam','$email','$status','$id_sks')");

    header("location: no_antrean.php");
    }
?>