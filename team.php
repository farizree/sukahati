<?php include ("proses/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


</head>
<?php include ("header/header.php"); ?>
<body>

<!-- team -->
	<div class="team" id="team">
		<div class="container">
 	 <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con,"SELECT * FROM tbl_team ORDER BY id_team ASC limit 1") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
       
?>
			<h3><?php echo $data['mini_team'] ?> <span><?php echo $data['tittle_team'] ?></span></h3>
			<?php
}
}
?>

			<div class="agile_team_grids">
	 <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con,"SELECT * FROM tbl_team ORDER BY id_team ASC") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
       
?>
				<div class="col-md-3 agile_team_grid">
					<div class="ih-item circle effect1">
						<div class="spinner"></div>
						<div class="img"><img src="gambar_gallery/<?=$data['gambar_team'];?>" alt=" " class="img-responsive" /></div>
						<div class="info">
							<div class="info-back">
							  <h4><?php echo $data['nama_team'] ?></h4>
							  <p><?php echo $data['jabatan_team'] ?></p>
							</div>
						</div>
					</div>
					<h4><?php echo $data['nama_team'] ?> <span><?php echo $data['jabatan_team'] ?></span></h4>
				</div>
			<?php
		}
}
?>				
				<div class="clearfix"> </div>
				<p class="eum">Team Kami.</p>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<ul class="footer-nav">
				<li><a href="aboutus.php" class="">About US</a></li>
				<li><a href="gallery.php" class="">Gallery</a></li>
				<li><a href="team.php" class="">Team</a></li>
				<li><a href="mailus.php" class="">Mail Us</a></li>
			</ul>
			<ul class="social-nav model-8">
				<li><a href="https://www.instagram.com/martabak1928/" class="facebook"><i></i></a></li>
				<li><a href="https://twitter.com/martabaksuka" class="twitter"><i> </i></a></li>
				<li><a href="https://www.facebook.com/Martabak-Suka-Hati-225749127866013/?skip_nax_wizard=true" class="g"><i></i></a></li>

			</ul>
			<h3><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Pusat : Jl. Toko Tiga - Glodok, Jak Bar<span><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>08180870007</span></h3>
			<div class="mail-foot">
				<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:martabak1928@gmail.com">martabak1928@gmail.com</a>
			</div>
		</div>
		<div class="copy-right">
			<p>© 2016 Suka Hati. All rights reserved </p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>