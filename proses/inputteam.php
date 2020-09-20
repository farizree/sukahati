<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar_team=$_FILES['gambar_team'] ['name'];	
 	$lokasi=$_FILES['gambar_team'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_team);

 		$tittle_team		= $_POST['tittle_team'];
 			$mini_team		= $_POST['mini_team'];
	$nama_team		= $_POST['nama_team'];
	//membuat variabel $nis dan datanya dari inputan NIS
	$jabatan_team		= $_POST['jabatan_team'];
	$deskripsi_team		= $_POST['deskripsi_team'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_team VALUES(NULL, '$tittle_team', '$mini_team', '$nama_team','$jabatan_team', '$deskripsi_team', '$gambar_team')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		die("'<script>alert('Data Berhasil Di Tambahkan. :) '); window.location = '../admin/admininputteam.php'</script>'");
		}

		else{
			die("'<script>alert('Data Gagal Di tambahkan. :) '); window.location = '../admin/admininputteam.php'</script>'");
		}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>