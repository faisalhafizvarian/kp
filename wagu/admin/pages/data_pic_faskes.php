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
                        <!-- /.panel-heading -->                        </div>

                        <div class="panel-body" align="center">
                            <button class="btn btn-warning" onclick="javascript: window.location.href='data_pic_faskes_tambah.php';">Tambah Data</button>
                            <button class="btn btn-warning" onclick="javascript: window.location.href='data_pic_faskes_cetak.php';">Cetak</button>
                            <button class="btn btn-warning" onclick="javascript: window.location.href='data_pic_faskes_eksport.php';">Unduh</button>				
                            <br><br>
                <?php 
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
<?php include "koneksi.php"; ?>

<form name="myForm" id="myForm" onSubmit="return validateForm()" action="data_pic_faskes.php" method="post" enctype="multipart/form-data">
    <center><input type="file" id="filepegawaiall" name="filepegawaiall" /></center>
    <input type="submit" name="submit" value="Import" /><br/>
    <label><input type="checkbox" name="drop" value="1" /> <u>Kosongkan tabel sql terlebih dahulu.</u> </label>
</form>
<?php 
if (isset($_POST['submit'])) {
?>
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<div id="info"></div>
<?php
}
?>

<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>

<?php

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    if($_POST['drop']==1){
//             kosongkan tabel
             $truncate ="TRUNCATE TABLE data_pic_faskes";
             mysqli_query($truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//        menghitung jumlah real data. Karena kita mulai pada baris ke-2, maka jumlah baris yang sebenarnya adalah 
//        jumlah baris data dikurangi 1. Demikian juga untuk awal dari pengulangan yaitu i juga dikurangi 1
        $barisreal = $baris-1;
        $k = $i-1;
        
// menghitung persentase progress
        $percent = intval($k/$barisreal * 100)."%";

// mengupdate progress
        echo '<script language="javascript">
        document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.'; background-color:lightblue\">&nbsp;</div>";
        document.getElementById("info").innerHTML="'.$k.' data berhasil diinsert ('.$percent.' selesai).";
        </script>';

//       membaca data (kolom ke-1 sd terakhir)
      $name           = $data->val($i, 1);
      $tmp_name   = $data->val($i, 2);
      $alamat  = $data->val($i, 3);
      $no_pic  = $data->val($i, 4);

//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into data_pic_faskes (id_faskes,nama_faskes,nama_pic,no_pic)values('$name','$tmp_name','$alamat','$no_pic')";
      $hasil = mysqli_query($query);
      
      flush();

//      kita tambahkan sleep agar ada penundaan, sehingga progress terbaca bila file yg diimport sedikit
//      pada prakteknya sleep dihapus aja karena bikin lama hehe
      

    }
        
//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
}

?>


                <br><br>
                <form action="data_pic_faskes.php" method="GET">
					<label>Cari : </label>
					<input type="text" name="cari" placeholder="Berdasarkan BU / Instansi">
					<input type="submit" value="cari">
				</form>
				<?php
				if(isset($_GET['cari']))
				{
					$cari = $_GET['cari'];
					echo '<h4>Hasil Pencarian : '.$cari.'</h4>';
				}
				?>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                            <td><center>No</center></td>
							<td><center>Nama FASKES</center></td>
							<td><center>Nama PIC</center></td>
                            <td><center>No PIC</center></td>
                            <td><center>Aksi</center></td>
					</tr>

					<?php
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$data = mysqli_query("SELECT * FROM data_pic_faskes WHERE nama_faskes like '%".$cari."%' OR nama_pic like '%".$cari."%' OR no_pic like '%".$cari."%' OR id_faskes like '%".$cari."%'");
					}
						else{
						$data = mysqli_query("SELECT * FROM data_pic_faskes");
						}
					$no=1;
					while($d = mysqli_fetch_array($data)){
					?>
					<tr>	
                            <td><CENTER><?php echo $no++; ?></CENTER></td>						
							<td><?php echo $d['nama_faskes']; ?></td>							
							<td><?php echo $d['nama_pic']; ?></td>							
							<td><?php echo $d['no_pic']; ?></td>																			
							<td>
								<div class="btn-group" align="center">
								<button type="button" class="btn btn-warning" onclick="javascript: window.location.href='data_pic_faskes_detail.php?id=<?php echo $d['id_faskes']; ?>';">Detail</button>
								<button type="button" class="btn btn-info" onclick="javascript: window.location.href='data_pic_faskes_edit.php?id=<?php echo $d['id_faskes']; ?>';">Edit</button>
								<button type="button" class="btn btn-danger" onclick="javascript: if(confirm('Apakah anda yakin ingin menghapus??')==true)(window.location.href='data_pic_faskes_delete.php?id=<?php echo $d['nama_faskes']; ?>')">Delete</button>
								</div>
							</td>
					</tr>
					<?php } ?>
                                </tbody>

                            </table>
                            <button type="button" class="btn btn-warning" onclick="javascript: window.location.href='data_pic_faskes.php';">Back</button>
								
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