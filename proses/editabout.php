<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_about'];	
	$tittle = $_POST['tittle_about'];
	$nama = $_POST['nama_about'];	
	$deskripsi = $_POST['deskripsi_about'];
		

		$input = mysqli_query($con,"Update tbl_about set tittle_about='".$tittle."', nama_about='".$nama."', deskripsi_about='".$deskripsi."'where id_about='".$idb."'");
	
		if ($input)
		{
			die("'<script>alert('Data Berhasil Dirubah. :) '); window.location = '../admin/admininputabout.php'</script>'");
		} else {
			die("'<script>alert('Data Gagal Dirubah. :) '); window.location = '../admin/admininputabout.php'</script>'");
		}
	
?>