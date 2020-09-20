 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_menu'];
    $query = mysqli_query($con,"select * from tbl_menu where id_menu = '".$lihat."'");
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
<form method="post" action="../proses/editmenu.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit Menu</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_menu" value="<?php echo $qData['id_menu']?>">
    </div>
  </div><br><br><br>

   <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">id Martabak:</label>
      <input class="form-control" type="text" name="id_martabak" value="<?php echo $qData['id_martabak']?>">
    </div>
  </div><br><br>


  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Martabak:</label>
      <input class="form-control" type="text" name="nama_menu" value="<?php echo $qData['nama_menu']?>">
    </div>
  </div><br><br>

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
          