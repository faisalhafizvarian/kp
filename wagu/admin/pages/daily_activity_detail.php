<?php
include'koneksi.php';
?>
<?php
include'header.php';
?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daily Activity</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                        <!-- /.panel-heading -->  
<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Daily Activity</h3>
<a class="btn" href="daily_activity.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($_GET['id']);


$det=mysqli_query("select * from daily_activity where id_daily='$id_brg'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Daily</td>
			<td><?php echo $d['id_daily'] ?></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><?php echo $d['tgl'] ?></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><?php echo $d['deskripsi']; ?></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><?php echo $d['ket'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
</div>
			</div>
		</div>
	 <!-- /.table-responsive -->
	 </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
include'footer.php';
?>