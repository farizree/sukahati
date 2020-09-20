<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar_about=$_FILES['gambar_about'] ['name'];	
 	$lokasi=$_FILES['gambar_about'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_about);

 		$tittle_about		= $_POST['tittle_about'];
 			$nama_about		= $_POST['nama_about'];
	$deskripsi_about		= $_POST['deskripsi_about'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_about VALUES(NULL, '$tittle_about', '$nama_about', '$deskripsi_about', '$gambar_about')") or die(mysql_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		die("'<script>alert('Data Berhasil Di Tambahkan. :) '); window.location = '../admin/admininputabout.php'</script>'");
		}

		else{
			die("'<script>alert('Data Gagal Di tambahkan. :) '); window.location = '../admin/admininputabout.php'</script>'");
		}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>