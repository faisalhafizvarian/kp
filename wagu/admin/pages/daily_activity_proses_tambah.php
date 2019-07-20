<?php
	include('koneksi.php');

	$id_daily		= $_POST['id_daily'];
	$tgl 		 = $_POST['tgl'];
	$deskripsi  		 = $_POST['deskripsi'];
	$ket 	     = $_POST['ket'];
	
	$sql	= "INSERT INTO daily_activity VALUES('$id_daily', '$tgl','$deskripsi','$ket')";
	mysqli_query($sql);

	header("location: daily_activity.php");
?>