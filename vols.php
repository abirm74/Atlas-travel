<?php  /////=> récupérer les données  à partir de la base pour faire l'affichage
include "connexion.php"; // appeler la connexion
$requete2="SELECT * FROM vols"; // regroupement des données à partier de la base de données
$res=$idcom->query($requete2);   ///exécution d'une requete
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
        <div class="x_panel">
          <div class="x_title">
           <center><h1 style="color: green;">Vols</h1></center> 
            <ul class="nav navbar-right panel_toolbox">
             
              
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            

            <!-- start project list -->
            <table class="table table-striped projects" style="border-color: grey;border-style: solid;position:absolute;">
              <thead>
                <tr>
                  <th style="width: 3%;border: solid;border-color: grey;">id_vol</th>
                  <th style="width:35%;border: solid;border-color: grey;">destination</th>
                  <th style="width:8%;border: solid;border-color: grey;">prix</th>
                              <th style="width:8% ;border: solid;border-color: grey;">date_depart</th>
                              <th style="width:2%;border: solid;border-color: grey;">date_arrivee</th>
                              <th style="width:8%;border: solid;border-color: grey;">statement</th>
                              
                </tr>
              </thead>
              <tbody>
              <?php 
  foreach($res->fetchAll(PDO::FETCH_ASSOC) as $vols) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { ?>
                <tr style="border: solid;border-color: grey;">
                  <td style="border: solid;border-color: grey;"><?php echo $vols["id_vol"]?></td>
                  <td style="border: solid;border-color: grey;">
                  <?php echo $vols["destination"]?>
                  </td>
                  <td style="border: solid;border-color: grey;">
                  <?php echo $vols["prix"]?>
                  </td >
                   <td style="border: solid;border-color: grey;">
                   <?php echo $vols["date_depart"]?>
                  </td>
                  <td style="border: solid;border-color: grey;">
                  <?php echo $vols["date_arrivee"]?>
                  </td>
                  <td style="border: solid;border-color: grey;">
                  <?php echo $vols["statement"]?>
                  </td>
             
                </tr>
                <?php } ?>
               
        
                 
            </tbody>
            </table>
            <!-- end project list -->

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>