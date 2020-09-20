<?php

include 'connect.php';
if (isset($_POST['upload']))   {

$id_gallery     = $_GET['id_gallery'];

 $gambar=$_FILES['gambar'] ['name'];
 $lokasi=$_FILES['gambar'] ['tmp_name']; 
 $lokasitujuan="../gambar_gallery";
 $upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar);


        $update = mysqli_query($con,"UPDATE tbl_gallery SET 
                                           gambar   ='".$gambar."'
                                           WHERE id_gallery = '$id_gallery'") or die(mysqli_error()); 
if ($update) 	{
			die("'<script>alert('Data Team Berhasil Dirubah. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		} else {
			die("'<script>alert('Data Team Gagal Dirubah. :) '); window.location = '../admin/admininputgallery.php'</script>'");
		}
}
?>