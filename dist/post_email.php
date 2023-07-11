<html>

<?php

    include 'koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT tb_antrian.id, tb_ktp.nama, tb_antrian.email, tb_antrian.id_sks FROM tb_antrian INNER JOIN tb_ktp ON tb_antrian.nik=tb_ktp.nik where id = '$id'";
    $data = mysqli_query($koneksi, $query);
    while ($d = mysqli_fetch_array($data)) {
?>
<form class="form" method="POST" id="cliker" action="kirim_email.php">
    <input type ="hidden" name="email" value="<?php echo $d['email']; ?>">
    <input type ="hidden" name="id_sks" value="<?php echo $d['id_sks']; ?>">
    <input type ="hidden" name="nama" value="<?php echo $d['nama']; ?>">
    <button  type="submit" style="display:none;" class="btn btn-primary me-1 mb-1">Kirim Email</button>
</form>
<script type="text/javascript">
  document.getElementById("cliker").submit();
</script>
<?php
    }
?>
</html>