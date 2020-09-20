<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Beanery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Volkhov:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- banner -->
	<div class="banner">
		<div class="banner-Info">
			<div class="container">
				<div class="w3l_banner_info">
					
					<section class="wrapper">
						<h2>Martabak Suka Hati Hj Dahlan</h2>
						<div class="sentence">Kami Menyajikan
							<div class="popEffect">
								<span>Martabak Terbaik.</span>
								<span>Rasa Yang Nikmat</span>
								<span>Makanan Yang Sehat</span>
								<span>Pelayanan Yang baik</span>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!--navigation-->
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Martabak<span>Suka Hati</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav navbar-left menu__list">
							<li class="menu__item "><a href="index.php" class="menu__link">Home</a></li>
							<li class="dropdown">
								<a href="#" class="menu__item" data-toggle="dropdown">Menu Martabak<b class="caret"></b></a>
						<ul class="dropdown-menu">
			
							 <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT nama_menu FROM tbl_menu ORDER BY id_martabak ASC") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysql_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysql_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>



            <li><a href="menumartabak.php?nama_menu=<?php echo $data['nama_menu'] ?>" class=" menu__link"><?php echo $data['nama_menu'] ;?> </a></li>
            <?php } } ?>
						</ul>
					</li>
							<li class="menu__item"><a href="team.php" class=" menu__link">Team</a></li>
							<li class="menu__item"><a href="gallery.php" class="menu__link">Gallery</a></li>
							<li class="menu__item"><a href="mailus.php" class="menu__link" >Mail Us</a></li>
			
						</ul>	
					</nav>
				</div>
			</nav>	
		</div>	
	</div>	
<!--navigation-->