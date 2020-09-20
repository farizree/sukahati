<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_martabak'];	
	$nama = $_POST['nama_martabak'];
	$harga = $_POST['harga_martabak'];	
	$nmmenu = $_POST['nama_menu'];
	$informasi = $_POST['informasi_martabak'];
	if(empty($idb))
	{
		die("'<script>alert('id konten masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");
	}
	else if(empty($nama))
	{
		die("'<script>alert('Nama masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($harga))
	{
		die("'<script> alert('Harga Masih Kosong'); window.location = '../admin/admininputmartabak.php'</script>'");
	}
	else if(empty($nmmenu))
	{
		die("'<script>alert('Nama Vendor Masih Kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($informasi))
	{
		die("'<script>alert('Gambar Masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	
	else
	{
		$input = mysqli_query($con,"Update tbl_martabak set nama_martabak='".$nama."', harga_martabak='".$harga."' , nama_menu='".$nmmenu."', informasi_martabak='".$informasi."'where id_martabak='".$idb."'");
	
		if ($input)
		{
			$action = "Berhasil Merubah Data Barang";
			header("location:../admin/admininputmartabak.php");
		} else {
			echo "gagal";
		}
	}
?>