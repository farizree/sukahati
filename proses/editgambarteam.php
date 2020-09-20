<?php

include 'connect.php';
if (isset($_POST['upload']))   {

$id_team     = $_GET['id_team'];

 $gambar_team=$_FILES['gambar_team'] ['name'];
 $lokasi=$_FILES['gambar_team'] ['tmp_name']; 
 $lokasitujuan="../gambar_gallery";
 $upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_team);


        $update = mysqli_query($con,"UPDATE tbl_team SET 
                                           gambar_team   ='".$gambar_team."'
                                           WHERE id_team = '$id_team'") or die(mysqli_error()); 
if ($update) 	{
			die("'<script>alert('Data Team Berhasil Dirubah. :) '); window.location = '../admin/admininputteam.php'</script>'");
		} else {
			die("'<script>alert('Data Team Gagal Dirubah. :) '); window.location = '../admin/admininputteam.php'</script>'");
		}
}
?>