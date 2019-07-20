<?php
	include('koneksi.php');

	
	$id 		 	 = $_POST['id_faskes'];
	$nama_faskes  		 = $_POST['nama_faskes'];
	$nama_pic 		 	 = $_POST['nama_pic'];
	$no_pic 	     = $_POST['no_pic'];


	mysqli_query ("UPDATE data_pic_faskes SET id_faskes='$id', nama_faskes='$nama_faskes', nama_pic='$nama_pic', no_pic='$no_pic' WHERE id_faskes='$id'")or die(mysqli_error());

	header("location: data_pic_faskes.php");
?>