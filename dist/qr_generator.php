<?php
require_once("phpqrcode/qrlib.php");

	//isi qrcode jika di scan
	$codeContents = 'https://localhost/interoperabilitas/dist/form_login.php'; 
	 
	//output gambar langsung ke browser, sebagai PNG
	QRcode::png($codeContents); 