<?php include ("../proses/connect.php"); 
session_start();
if (isset($_SESSION['logged']))
{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Suka Hati - Admin</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../ckeditor/contents.css"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Martabak Suka Hati</span>Admin</a>
				<ul class="user-menu">
				<li><a href="../proses/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
					
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="admininputmartabak.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Input Martabak</a></li>
			<li><a href="admininputgallery.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Input Gallery</a></li>
			<li><a href="admininputmenu.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Input Menu Martabak</a></li>
			<li><a href="admininputteam.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Input Team</a></li>
			<li><a href="admininputabout.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Input About</a></li>
			<li><a href="listmail.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> List Mail</a></li>
		</ul>
	</div><!--/.sidebar-->
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
</body>

</html>
<?php 
}
else
{ 
die ("'<script>alert('Maaf hanya admin yang dapet mengakses'); window.location = '../index.php'</script>'");
}
?>