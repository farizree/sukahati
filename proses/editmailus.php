<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_mailus'];	
	$nama = $_POST['nama_mailus'];
	$phone = $_POST['phone_mailus'];	
	$email = $_POST['email_mailus'];
	$subject = $_POST['subject_mailus'];
	$msg = $_POST['msg_mailus'];
	if(empty($idb))
	{
		die("'<script>alert('id konten masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");
	}
	else if(empty($nama))
	{
		die("'<script>alert('Nama masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($phone))
	{
		die("'<script> alert('Phone Masih Kosong'); window.location = '../admin/admininputmartabak.php'</script>'");
	}
	else if(empty($email))
	{
		die("'<script>alert('Email Vendor Masih Kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($subject))
	{
		die("'<script>alert('Subject Masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	else if(empty($msg))
	{
		die("'<script>alert('msg Masih kosong'); window.location = '../admin/admininputmartabak.php'</script>'");		
	}
	
	else
	{
		$input = mysqli_query($con,"Update tbl_mailus set nama_mailus='".$nama."', phone_mailus='".$phone."' , email_mailus='".$email."', subject_mailus='".$subject."', msg_mailus='".$msg."'where id_mailus='".$idb."'");
	
		if ($input)
		{
			$action = "Berhasil Merubah Data Barang";
			header("location:../admin/listmail.php");
		} else {
			echo "gagal";
		}
	}
?>