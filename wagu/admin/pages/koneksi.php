<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="program_bpjs";
	
	$koneksi=mysqli_connect($host,$user,$pass);
		if($koneksi){
		$buka=mysqli_select_db($koneksi,$db);
		//echo "Database bisa dibuka";
		if(!$buka){
			die("Database tidak dapat dibuka");
			}
		}
		else{
			die("Server mysql error");
		}
?>