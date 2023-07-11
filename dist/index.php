
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">
</head>

<body>
    <div id="auth">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {?>
        <?php    
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:data_diri_pasien.php");
            exit();
        } elseif ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
        <div class="auth-logo">
        <h1 class="auth-title"><font size="7">Rumah Sakit-sakitan</font></h1>
            </div>
            <h1 class="auth-title"><font size="6">Pasien</font></h1>
            <p class="auth-subtitle mb-5"><font size="5">Silahkan input NIK sesuai dengan KTP</font></p>

            
               <form method="post" action="cek_login.php">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="nik" type="text" class="form-control form-control-xl" placeholder="NIK" name="nik">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
               
              
                <button id="cek" type="submit" class="btn btn-primary btn-block btn-lg shadow-lg ">CEK</button>
            </form>
            
            
            <div class="mt-4 text-lg fs-4">
                <font size="4"><p class="text-gray-600">Apakah anda dokter? <a href="form_login_dokter.php" class="font-bold">Ya</a></p>
                </font>
            </div> 
            
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            
        </div>
    </div>
</div>

    </div>

    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
    <script src="assets/js/pages/sweetalert3.js"></script>>
    <script>
        var pesan = "<?=$_GET['pesan']?>";

        if(pesan == "gagal") {
            // console.log(pesan);
           var gagal =  Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'NIK Anda Belum Terdaftar!',
            footer: '<a href="#">Ingin Mendaftarkan NIK Anda?</a>'
            })
        
            $('#gagal').html(gagal)
        }
       
    </script>
</body>

</html>
