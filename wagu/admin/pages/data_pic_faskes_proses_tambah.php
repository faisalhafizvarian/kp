<?php
	include('koneksi.php');

	$id_faskes		= $_POST['id_faskes'];
	$nama_faskes 		 = $_POST['nama_faskes'];
	$nama_pic  		 = $_POST['nama_pic'];
	$no_pic 	     = $_POST['no_pic'];
	
	$sql	= "INSERT INTO data_pic_faskes VALUES('$id_faskes', '$nama_faskes','$nama_pic','$no_pic')";
	mysqli_query($sql);

	header("location: data_pic_faskes.php");
?>