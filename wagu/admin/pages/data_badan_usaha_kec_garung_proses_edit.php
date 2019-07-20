<?php
	include('koneksi.php');

	
	$id 		 	 = $_POST['id_bu'];
	$nama_badan_usaha  		 = $_POST['nama_badan_usaha'];
	$alamat 		 	 = $_POST['alamat'];
	$nama_pic	     = $_POST['nama_pic'];
	$telepon 		 = $_POST['telepon'];
	$status_registrasi 	 	 = $_POST['status_registrasi'];
	$tanggal_registrasi	 	 = $_POST['tanggal_registrasi'];

	mysqli_query ("UPDATE data_badan_usaha_kecgar SET id_bu='$id', nama_badan_usaha='$nama_badan_usaha', alamat='$alamat', nama_pic='$nama_pic', telepon='$telepon', status_registrasi='$status_registrasi', tanggal_registrasi='$tanggal_registrasi' WHERE id_bu='$id'")or die(mysqli_error());

	header("location: data_badan_usaha_kec_garung.php");
?>