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
                            Registrasi Badan Usaha
                        <!-- /.panel-heading -->  

<form action="reg_badan_usaha_proses_tambah.php" method="post">
					<table class="table table-bordered" style="margin-top:20px;">
						<tr>
							<td>ID</td>
							<td>
								<input type="text" name="id" placeholder="Ketikan ID" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Nama BU / Instansi</td>
							<td>
								<input type="text" name="nama_bu" placeholder="Ketikan Nama BU / Instansi" class="form-control input-sm"/>
							</td>
						</tr>
						<tr>
							<td>Nomer Registrasi</td>
							<td>
								<input type="int" name="no_reg" placeholder="Ketikan Nomor Registrasi (WAJIB DENGAN ANGKA)" class="form-control input-sm"/>
							</td>					
						</tr>
						<tr>
							<td>Alamat</td>
							<td>
								<input type="text" name="alamat" placeholder="Ketikan Alamat BU / Instansi" class="form-control input-sm"/>
							</td>
						</tr>
						<tr>
							<td>No. Telp</td>
							<td>
								<input type="int" name="no_telp" placeholder="Ketikan Nomer Telepon (WAJIB DENGAN ANGKA)" class="form-control input-sm"/>
							</td>
						</tr>
						<tr>
							<td>Nama PIC</td>
							<td>
								<input type="text" name="nama_penanggung_jawab" placeholder="Ketikan Nama PIC" class="form-control input-sm"/>
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
								<button type="button" class="btn btn-denger" onclick="javascript: window.location.href='reg_badan_usaha.php';">Kembali</button>
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