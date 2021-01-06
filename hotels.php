<?php session_start();



if(empty($_SESSION['currency']) || $_SESSION['currency']=="USD")
{
	$_SESSION['currency']="USD";
	$_SESSION['c_from']= "BDT";
	$_SESSION['c_to']= "USD";
	$_SESSION['c_symbol']= "$";
}
else if($_SESSION['currency']=="BDT")
{
	$_SESSION['c_from']= "USD";
	$_SESSION['c_to']= "BDT";
    $_SESSION['c_symbol']= "৳";
}	
$price = $_SESSION['currency'];
?>




<?php  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.1.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>


<body>
<div class="">
    <div class="page-title">
      

      <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          
        </div>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
       
          
          <div class="x_content">
          <main id="main">
            <!-- start project list -->
            <section id="portfolio" class="portfolio">
           <div class="container">

                <div class="section-title" data-aos="fade-left">
            <h2>Hotels</h2>
             <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

   

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      
            
            <?php  
			include 'admin/Config/connexion.php';
			include 'admin/Model/Hotel.php';
			$h=new Hotel('', '', '', '', '', '', '', '');
			$hotels=$h->index($cnx);
             foreach($hotels as $row)
			 { 
			 $img = "notfound.jpg";
			 if(!empty($row['photo']))
				 $img = $row['photo'];
			 ?>
			 
			 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="admin/images/Hotels/<?php echo $img; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $row['name']; ?></h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="admin/images/Hotels/<?php echo $img; ?>" data-gall="portfolioGallery" class="venobox vbox-item" title="<?php echo $row['name']; ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
			 
			 <?php } ?>
		                     			

												                     		


               </div>

             </div>
            </section>
</main>
            <!-- end project list -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>