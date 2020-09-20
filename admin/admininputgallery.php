<?php include ("adminheader.php"); ?>
     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
    <div class="row">
      <ol class="breadcrumb">
       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>Input Gallery</h2></center>
                        <hr>

<form method="post" action="../proses/inputgallery.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Tittle" name="tittle_gallery">
    </div>
  </div>
  <br>
  <br>
  <br>

   <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Mini Tittle" name="mini_gallery">
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Gallery" name="nama_gallery">
    </div>
  </div>
  <br>
  <br>

<div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Hari Gallery" name="hari_gallery">
    </div>
  </div>
  <br>
  <br>




    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Team</p>
<input type="file" accept="image/*" name="gambar" class="inputFile">

</div>
</div>


    <br>
  <br> 
<br>
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload Gambar Gallery" class="btn btn-primary">
    </div>
  </div>
</form>
    <br>
  <br>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->




<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Tittle</th>
<th>Mini Tittle</th>
<th>Nama Gallery</th>
<th>Hari Galery</th>
<th> Action </th>

</tr>   
<?php
$query=mysqli_query($con,"select * from tbl_gallery");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_gallery']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['tittle_gallery'] ?></td>
<td><?php echo $lihat['mini_gallery'] ?></td>
<td><?php echo $lihat['nama_gallery'] ?></td>
<td><?php echo $lihat['hari_gallery'] ?></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Edit Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-default" href="admineditgallery.php?id_gallery=<?php echo $lihat['id_gallery'] ?>">Edit Teks</a></li>
    <li><a href="admineditgambargallery.php?id_gallery=<?php echo $lihat['id_gallery'] ?>">Edit Gambar</a></li>
    <li><a class="btn btn-default" href="../proses/hapusgallery.php?id_gallery=<?php echo $lihat['id_gallery'] ?>">Hapus</a></li>
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