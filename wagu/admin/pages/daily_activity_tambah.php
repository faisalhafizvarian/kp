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

<form action="daily_activity_proses_tambah.php" method="post">
					<table class="table table-bordered" style="margin-top:20px;">
						<tr>
							<td>ID Daily</td>
							<td>
								<input type="int" name="id_daily" placeholder="Ketikan ID Daily" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>
								<input type="date" name="tgl" placeholder="Ketikan Nama FASKES" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>
								<textarea name="deskripsi" placeholder="Ketikan Deskripsi" class="form-control input-sm"></textarea>
							</td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>
								<input type="text" name="ket" placeholder="Ketikan Keterangan" class="form-control input-sm"/>
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