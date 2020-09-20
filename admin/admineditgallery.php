 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_gallery'];
    $query = mysqli_query($con,"select * from tbl_gallery where id_gallery = '".$lihat."'");
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
<form method="post" action="../proses/editgallery.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit gallery</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_gallery" value="<?php echo $qData['id_gallery']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Tittle </label>
      <input class="form-control" type="text" name="tittle_gallery" value="<?php echo $qData['tittle_gallery']?>">
    </div>
  </div><br><br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Mini Tittle </label>
      <input class="form-control" type="text" name="mini_gallery" value="<?php echo $qData['mini_gallery']?>">
    </div>
  </div><br><br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Gallery </label>
      <input class="form-control" type="text" name="nama_gallery" value="<?php echo $qData['nama_gallery']?>">
    </div>
  </div><br><br>




 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Jabatan Team </label>
      <input class="form-control" type="text" name="hari_gallery" value="<?php echo $qData['hari_gallery']?>">
    </div>
  </div>
  <br>
 
    <br>
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" value="Simpan" class="btn btn-lg btn-primary" name="submit">
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
          