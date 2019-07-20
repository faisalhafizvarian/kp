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
                            Data PIC FASKES
                        <!-- /.panel-heading -->  

<form action="data_pic_faskes_proses_tambah.php" method="post">
					<table class="table table-bordered" style="margin-top:20px;">
						<tr>
							<td>id FASKES</td>
							<td>
								<input type="int" name="id_faskes" placeholder="Ketikan id FASKES" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Nama FASKES</td>
							<td>
								<input type="text" name="nama_faskes" placeholder="Ketikan Nama FASKES" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Nama PIC</td>
							<td>
								<input type="text" name="nama_pic" placeholder="Ketikan Nama PIC" class="form-control input-sm"/>
							</td>
						</tr>
						<tr>
							<td>No PIC</td>
							<td>
								<input type="text" name="no_pic" placeholder="Ketikan No PIC" class="form-control input-sm"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-denger" onclick="javascript: window.location.href='data_pic_faskes.php';">Kembali</button>
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