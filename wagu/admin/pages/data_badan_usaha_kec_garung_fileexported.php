<?php 
include'koneksi.php';
?>
<table border="1">
						<tr>
							<td><center>ID</center></td>
							<td><center>Nama BU / Instansi</center></td>
							<td><center>Alamat</center></td>
							<td><center>Nama PIC</center></td>
							<td><center>No Telp</center></td>
							<td><center>Status Registrasi</center></td>
							<td><center>Tanggal Registrasi</center></td>
						</tr> 
                        <?php
							$no=1;
							$query = mysqli_query("SELECT * FROM data_badan_usaha_kecgar");
							while ($result = mysqli_fetch_array($query)) {

						?>
                        <tr>							
							<td><CENTER><?php echo $result['id_bu']; ?></CENTER></td>							
							<td><?php echo $result['nama_badan_usaha']; ?></td>	
							<td><CENTER><?php echo $result['alamat']; ?></CENTER></td>						
							<td><?php echo $result['nama_pic']; ?></td>							
							<td><?php echo $result['telepon']; ?></td>							
							<td><?php echo $result['status_registrasi']; ?></td>
							<td><?php echo $result['tanggal_registrasi']; ?></td>													
						</tr>
						
						<?php }?>
					</table>