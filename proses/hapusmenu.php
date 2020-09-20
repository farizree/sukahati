 <?php
include("connect.php");
$query = "delete from tbl_menu where id_menu = '$_GET[id_menu]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputmenu.php");
}
else {
echo "proses simpan gagal !.";
}
?>
