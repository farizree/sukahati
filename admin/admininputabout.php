<?php include ("adminheader.php"); ?>
     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
    <div class="row">
      <ol class="breadcrumb">
       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>Input About</h2></center>
                        <hr>

<form method="post" action="../proses/inputabout.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Tittle" name="tittle_about">
    </div>
  </div>
  <br>
  <br>
  <br>

   <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama About" name="nama_about">
    </div>
  </div>
  <br>
  <br>

    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Team</p>
<input type="file" accept="image/*" name="gambar_about" class="inputFile">

</div>
</div>


    <br>
  <br> 
 <div class="form-group">
    <div class="col-sm-10 col-sm-offset-1 ">
<textarea class="ckeditor" name="deskripsi_about"></textarea>
    </div>
  </div>
    <br> <br>
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload" class="btn btn-primary">
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
<th>Nama About</th>
<th>deskripsi</th>
<th> Action </th>

</tr>   
<?php
$query=mysqli_query($con,"select * from tbl_about");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_about']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['tittle_about'] ?></td>
<td><?php echo $lihat['nama_about'] ?></td>
<td><?php echo $lihat['deskripsi_about'] ?></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Edit Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-default" href="admineditabout.php?id_about=<?php echo $lihat['id_about'] ?>">Edit Teks</a></li>
    <li><a href="admineditgambarabout.php?id_about=<?php echo $lihat['id_about'] ?>">Edit Gambar</a></li>
    <li><a class="btn btn-default" href="../proses/hapusabout.php?id_about=<?php echo $lihat['id_about'] ?>">Hapus</a></li>
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