 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_martabak'];
    $query = mysqli_query($con,"select * from tbl_martabak where id_martabak = '".$lihat."'");
    $qData = mysqli_fetch_assoc($query);
    ?>

 <html>
  <head>
    <title>Suka Hati Martabak</title>
  
  </head>
  <body>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
      <ol class="breadcrumb">
<form method="post" action="../proses/editmartabak.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit Martabak</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_martabak" value="<?php echo $qData['id_martabak']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Martabak:</label>
      <input class="form-control" type="text" name="nama_martabak" value="<?php echo $qData['nama_martabak']?>">
    </div>
  </div><br><br>


<div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Menu:</label>
<select class="form-control" name="nama_menu" placeholder="Nama Menu">
     <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT nama_menu FROM tbl_menu ORDER BY id_menu ASC") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysql_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysql_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
  <option><?php echo $data['nama_menu'] ;?></option>

  <?php } } ?>
</select></div></div><br><br>

 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Harga Martabak:</label>
      <input class="form-control" type="text" name="harga_martabak" value="<?php echo $qData['harga_martabak']?>">
    </div>
  </div>
  <br>
    <div class="row">
              <div class="col-sm-10">
                   <div class="col-sm-10 col-sm-offset-2 ">
                  <textarea class="ckeditor" name="informasi_martabak" type="text"><?php echo $qData['informasi_martabak']; ?>></textarea><br><br>
                   </div>
                </div>
                </div>
 
    <br>
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" value="Simpan" class="btn btn-lg btn-primary" name="submit">
  <a href="admininputmartabak.php">
    </div>
  </div>
</form>
    <br>
  <br>



<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->


          </a>
          </div>
          </div>
          </body>
          </html>
          