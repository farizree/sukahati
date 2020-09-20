<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar=$_FILES['gambar'] ['name'];	
 	$lokasi=$_FILES['gambar'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar);

 		$tittle_gallery		= $_POST['tittle_gallery'];
 			$mini_gallery		= $_POST['mini_gallery'];
	$nama_gallery		= $_POST['nama_gallery'];
	//membuat variabel $nis dan datanya dari inputan NIS
	$hari_gallery		= $_POST['hari_gallery'];


	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_gallery VALUES(NULL, '$tittle_gallery', '$mini_gallery', '$nama_gallery','$hari_gallery', '$gambar')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		die("'<script>alert('Data Berhasil Di Tambahkan. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		}

		else{
			die("'<script>alert('Data Gagal Di tambahkan. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>