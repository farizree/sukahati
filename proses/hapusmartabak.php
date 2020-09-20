 <?php
include("connect.php");
$query = "delete from tbl_martabak where id_martabak = '$_GET[id_martabak]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputmartabak.php");
}
else {
echo "proses simpan gagal !.";
}
?>
