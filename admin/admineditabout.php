 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_about'];
    $query = mysqli_query($con,"select * from tbl_about where id_about = '".$lihat."'");
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
<form method="post" action="../proses/editabout.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit About</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_about" value="<?php echo $qData['id_about']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Tittle </label>
      <input class="form-control" type="text" name="tittle_about" value="<?php echo $qData['tittle_about']?>">
    </div>
  </div><br><br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama About </label>
      <input class="form-control" type="text" name="nama_about" value="<?php echo $qData['nama_about']?>">
    </div>
  </div><br><br>
    <div class="row">
              <div class="col-sm-10">
                   <div class="col-sm-10 col-sm-offset-2 ">
                  <textarea class="ckeditor" name="deskripsi_about" type="text"><?php echo $qData['deskripsi_about']; ?>></textarea><br><br>
                   </div>
                </div>
                </div>
 
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
          