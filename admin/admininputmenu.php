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

<form method="post" action="../proses/inputmenu.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Menu" name="nama_menu">
    </div>
  </div>
  <br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Id Martabak" name="id_martabak">
    </div>
  </div>
  <br>



    <br>
  <br> 

  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload Menu" class="btn btn-default">
    </div>
  </div>
</form>
    <br>
  <br>


<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Id Martabak</th>
<th>Nama Menu</th>
<th>Actionn</th>
</tr>   
<?php
$query=mysqli_query($con,"select * from tbl_menu");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_menu']; ?></td> 
<td><?php echo $lihat['id_martabak'] ?></td>  <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['nama_menu'] ?></td>
<td><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Edit Menu
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-default" href="admineditmenu.php?id_menu=<?php echo $lihat['id_menu'] ?>">Edit Teks</a></li>
      <li><a class="btn btn-default" href="../proses/hapusmenu.php?id_menu=<?php echo $lihat['id_menu'] ?>">Hapus</a></li>
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