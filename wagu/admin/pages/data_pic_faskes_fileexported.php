<?php 
include'koneksi.php';
?>
<table border="1">
						<tr>
							<td><center>id FASKES</center></td>
							<td><center>Nama FASKES</center></td>
							<td><center>Nama PIC</center></td>
							<td><center>No PIC</center></td>
						</tr> 
                        <?php
							$query = mysqli_query("SELECT * FROM data_pic_faskes");
							while ($result = mysqli_fetch_array($query)) {

						?>
                        <tr>
							<td><?php echo $result['id_faskes']; ?></td>												
							<td><?php echo $result['nama_faskes']; ?></td>							
							<td><?php echo $result['nama_pic']; ?></td>							
							<td><?php echo $result['no_pic']; ?></td>																			
						</tr>
						
						<?php }?>
					</table>