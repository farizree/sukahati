<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_menu'];	
	$idx = $_POST['id_martabak'];
	$nama = $_POST['nama_menu'];
	if(empty($idb))
	{
		die("'<script>alert('id konten masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");
	}
	else if(empty($idx))
		
	{
		die("'<script>alert('id Martabak masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($nama))

	{
		die("'<script>alert('Nama masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}	
	else

	{
		$input = mysqli_query($con,"Update tbl_menu set id_martabak='".$idx."', nama_menu='".$nama."' where id_menu='".$idb."'");
	
		if ($input)
		{
			die("'<script>alert('Data Menu Berhasil Dirubah. :) '); window.location = '../admin/admininputmenu.php'</script>'");
		} else {
			echo "gagal";
		}
	}
?>