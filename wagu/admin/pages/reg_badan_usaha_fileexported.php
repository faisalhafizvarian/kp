<?php 
include'koneksi.php';
?>
<table border="1">
						<tr>
							<td><center>ID</center></td>
							<td><center>Nama BU / Instansi</center></td>
							<td><center>No Reg</center></td>
							<td><center>Alamat</center></td>
							<td><center>No Telp</center></td>
							<td><center>Nama PIC</center></td>
							<td><center>Keterangan</center></td>
						</tr> 
                        <?php
							$no=1;
							$query = mysqli_query($koneksi,"SELECT * FROM registrasi_badan_usaha");
							while ($result = mysqli_fetch_array($query)) {

						?>
                        <tr>							
							<td><CENTER><?php echo $result['id']; ?></CENTER></td>							
							<td><?php echo $result['nama_bu']; ?></td>	
							<td><CENTER><?php echo $result['no_reg']; ?></CENTER></td>						
							<td><?php echo $result['alamat']; ?></td>							
							<td><?php echo $result['no_telp']; ?></td>							
							<td><?php echo $result['nama_penanggung_jawab']; ?></td>
							<td><?php echo $result['ket']; ?></td>													
						</tr>
						
						<?php }?>
					</table>