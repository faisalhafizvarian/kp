<?php include('koneksi.php');

$id=$_GET['id'];

$query=("DELETE FROM daily_activity WHERE id_daily='$id'");
mysqli_query($query);
if ($query == true) {
	echo "<script>alert('Delete berhasil');</script>";
} else {
	echo "<script>alert('Delete gagal');</script>";
}

echo "<script>window.location.href='daily_activity.php';</script>";
?>



