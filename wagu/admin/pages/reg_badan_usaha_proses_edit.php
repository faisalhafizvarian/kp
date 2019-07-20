<?php
	include('koneksi.php');

	
	$id 		 	 = $_POST['id'];
	$nama_bu  		 = $_POST['nama_bu'];
	$no_reg 		 	 = $_POST['no_reg'];
	$alamat 	     = $_POST['alamat'];
	$no_telp 		 = $_POST['no_telp'];
	$nama_penanggung_jawab 	 	 = $_POST['nama_penanggung_jawab'];
	$keterangan	 	 = $_POST['ket'];

	mysqli_query ("UPDATE registrasi_badan_usaha SET id='$id', nama_bu='$nama_bu', no_reg='$no_reg', alamat='$alamat', no_telp='$no_telp', nama_penanggung_jawab='$nama_penanggung_jawab', ket='$keterangan' WHERE id='$id'")or die(mysqli_error());

	header("location: reg_badan_usaha.php");
?>