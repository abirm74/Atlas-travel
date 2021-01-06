
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Atlas Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="stylesheet" href="back/dist/css/public.css" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>



	<div class="colorlib-loader"></div>

	<div id="page">

<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2">
					<div id="colorlib-logo"><a href="index.php">Atlas Travel</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li class=""><a href="blog.php">Hotels</a></li>
						<li class=""><a href="projetatlas\atlas_voyage.htm">Promotions</a></li>
						<li class=""><a href="blog.php">Blog</a></li>
						<li class=""><a href="about.php">About</a></li>
						<li class=""><a href="contact.php">Contact</a></li>
		
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-6.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>3 Days Tour</h2>
				   					<h1>Amazing Bandarban Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/cover-img-7.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>2 Days In Pokhara</h2>
				   					<h1>Breath-Taking Mountain Views</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/cover-img-8.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>5 Days Tour</h2>
				   					<h1>Explore Bhutan</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>


		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
<script language=javascript>
function verif()
{
var nom=document.f.nom.value;
var prenom=document.f.prenom.value;
var age=document.f.age.value;
var codepromo=document.f.codepromo.value;

if (nom.length==0){alert('verifier votre nom');
return false;
}
if (prenom.length==0){alert('verifier votre prenom');
return false;
}
if (age<18){alert('verifier votre age');
return false;
}
if (codepromo.length==0){alert('verifier votre code promo');
return false;
}
else
{
return alert('INSCRIPTION REUSSIT');}

}
</script>
</head>

<h2>&nbsp;</h2>
		<form name="f" method="POST" action="http://localhost/Atlas-travel/atlasbbd.php" onsubmit="verif()">
			
			<p align="center"><b><font color="#009933">INSCRIPTION A LA 
			PROMOTIONS</font></b></p>
			<p align="center">Nom<input type="text" name="nom" size="20"></p>
			<p align="center">Prenom<input type="text" name="prenom" size="20"></p>
			<p align="center">Age<input type="text" name="age" size="20"></p>
			<p align="center">Code promo<input type="text" name="codepromo" size="20"></p>
			<p align="center"><input type="submit" value="Inscri" name="B1"></p>
			<p align="center">&nbsp;</p>
		</form>
		<p align="center"><img border="0" src="1.PNG" width="295" height="146"><img border="0" src="2.PNG" width="299" height="152"></p>
		<p align="center"><font color="#009933" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ho1.php"><span style="text-decoration: none; font-weight:700">
<font color="#009933">HOTEL ITROPIKA TABARKA</font></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
<b><font color="#009933" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ho2.php"><span style="text-decoration: none"><font color="#009933">
HOTEL MENARA HAMMAMET</font></span></a></font></b></p>
		<p align="center">&nbsp;</p>
		<p align="center"><img border="0" src="3.PNG" width="289" height="148"><img border="0" src="4.PNG" width="294" height="147"></p>
		<p align="center">&nbsp;<font color="#009933"><a href="ho3.php"><span style="text-decoration: none; font-weight: 700"><font color="#009933">HOTEL LTI MAHDIA BEACH </font></span></a>
		<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ho4.php"><font color="#009933">
		<span style="text-decoration: none">HOTEL WELCOME LELLA BAYA</span></font></a></b></font></p>
		


		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					
						
					</div>
				</div>
				<div class="blog-flex">
					
					<div class="blog-entry aside-stretch-right">
						<div class="row">
			                <div class="col-md-12 animate-box"><a href="post-view.php?post_id=2" class="blog-post"><span class="img" style="background-image: url(Admin/dist/img/sajek.jpg);"></span><div class="desc">
						</div>
					</div>
				</div>
			</div>
		</div>

	


	


		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Atlas Travel</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href=""><i class="icon-twitter"></i></a></li>
								<li><a href=""><i class="icon-facebook"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Book Now</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="hotels.php">Hotels</a></li>
								<li><a href="tours.php">Tour</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Pinned Hotels</h4>
						<p>
							
						</p>
					</div>
					<div class="col-md-2">
						<h4>Pinned Posts</h4>
						
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>944 Silicon Malancho, <br> </li>
							<li><a href="tel://8801820570771"></a></li>
							<li><a href="mailto:"></a></li>
							<li><a href="">Find Me On Facebook</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By <a href="https://facebook.com/iamkih" target="_blank">Khalid</a>, <a href="https://www.facebook.com/ishrak.mohammad.3" target="_blank">Ishrak</a>, <a href="https://www.facebook.com/nashrif.rian" target="_blank">Nashrif</a> | Thanks To <a href="https://colorlib.com" target="_blank">Colorlib</a>

						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b82fb9aafc2c34e96e7eb01/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

	</body>
</html>
