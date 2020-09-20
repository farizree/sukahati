<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_team'];	
	$tittle = $_POST['tittle_team'];
	$mini = $_POST['mini_team'];	
	$nama = $_POST['nama_team'];
	$jabatan = $_POST['jabatan_team'];
	$deskripsi = $_POST['deskripsi_team'];
	
		$input = mysqli_query($con,"Update tbl_team set tittle_team='".$tittle."', mini_team='".$mini."' , nama_team='".$nama."', jabatan_team='".$jabatan."',  deskripsi_team='".$deskripsi."'where id_team='".$idb."'");
	
		if ($input)
		{
			die("'<script>alert('Data Team Berhasil Dirubah. :) '); window.location = '../admin/admininputteam.php'</script>'");
		} else {
			die("'<script>alert('Data Team Gagal Dirubah. :) '); window.location = '../admin/admininputteam.php'</script>'");
		}

?>