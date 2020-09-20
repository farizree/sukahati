<?php include ("proses/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>


</head>
<?php include ("header/header.php"); ?>
<body>
<div class="contact">
                <div class="container">
                    <div class="contact-top ">
                        <h3>Admin Login</h3>
                    </div>      
        
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Admin Login</h3>
                            
                            <hr>
                            
                            <form method="post" action="proses/proseslogin.php">
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" id="email_web" name="email_web">
                                </div>
                                <div class="top-margin">
                                    <label>Password <span class="text-danger">*</span></label>
                                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="password_web" name="password_web">
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-4 text-right">
                                         <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                    </div>
                </div>
            </div>

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