<?php 
include'koneksi.php';
?>
<table border="1">
						<tr>
							<td><center>ID Daily</center></td>
							<td><center>Tanggal</center></td>
							<td><center>Deskripsi</center></td>
							<td><center>Keterangan</center></td>
						</tr> 
                        <?php
							$query = mysqli_query("SELECT * FROM daily_activity");
							while ($result = mysqli_fetch_array($query)) {

						?>
                        <tr>
							<td><?php echo $result['id_daily']; ?></td>												
							<td><?php echo $result['tgl']; ?></td>							
							<td><?php echo $result['deskripsi']; ?></td>							
							<td><?php echo $result['ket']; ?></td>																			
						</tr>
						
						<?php }?>
					</table>