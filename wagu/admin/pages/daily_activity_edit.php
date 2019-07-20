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
                            Daily Activity
                        <!-- /.panel-heading -->  

<?php 
		$query_edit	=mysqli_query("SELECT * FROM daily_activity WHERE id_daily='$_GET[id]'");
		$result_edit=mysqli_fetch_array($query_edit);
	 ?>
				<form action="daily_activity_proses_edit.php" method="POST">
					<input type="hidden" name="idx" value="<?php echo $result_edit['idx']; ?>" />
					<table class="table table-bordered" style="margin-top:20px;">
						<tr>
							<td>ID</td>
							<td>
								<input type="hidden" name="id_daily" class="form-control input-sm" value="<?php echo $result_edit['id_daily']; ?>" />
							</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>
								<input type="date" name="tgl" class="form-control input-sm" value="<?php echo $result_edit['tgl']; ?>" />
							</td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>
								<input type="text" name="deskripsi" placeholder="Ketikan Deskripsi" class="form-control input-sm" value="<?php echo $result_edit['deskripsi']; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>
								<input type="text" name="ket" placeholder="Ketikan Keterangan" class="form-control input-sm" value="<?php echo $result_edit['ket']; ?>"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-denger" onclick="javascript: window.location.href='daily_activity.php';">Kembali</button>
							</td>
						</tr>
					</table>
				</form>
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