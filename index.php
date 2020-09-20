<?php include ("proses/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


</head>
<?php include ("header/header.php"); ?>
<body>
<!-- nav-bottom -->
	<div class="nav-bottom">
		<div class="container">
			<h3>Selamat datang di <span>Martabak Suka Hati</span></h3><br><br>
			<div class="w3ls_nav_bottom">
				<div class="col-xs-4 tab-grid-left"> <!-- required for floating -->
					<!-- Nav tabs -->
					 <ul class="nav nav-tabs">
						<li class="active"><a href="#Tab1" data-toggle="tab">Martabak Manis</a></li>
						<li><a href="#Tab2" data-toggle="tab">Martabak Telur</a></li>
					</ul>
				</div>
				<div class="col-xs-8 tab-grid-right">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Tab1">
							<div class="col-md-7 w3ls_nav_bottom_left">
								<h4>Martabak Manis</h4>
								<p>makanan terbuat dari adonan terigu, telur, gula, yang ditaburi bubuk kacang tanah dan cokelat, kemudian dipanggang dan dilipat.</p>
							</div>
							<div class="col-md-5 w3ls_nav_bottom_right">
								<img src="images/keju.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="tab-pane" id="Tab2">
							<div class="col-md-7 w3ls_nav_bottom_left">
								<h4>Martabak Telur</h4>
								<p>Martabak Asin atau Martabak Telur merupakan sajian yang umum didapatkan di Arab Saudi, Yaman, Indonesia, Malaysia, Singapura, dan Brunei. Makanan ini dijumpai dengan berbagai variasi nama dan resep di berbagai tempat.
.</p>
							</div>
							<div class="col-md-5 w3ls_nav_bottom_right">
								<img src="images/telor.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //nav-bottom -->
<!-- about -->
	<?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con,"SELECT * FROM tbl_about ORDER BY id_about ASC limit 1") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
       
?>
	<div class="about" id="about">

			
		<div class="col-md-5 wthree_about_left">
			<img src="gambar_gallery/<?=$data['gambar_about'];?>" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-7 wthree_about_right">
			<h3><?php echo $data['tittle_about'] ?><span><?php echo $data['nama_about'] ?></span></h3>
			<p><?php echo $data['deskripsi_about'] ?>.</i></p>
			
		</div>
		<div class="clearfix"> </div>
	</div>
					<?php
}
}
?>
<!-- //about -->
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