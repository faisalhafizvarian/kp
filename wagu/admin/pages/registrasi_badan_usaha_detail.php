<?php
include'koneksi.php';
?>
<?php
include'header.php';
?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrasi Badan Usaha</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                        <!-- /.panel-heading -->  
<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Badan Usaha</h3>
<a class="btn" href="reg_badan_usaha.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($_GET['id']);


$det=mysqli_query("select * from registrasi_badan_usaha where id='$id_brg'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Badan Usaha</td>
			<td><?php echo $d['id'] ?></td>
		</tr>
		<tr>
			<td>Nama BU / Instansi</td>
			<td><?php echo $d['nama_bu'] ?></td>
		</tr>
		<tr>
			<td>Nomor Registrasi</td>
			<td><?php echo number_format($d['no_reg']); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $d['alamat'] ?></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td><?php echo number_format($d['no_telp']); ?></td>
		</tr>
		<tr>
			<td>Nama PIC</td>
			<td><?php echo $d['nama_penanggung_jawab'] ?></td>
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