<?php include ("adminheader.php"); ?>
     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
    <div class="row">
      <ol class="breadcrumb">
       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>List Mailus</h2></center>
                        <hr>

<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Nama Mail</th>
<th>Phone Mail</th>
<th>Email Mail</th>
<th>Subject Mail</th>
<th>Message</th>
<th> Action </th>
</tr>   
<?php
$query=mysqli_query($con,"select * from tbl_mailus");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_mailus']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['nama_mailus'] ?></td>
<td><?php echo $lihat['phone_mailus'] ?></td>
<td><?php echo $lihat['email_mailus'] ?></td>
<td><?php echo $lihat['subject_mailus'] ?></td>
<td><?php echo $lihat['msg_mailus'] ?></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Edit Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-default" href="admineditmailus.php?id_mailus=<?php echo $lihat['id_mailus'] ?>">Edit Teks</a></li>
    <li><a class="btn btn-default" href="../proses/hapusmailus.php?id_mailus=<?php echo $lihat['id_mailus'] ?>">Hapus</a></li>
  </ul>
</div> </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>