<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=registrasi_badan_usaha.xls");

// Tambahkan table
include 'reg_badan_usaha_fileexported.php';