<?php
	include('koneksi.php');

	$id		 		 = $_POST['id'];
	$nama_bu  		 = $_POST['nama_bu'];
	$no_reg 		 = $_POST['no_reg'];
	$alamat 	     = $_POST['alamat'];
	$no_telp 		 = $_POST['no_telp'];
	$nama_penanggung_jawab 	 = $_POST['nama_penanggung_jawab'];
	$ket	 		 = $_POST['ket'];

	$sql	= "INSERT INTO registrasi_badan_usaha VALUES('$id','$nama_bu','$no_reg','$alamat','$no_telp','$nama_penanggung_jawab','$ket')";
	mysqli_query($koneksi,$sql);

	header("location: reg_badan_usaha.php");
?>