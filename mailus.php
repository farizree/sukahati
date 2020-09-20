<?php include ("proses/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


</head>
<?php include ("header/header.php"); ?>
<body>
<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
			<h3>Suka Hati <span>Mail Us</span></h3>
			<div class="w3agile_mail_grids">
					<form action="proses/prosesmailus.php" method="post">
					<div class="col-md-6 w3agile_mail_grid">
						<input type="text" name="nama_mailus" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name="email_mailus" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					
				</div>
				<div class="col-md-6 w3agile_mail_grid">
					
						<input type="text" name="phone_mailus" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
						<input type="text" name="subject_mailus" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
					
				</div>
				
					<textarea name="msg_mailus" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
<!-- //mail -->
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