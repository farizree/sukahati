 <?php
include("connect.php");
$query = "delete from tbl_team where id_team = '$_GET[id_team]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputteam.php");
}
else {
echo "proses simpan gagal !.";
}
?>
