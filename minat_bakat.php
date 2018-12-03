<?php


include_once 'dbConnection.php';

	$user = $_POST['user'];
	$jurusan = $_POST['jurusan'];
	$jenis = $_POST['jenis'];
	$jurusan1 = $_POST['jurusan1'];
	$jenis1 = $_POST['jenis1'];
	$alasan = $_POST['alasan'];
	$alasan1 = $_POST['alasan1'];

	$result = mysqli_query($con,"INSERT INTO `minatbakat`(`id_minatbakat`, `username`, `jurusan1`, `jenis1`, `jurusan2`, `jenis2`, `alasan1`, `alasan2`) 
									VALUES ('','$user','$jurusan','$jenis','$jurusan1','$jenis1','$alasan','$alasan1')");
	echo "<script language=javascript> alert('Selamat Anda Berhasil Daftar');document.location.href='data_minatbakat.php?user=$user'  </script>";


?>