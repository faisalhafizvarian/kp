<?php include('koneksi.php');

$id=$_GET['id'];

$query=("DELETE FROM data_pic_faskes WHERE nama_faskes='$id'");
mysqli_query($query);
if ($query == true) {
	echo "<script>alert('Delete berhasil');</script>";
} else {
	echo "<script>alert('Delete gagal');</script>";
}

echo "<script>window.location.href='data_pic_faskes.php';</script>";
?>



