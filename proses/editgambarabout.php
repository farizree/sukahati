<?php

include 'connect.php';
if (isset($_POST['upload']))   {

$id_about     = $_GET['id_about'];

 $gambar_about=$_FILES['gambar_about'] ['name'];
 $lokasi=$_FILES['gambar_about'] ['tmp_name']; 
 $lokasitujuan="../gambar_gallery";
 $upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_about);


        $update = mysqli_query($con,"UPDATE tbl_about SET 
                                           gambar_about   ='".$gambar_about."'
                                           WHERE id_about = '$id_about'") or die(mysqli_error()); 
if ($update) 	{
			die("'<script>alert('Data Berhasil Dirubah. :) '); window.location = '../admin/admininputabout.php'</script>'");
		} else {
			die("'<script>alert('Data Gagal Dirubah. :) '); window.location = '../admin/admininputabout.php'</script>'");
		}
}
?>