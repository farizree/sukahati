 <?php
include("connect.php");
$query = "delete from tbl_mailus where id_mailus = '$_GET[id_mailus]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/listmail.php");
}
else {
echo "proses simpan gagal !.";
}
?>
