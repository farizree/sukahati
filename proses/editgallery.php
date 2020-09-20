<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_gallery'];	
	$tittle = $_POST['tittle_gallery'];
	$mini = $_POST['mini_gallery'];	
	$nama = $_POST['nama_gallery'];
	$hari = $_POST['hari_gallery'];
	
	

		$input = mysqli_query($con,"Update tbl_gallery set tittle_gallery='".$tittle."', mini_gallery='".$mini."' , nama_gallery='".$nama."', hari_gallery='".$hari."'where id_gallery='".$idb."'");
	
		if ($input)
		{
			die("'<script>alert('Data Gallery Berhasil Dirubah. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		} else {
			die("'<script>alert('Data Gallery Gallery Dirubah. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		}
	
?>