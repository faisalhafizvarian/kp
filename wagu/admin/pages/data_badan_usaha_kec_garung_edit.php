<?php
include'koneksi.php';
?>
<?php
include'header.php';
?>

		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Badan Usaha</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Badan Usaha
                        <!-- /.panel-heading -->  

<?php 
		$query_edit	=mysqli_query("SELECT * FROM data_badan_usaha_kecgar WHERE id_bu='$_GET[id]'");
		$result_edit=mysqli_fetch_array($query_edit);
	 ?>
				<form action="data_badan_usaha_kec_garung_proses_edit.php" method="POST">
					<input type="hidden" name="idx" value="<?php echo $result_edit['idx']; ?>" />
					<table class="table table-bordered" style="margin-top:20px;">
						<tr>
							<td>ID</td>
							<td>
								<input type="hidden" name="id_bu" class="form-control input-sm" value="<?php echo $result_edit['id_bu']; ?>" />
							</td>
						</tr>
						<tr>
							<td>Nama BU / Instansi</td>
							<td>
								<input type="text" name="nama_badan_usaha" placeholder="Ketikan Nama BU / Instansi" class="form-control input-sm" value="<?php echo $result_edit['nama_badan_usaha']; ?>" />
							</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>
								<input type="text" name="alamat" placeholder="Ketikan Alamat" class="form-control input-sm" value="<?php echo $result_edit['alamat']; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Nama PIC</td>
							<td>
								<input type="text" name="nama_pic" placeholder="Ketikan Nama PIC" class="form-control input-sm" value="<?php echo $result_edit['nama_pic']; ?>"/>
							</td>
						</tr>
						<tr>
							<td>No Telepon</td>
							<td>
								<input type="int" name="telepon" placeholder="Ketikan Nomor Telp (WAJIB DENGAN ANGKA)" class="form-control input-sm" value="<?php echo $result_edit['telepon']; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Status Registrasi</td>
							<td>
								<input type="text" name="status_registrasi" placeholder="Ketikan Status Registrasi" class="form-control input-sm" value="<?php echo $result_edit['status_registrasi']; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Tanggal Registrasi</td>
							<td>
								<input type="date" name="tanggal_registrasi" class="form-control input-sm" value="<?php echo $result_edit['tanggal_registrasi']; ?>" />
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-denger" onclick="javascript: window.location.href='data_badan_usaha_kec_garung.php';">Kembali</button>
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