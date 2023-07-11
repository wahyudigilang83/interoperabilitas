<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <?php 
    session_start();
                    
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['username']==""){
        header("location:index.php?pesan=gagal");
        }
?>
<?php
    include 'koneksi.php';
    $username = $_SESSION['username'];
    $query = "SELECT * FROM tb_dokter where username = '$username'";
    $data = mysqli_query($koneksi, $query);
    while ($q = mysqli_fetch_array($data)) { 
        $nama_dok = $q['nama_dokter'];
?>
<?php
    }
?>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
    <ul class="menu">
             <li
                class="sidebar-item">
                <a href="profile.php" class='sidebar-link'>
                    
                    <span>Profile</span>
                </a>
            </li>
             <li
                class="sidebar-item active">
                <a href="daftar_antrean.php" class='sidebar-link'>
                    
                    <span>Daftar Antrean</span>
                </a>
            </li>
             <li
                class="sidebar-item  ">
                <a href="cetak_surat_sehat.php" class='sidebar-link'>
                    
                    <span>Cetak Surat Sehat</span>
                </a>
            </li>
           <li
                class="sidebar-item  ">
                <a href="logout_dokter.php" class='sidebar-link'>
                    
                    <span>Logout</span>
                </a>
            </li>
            
           
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Periksa Kesehatan</h3>
    Silahkan melakukan pemeriksaan kepada pasien dengan mengisi form berikut
</div>


	<div class="page-content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pemeriksaan</h4>
                    </div>
                    <?php 
                        include 'koneksi.php';
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi,"SELECT * from tb_antrian where id='$id'");
                        while($d = mysqli_fetch_array($data)){
                        $nik=$d['nik'];
                        $tujuan=$d['tujuan'];
                    ?>
                    <font size="4"><i class="mb-0 ms-4">NIK : <?php echo $d['nik']; ?></i></font>
                    <?php
                        }
                    ?>
                    <?php 
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * from tb_ktp where nik='$nik'");
                        while($p = mysqli_fetch_array($data)){
                            date_default_timezone_set('Asia/Singapore');
                            $today=date('Y-m-d');
                            $time=date("H:i:s");
                            $berlaku = date('Y-m-d',strtotime('+6 month', strtotime($today)));

                            $tgl_lahir_y = date('Y', strtotime($p['tgl_lahir']));
                            $today_y = date('Y', strtotime("today"));
                            $tgl_lahir_b = date('m', strtotime($p['tgl_lahir']));
                            $today_b = date('m', strtotime("today"));
                            $tgl_lahir_h = date('d', strtotime($p['tgl_lahir']));
                            $today_h = date('d', strtotime("today"));
                            if($tgl_lahir_b > $today_b){
                                $umur = ($today_y-1)-$tgl_lahir_y;
                            }else{
                                if($tgl_lahir_h > $today_h){
                                    $umur = ($today_y-1)-$tgl_lahir_y;
                                }else{
                                    $umur = $today_y-$tgl_lahir_y;
                                }
                            }
                            
                    ?>
                    
                    <font size="4"><i class="mt-2 ms-4">Nama : <?php echo $p['nama']; ?></i> </font>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="proses_surat.php">
                                    <input type ="hidden" name="id" value="<?php echo $id ?>">
                                    <input type ="hidden" name="nik" value="<?php echo $p['nik'];?>">
                                    <input type ="hidden" name="nama" value="<?php echo $p['nama'];?>">
                                    <input type ="hidden" name="umur" value="<?php echo $umur ?>">
                                    <input type ="hidden" name="jenis kelamin" value="<?php echo $p['jenis_kelamin'];?>">
                                    <input type ="hidden" name="pekerjaan" value="<?php echo $p['pekerjaan'];?>">
                                    <input type ="hidden" name="alamat" value="<?php echo $p['alamat'];?>">
                                    <input type ="hidden" name="gol_darah" value="<?php echo $p['gol_darah'];?>">
                                    <input type ="hidden" name="berlaku" value="<?php echo $berlaku ?>">
                                    <input type ="hidden" name="tgl_buat" value="<?php echo $today ?>">
                                    <input type ="hidden" name="waktu" value="<?php echo $time ?>">
                                    <input type ="hidden" name="dokter" value="<?php echo $nama_dok ?>">
                                    <input type ="hidden" name="tujuan" value="<?php echo $tujuan ?>">
                            <?php
                                }
                                ?>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Suhu Tubuh</label>
                                            <?php 
                                                if(isset($_GET['suhu'])){
                                                    if($_GET['suhu'] == "kosong"){
                                                        ?>
                                                        <div class="alert alert-danger alert-dismissible show fade">
                                                        <i class="bi bi-file-excel"></i>
                                                        Suhu Belum Di Masukkan !
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="Suhu Tubuh" name="suhu">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Buta Warna</label>
                                            
                                                <select class="form-select" id="basicSelect" name="buta_warna">
                                                    <option>Negatif</option>
                                                    <option>Positif</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Tensi</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tensi"
                                                name="tensi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Berat Badan</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                name="bb" placeholder="Berat Badam">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Tinggi Badan</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="tb" placeholder="Tinggi Badan">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Keterangan</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="keterangan" placeholder="Keterangan">
                                        </div>
                                    </div> 
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <button type="reset" class="btn btn-danger me-1 mb-1">Reset</button>
                                        <a href="daftar_antrean.php" class="btn btn-info me-1 mb-1">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
            
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>

</html>
