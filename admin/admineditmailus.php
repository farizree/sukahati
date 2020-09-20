 <div id="wrapper">
<?php
include ("adminheader.php");  
    $lihat = $_GET['id_mailus'];
    $query = mysqli_query($con,"select * from tbl_mailus where id_mailus = '".$lihat."'");
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
<form method="post" action="../proses/editmailus.php">
<div class="form-group">          
    <div class="col-sm-6 col-sm-offset-4"><br>
<h1> Admin Edit Data Mail Us</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_mailus" value="<?php echo $qData['id_mailus']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Mail Us:</label>
      <input class="form-control" type="text" name="nama_mailus" value="<?php echo $qData['nama_mailus']?>">
    </div>
  </div><br><br>

 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Phone Mail Us : </label>
      <input class="form-control" type="text" name="phone_mailus" value="<?php echo $qData['phone_mailus']?>">
    </div>
  </div>
  <br>

 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Email Mail Us : </label>
      <input class="form-control" type="text" name="email_mailus" value="<?php echo $qData['email_mailus']?>">
    </div>
  </div>
  <br>

 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Subject Mail Us : </label>
      <input class="form-control" type="text" name="subject_mailus" value="<?php echo $qData['subject_mailus']?>">
    </div>
  </div>
  <br>
    <div class="row">
              <div class="col-sm-10">
                   <div class="col-sm-10 col-sm-offset-2 ">
                  <textarea class="ckeditor" name="msg_mailus" type="text"><?php echo $qData['msg_mailus']; ?>></textarea><br><br>
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
          