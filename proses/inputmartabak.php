<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar_martabak=$_FILES['gambar_martabak'] ['name'];	
 	$lokasi=$_FILES['gambar_martabak'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_martabak);

	$nama_martabak		= $_POST['nama_martabak'];
	//membuat variabel $nis dan datanya dari inputan NIS
	$nama_menu		= $_POST['nama_menu'];
	$harga_martabak		= $_POST['harga_martabak'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$informasi_martabak		= $_POST['informasi_martabak'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_martabak VALUES(NULL, '$nama_martabak', '$nama_menu', '$harga_martabak', '$gambar_martabak', '$informasi_martabak')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="../admin/admininputmartabak.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="../admin/admininputmartabak.php">Kembali</a>';	
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>