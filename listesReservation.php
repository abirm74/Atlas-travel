
<?php
include "connexion.php";
if(isset($_POST["valider"])){  
  // name des attributs dans le formulaire                                        // à partir du base
$reqInsert='insert into reservations (date_creation,id_hotel,id_vol,id_client,prix,statement) values ("'.$_POST["date_creation"].'","'.$_POST["id_hotel"].'","'.$_POST["id_vol"].'","'.$_POST["id_client"].'","'.$_POST["prix"].'","'.$_POST["statement"].'")';
echo $reqInsert;
$idcom->exec($reqInsert); // exécution exec pour ajouter à la base
header("location:listesReservation.php");
}
?>
<?php  /////=> récupérer les données  à partir de la base pour faire l'affichage
include "connexion.php"; // appeler la connexion
$requete2="SELECT * FROM reservations"; // regroupement des données à partier de la base de données
$res=$idcom->query($requete2);   ///exécution d'une requete
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/ahmed.ico" type="image/ico" />

    <title>Atlas! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="listeusers.html" class="site_title"><img src="images/ahmed.ico"> <span>   Atlas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Ayedi Ahmed</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a>
                   
                    </li>
                    <li><a href="listeusers.html"><i class="fa fa-users"></i>Users</a>
                     
                    </li>
                    <li><a href="listesHotels.php"><i class="fa fa-hotel"></i>Hotels</a>
                     
                    </li>
                    <li><a href="#"><i class="fa fa-ticket"></i>Reservations<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="listesReservation.html">General_reservation</a></li>
                         
                          
                      </ul>
                  </li>
                    <li><a href="listesvols.php"><i class="fa fa-plane"></i></i>Vols</a>
                     
                    </li>
                    <li><a href="listesclient.php"><i class="fa fa-user"></i></i></i>Clients</a>
                     
                    </li>
                  
                  
                  
                 
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
         
        
          
            </div>
            <!-- /sidebar menu -->
			 </div>
        </div>

            

       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Ahmed Ayedi
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Reservations <small>Reservations Lists</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reservations</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 3%">id_reservation</th>
                          <th style="width:20%">date_creation</th>
                          <th style="width:8%">id_client</th>
						              <th style="width:8%">id_Hotel</th>
						              <th style="width:2%">id_vol</th>
						              <th style="width:8%">price</th>
                                      <th style="width:10%">statement</th>
                                      <th style="width:10%">action</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
  foreach($res->fetchAll(PDO::FETCH_ASSOC) as $reser) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { 
                      ?>
                        <tr>
                          <td><?php echo $reser["id_reservation"]?></td>
                          <td>
                          <?php echo $reser["date_creation"]?>
                          </td>
						  <td>
              <?php echo $reser["id_client"]?>
                          </td>
						   <td>
               <?php echo $reser["id_hotel"]?>
                          </td>
						  <td>
              <?php echo $reser["id_vol"]?>
                          </td>
						  <td>
              <?php echo $reser["prix"]?>
                          </td>
						  <td>
              <?php echo $reser["statement"]?>
                          </td>
						  
						  
						  
						  
						  
                          <td>
                            <a href="EditReservation.php?id=<?php  echo $reser["id_reservation"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
              <a href="supprimerreservation.php?id=<?php  echo $reser["id_reservation"]?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
              <a href="reshotel.html"><button type="button">reservation_hotel</button></a>
              <a href="resvol.html"><button  type="button">reservation_vol</button></a>
                            
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
		  <div class="title_left">
                <h3>Reservations <small>Insert Reservation</small></h3>
              </div>
		 
			 <div class="left_col" role="main">
			 
                    

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Insert Reservation</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="listesReservation.php" method="POST">
                                        
                            
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align" readonly>Id_reservation<span >*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" autofocus="true" readonly  />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">date_creation <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy"name="date_creation" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                <script>
                                                    function timeFunctionLong(input) {
                                                        setTimeout(function() {
                                                            input.type = 'text';
                                                        }, 60000);
                                                    }
                                                </script>
                                            </div>
                                        </div>
					
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">id_client<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class="form-control" name="id_client">
                                                        <option value="">Choose client</option>
                                                        <?php 
                                                        include "connexion.php";
                                                         $requete2="SELECT * FROM client";
                                                        $res=$idcom->query($requete2);
                                                        foreach($res->fetchAll(PDO::FETCH_ASSOC) as $clt)
                                                            { 
  
                                                         echo '<option value="'.$clt["cin"].'">'.$clt["first_name"].'  '.$clt["last_name"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="listesclient.php"><button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">id_Hotel<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="id_hotel">
                                                        <option>Choose hotel</option>
                                                        <?php 
                                                         $requete2="SELECT * FROM hotels";
                                                        $res=$idcom->query($requete2);
                                                        foreach($res->fetchAll(PDO::FETCH_ASSOC) as $clt)
                                                            { 
  
                                                         echo '<option value="'.$clt["id_hotel"].'">'.$clt["name"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="listesHotels.php"> <button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">id_vol<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="id_vol">
                                                        <option>Choose vol</option>
                                                        <?php 
                                                         $requete2="SELECT * FROM vols";
                                                        $res=$idcom->query($requete2);
                                                        foreach($res->fetchAll(PDO::FETCH_ASSOC) as $clt)
                                                            { 
  
                                                         echo '<option value="'.$clt["id_vol"].'">'.$clt["destination"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="listesvols.php"><button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                        
										
										 <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">price<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="prix" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
			
										
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">statement<span class="required">*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                
Start:
											<input type="radio" class="flat" name="statement" id="genderM" value="s" checked="" required style="margin-right:30px"/> 

                                            In progress:
                                            <input type="radio" class="flat" name="statement" id="genderF" value="p" />
                                            Finish:
											<input type="radio" class="flat" name="gender" id="genderF" value="F" /></div>
                                        </div>

                                        
                                       
                                        
                                       
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="valider">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		  
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>
    
    <!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>