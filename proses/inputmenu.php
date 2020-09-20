<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');

	
	$nama_menu		= $_POST['nama_menu'];
	
	$id_martabak = $_POST['id_martabak'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_menu VALUES(NULL, '$nama_menu', '$id_martabak')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input)
{
			die("'<script>alert('Data Berhasil Di Tambahkan. :) '); window.location = '../admin/admininputmenu.php'</script>'");
		}

		else{
			die("'<script>alert('Data Gagal Di tambahkan. :) '); window.location = '../admin/admininputmenu.php'</script>'");
		}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>