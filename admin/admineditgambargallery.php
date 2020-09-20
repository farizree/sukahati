<?php include'adminheader.php'; ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>Edit Gambar Gallery</h2></center>
                        <hr>
<?php
$query=mysqli_query($con,"select * from tbl_gallery where id_gallery = '$_GET[id_gallery]'"); 
while($lihat=mysqli_fetch_array($query)){ 
?>  




<form method="post" action="../proses/editgambargallery.php?id_gallery=<?php echo $lihat['id_gallery'] ?>" enctype="multipart/form-data">

      <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <h2><center>Gambar Team</center></h2>
              <img src="../gambar_gallery/<?=$lihat['gambar'];?>" style="height:300px;">
              <br>
              <br>
              <br>
              <center><p>Pilih Gambar</p></center>
<center><input type="file" accept="image/*" name="gambar" class="inputFile" value="asdsad"></center>
</div>
</div>
    <br>
  <br> 
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<center><input type="submit" name="upload" value="Ubah gambar belakang" class="btn btn-default" style="margin-top:30px;"></center>
<hr>
    </div>
  </div>
</form>




  <?php } ?>
    <br>
  <br>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->




<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->
