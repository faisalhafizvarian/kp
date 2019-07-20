<?php
include'koneksi.php';
?>
<?php
include'header.php';
?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data PIC FASKES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                        <!-- /.panel-heading -->  
<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Data PIC FASKES</h3>
<a class="btn" href="data_pic_faskes.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($_GET['id']);


$det=mysqli_query("select * from data_pic_faskes where id_faskes='$id_brg'")or die(mysqli_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id FASKES</td>
			<td><?php echo $d['id_faskes'] ?></td>
		</tr>
		<tr>
			<td>Nama FASKES</td>
			<td><?php echo $d['nama_faskes'] ?></td>
		</tr>
		<tr>
			<td>Nama PIC</td>
			<td><?php echo $d['nama_pic']; ?></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td><?php echo $d['no_pic'] ?></td>
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