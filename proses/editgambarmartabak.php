<?php

include 'connect.php';
if (isset($_POST['upload']))   {

$id_martabak     = $_GET['id_martabak'];

 $gambar_martabak=$_FILES['gambar_martabak'] ['name'];
 $lokasi=$_FILES['gambar_martabak'] ['tmp_name']; 
 $lokasitujuan="../gambar_gallery";
 $upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_martabak);


        $update = mysqli_query($con,"UPDATE tbl_martabak SET 
                                           gambar_martabak   ='".$gambar_martabak."'
                                           WHERE id_martabak = '$id_martabak'") or die(mysqli_error()); 
if ($update) {
    header("location:../admin/admininputmartabak.php");
} else {
    echo "gagal mengupdate data";
}
}
?>