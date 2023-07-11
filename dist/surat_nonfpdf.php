<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['nik']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
<?php 
	include 'koneksi.php';
	$nik = $_SESSION['nik'];
    $data = mysqli_query($koneksi,"SELECT * from tb_sks WHERE nik = $nik ORDER BY id DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
?>
	<center>
		<table>
			<tr>
				<td><img src="pngegg.png" width="90" height="90"></td>
				<td>
				<center>
					<font size="4">PEMERINTAH KABUPATEN BADUNG	</font><br>
					<font size="5"><b>RUMAH SAKIT-SAKITAN</b></font><br>
					<font size="2"><i>Jln Jalanan No. 100 Kode Pos : 80362 Telp./Fax 08970274763</i></font><br>
					<font size="3"><i>Jimbaran Bali</i></font>
				</center>
				</td>
			</tr>
			
		<table width="625">
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td class="text2">Waktu Pemeriksaan : <?php echo $d['waktu']; ?></td>
			</tr>
		</table>
		</table>
		<table>
		<font size="5"><b>SURAT KESEHATAN</b></font><br>
		<font size="3"><i>Nomor : 445 / RS / TU-I / 2000 / 27.28</i></font>
			
		</table>
		<br>
	
		<table width="650">
			<tr>
		       <td>
			       <font size="2">Yang bertanda tangan dibawah ini adalah<br>Kepala Rumah Sakit-sakitan Daerah Jimbaran Kabupaten Badung menerangkan bahwa :
                </font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		<table>
			<tr class="text2">
				<td><b>Nama</b></td>
				<td>: <?php echo $d['nama']; ?></td>
			</tr>
			<tr>
				<td><b>Umur</b></td>
				<td width="525">: <?php echo $d['umur']; ?></td>
			</tr>
			<tr>
				<td><b>Jenis Kelamin</b></td>
				<td width="525">: <?php echo $d['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td><b>Pekerjaan</b></td>
				<td width="525">: <?php echo $d['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td><b>Alamat</b></td>
				<td width="525">: <?php echo $d['alamat']; ?></td>
			</tr>
		</table>
		<br>
		<br>
		<table width="650">
			<tr>
		       <td>
			       <font size="2">Demikian surat keterangan ini diperbuat untuk kepentingan :<br>
				   <i><b><?php echo $d['tujuan']; ?><b></i>
                    </font>
		       </td>
		    </tr>
		</table>
		<br>
		<table>
			<tr class="text2">
				<td><b>Berat Badan</b></td>
				<td width="525">: <?php echo $d['bb']; ?></td>
			</tr>
			<tr>
				<td><b>Tinggi Badan</b></td>
				<td width="525">: <?php echo $d['tb']; ?></td>
			</tr>
			<tr>
				<td><b>Golongan Darah</b></td>
				<td width="525">: <?php echo $d['gol_darah']; ?></td>
			</tr>
			<tr>
				<td><b>Tekanan Darah</b></td>
				<td width="525">: <?php echo $d['tensi']; ?></td>
			</tr>
			<tr>
				<td><b>Buta Warna</b></td>
				<td width="525">: <?php echo $d['buta_warna']; ?></td>
			</tr>
			<tr>
				<td><b>Suhu Badan</b></td>
				<td width="525">: <?php echo $d['suhu']; ?></td>
			</tr>
			<tr>
				<td><b>Keterangan</b></td>
				<td width="525">: <?php echo $d['keterangan']; ?></td>
			</tr>
			<tr>
				<td><b>Berlaku Sampai</b></td>
				<td width="525">: <?php echo $d['berlaku']; ?></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Jimbaran, <?php echo $d['tgl_buat']; ?><br><br><img src="download.png" width="150" height="150"><br><br><?php echo $d['dokter']; ?></td>
				
			</tr>
	     </table>
	</center>

<?php
	}
?>
</body>
</html>