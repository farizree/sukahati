 <?php
include("connect.php");
$query = "delete from tbl_gallery where id_gallery = '$_GET[id_gallery]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputgallery.php");
}
else {
echo "proses simpan gagal !.";
}
?>
