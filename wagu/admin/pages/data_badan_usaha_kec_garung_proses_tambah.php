<?php
	include('koneksi.php');

	$id		 		 = $_POST['id_bu'];
	$nama_badan_usaha  		 = $_POST['nama_badan_usaha'];
	$alamat 		 = $_POST['alamat'];
	$nama_pic 	     = $_POST['nama_pic'];
	$telepon 		 = $_POST['telepon'];
	$status_registrasi 	 = $_POST['status_registrasi'];
	$tanggal_registrasi	 		 = $_POST['tanggal_registrasi'];

	$sql	= "INSERT INTO data_badan_usaha_kecgar VALUES('$id','$nama_badan_usaha','$alamat','$nama_pic','$telepon','$status_registrasi','$tanggal_registrasi')";
	mysqli_query($sql);

	header("location: data_badan_usaha_kec_garung.php");
?>