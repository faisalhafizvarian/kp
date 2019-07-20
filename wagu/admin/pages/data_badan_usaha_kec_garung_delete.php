<?php include('koneksi.php');

$id=$_GET['id'];

$query=("DELETE FROM data_badan_usaha_kecgar WHERE id_bu='$id'");
mysqli_query($query);
if ($query == true) {
	echo "<script>alert('Delete berhasil');</script>";
} else {
	echo "<script>alert('Delete gagal');</script>";
}

echo "<script>window.location.href='data_badan_usaha_kec_garung.php';</script>";
?>



