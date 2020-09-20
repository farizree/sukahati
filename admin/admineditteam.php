 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_team'];
    $query = mysqli_query($con,"select * from tbl_team where id_team = '".$lihat."'");
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
<form method="post" action="../proses/editteam.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit Team</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_team" value="<?php echo $qData['id_team']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Tittle </label>
      <input class="form-control" type="text" name="tittle_team" value="<?php echo $qData['tittle_team']?>">
    </div>
  </div><br><br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Mini Tittle </label>
      <input class="form-control" type="text" name="mini_team" value="<?php echo $qData['mini_team']?>">
    </div>
  </div><br><br>
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Team </label>
      <input class="form-control" type="text" name="nama_team" value="<?php echo $qData['nama_team']?>">
    </div>
  </div><br><br>




 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Jabatan Team </label>
      <input class="form-control" type="text" name="jabatan_team" value="<?php echo $qData['jabatan_team']?>">
    </div>
  </div>
  <br>
    <div class="row">
              <div class="col-sm-10">
                   <div class="col-sm-10 col-sm-offset-2 ">
                  <textarea class="ckeditor" name="deskripsi_team" type="text"><?php echo $qData['deskripsi_team']; ?>></textarea><br><br>
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
          