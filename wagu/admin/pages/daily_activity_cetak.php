<?php
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wagu Beta 2.1</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<p><CENTER><H3>Daily Activity</H3></CENTER></p>
<div class='container'>				
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<tr>
                            <td><center>No</center></td>
							<td><center>Tanggal</center></td>
							<td><center>Deskripsi</center></td>
							<td><center>Keterangan</center></td>
						</tr> 

						<?php
                            $query = mysqli_query("SELECT * FROM daily_activity");
                            $no=1;
							while ($result = mysqli_fetch_array($query)) {

						?>

						<tr>		
                        <td><CENTER><?php echo $no++; ?></CENTER></td>
							<td><CENTER><?php echo $result['tgl']; ?></CENTER></td>							
							<td><?php echo $result['deskripsi']; ?></td>							
							<td><?php echo $result['ket']; ?></td>																			
						</tr>
						
						<?php } ?>
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

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

</body>
<script>
window.print();
</script>
</html>