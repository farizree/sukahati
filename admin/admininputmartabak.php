<?php include ("adminheader.php"); ?>
     <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
    <div class="row">
      <ol class="breadcrumb">
       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>Input Jenis Martabak</h2></center>
                        <hr>

<form method="post" action="../proses/inputmartabak.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Martabak" name="nama_martabak">
    </div>
  </div>
  <br>
  <br>
  <br>

   <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Martabak" name="harga_martabak">
    </div>
  </div>
  <br>
  <br>

    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
<select class="form-control" name="nama_menu" placeholder="Nama Product">
     <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con,"SELECT nama_menu FROM tbl_menu ORDER BY id_menu ASC") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
  <option><?php echo $data['nama_menu'] ;?></option>

  <?php } } ?>
</select>

    </div>
  </div>
  <br>
  <br>
  <br>


    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Martabak</p>
<input type="file" accept="image/*" name="gambar_martabak" class="inputFile">

</div>
</div>


    <br>
  <br> 
 <div class="form-group">
    <div class="col-sm-10 col-sm-offset-1 ">
<textarea class="ckeditor" name="informasi_martabak"></textarea>
    </div>
  </div>
    <br> 
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload Martabak" class="btn btn-default">
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
<th>Nama Martabak</th>
<th>Harga Martabak</th>
<th>Menu Martabak</th>
<th>Informasi Martabak</th>
<th> Action </th>
<th> Action </th>
</tr>   
<?php
$query=mysqli_query($con,"select * from tbl_martabak");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_martabak']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['nama_martabak'] ?></td>
<td><?php echo $lihat['harga_martabak'] ?></td>
<td><?php echo $lihat['nama_menu'] ?></td>
<td><?php echo $lihat['informasi_martabak'] ?></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Edit Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-default" href="admineditmartabak.php?id_martabak=<?php echo $lihat['id_martabak'] ?>">Edit Teks</a></li>
    <li><a href="admineditgambarmartabak.php?id_martabak=<?php echo $lihat['id_martabak'] ?>">Edit Gambar</a></li>
    <li><a class="btn btn-default" href="../proses/hapusmartabak.php?id_martabak=<?php echo $lihat['id_martabak'] ?>">Hapus</a></li>
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