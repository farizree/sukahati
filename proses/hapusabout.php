 <?php
include("connect.php");
$query = "delete from tbl_about where id_about = '$_GET[id_about]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputabout.php");
}
else {
echo "proses simpan gagal !.";
}
?>
