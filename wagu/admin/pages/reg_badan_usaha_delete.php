<?php include('koneksi.php');

$id=$_GET['id'];

$query=("DELETE FROM registrasi_badan_usaha WHERE id='$id'");
mysqli_query($koneksi,$query);
if ($query == true) {
	echo "<script>alert('Delete berhasil');</script>";
} else {
	echo "<script>alert('Delete gagal');</script>";
}

echo "<script>window.location.href='reg_badan_usaha.php';</script>";
?>



