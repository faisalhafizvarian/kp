<?php
	include('koneksi.php');

	
	$id 		 	 = $_POST['id_daily'];
	$tgl  		 = $_POST['tgl'];
	$deskripsi 		 	 = $_POST['deskripsi'];
	$ket 	     = $_POST['ket'];


	mysqli_query ("UPDATE daily_activity SET id_daily='$id', tgl='$tgl', deskripsi='$deskripsi', ket='$ket' WHERE id_daily='$id'")or die(mysqli_error());

	header("location: daily_activity.php");
?>