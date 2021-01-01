<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ATLAS | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
   

            <!-- sidebar menu -->
            
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            </div>
            <!-- /menu footer buttons -->
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
                      <img src="images/img.jpg" alt="">John Doe
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
       

        <?php
        include "../core/factureC.php";
        include "../entities/facture.php";
        
           $pC=new factureC();
           $mylist=$pC->afficherfacture();
        ?>
        
        
        
        
        <!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
          $("#Search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#MYtable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        
        </script>
        
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Splite-Admin Dashboard</title>
        
            <!--favicon -->
            <link rel="icon" href="favicon.html" type="image/x-icon"/>
        
            <!--Bootstrap.min css-->
            <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        
            <!--Icons css-->
            <link rel="stylesheet" href="assets/css/icons.css">
        
            <!--Style css-->
            <link rel="stylesheet" href="assets/css/style.css">
        
            <!--mCustomScrollbar css-->
            <link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">
        
            <!--Sidemenu css-->
            <link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">
        
            <!--Morris css-->
            <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        
          
        
          <body>
            
           
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        function sortTable1(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("MYtable");
          switching = true;
          //Set the sorting direction to ascending:
          dir = "asc"; 
          /*Make a loop that will continue until
          no switching has been done:*/
          while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
              //start by saying there should be no switching:
              shouldSwitch = false;
              /*Get the two elements you want to compare,
              one from current row and one from the next:*/
              x = rows[i].getElementsByTagName("TD")[n];
              y = rows[i + 1].getElementsByTagName("TD")[n];
              /*check if the two rows should switch place,
              based on the direction, asc or desc:*/
              if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  //if so, mark as a switch and break the loop:
                  shouldSwitch= true;
                  break;
                }
              } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  //if so, mark as a switch and break the loop:
                  shouldSwitch = true;
                  break;
                }
              }
            }
            if (shouldSwitch) {
              /*If a switch has been marked, make the switch
              and mark that a switch has been done:*/
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              //Each time a switch is done, increase this count by 1:
              switchcount ++;      
            } else {
              /*If no switching has been done AND the direction is "asc",
              set the direction to "desc" and run the while loop again.*/
              if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
              }
            }
          }
        }
        </script>
        
                <!--aside closed-->
        
                        <!--app-content open-->
                <div class="app-content">
                  <section class="section">
        
                    <!--page-header open-->
                    <div class="page-header">
                          <div class="search-element mr-2">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"  name="id_reservation" id="Search" >
                                       
                                  
                    <!--page-header closed-->
        
                                <!--row open-->
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <span class="table-add float-right">
                              <a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
                        
                            
                          </div>
                          <div class="card-body">
                            <div id="table" class="table-responsive table-editable">
        
                                                  
        
        
                              
                              <table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" id="MYtable">
                                <tr>
                                  <th onclick="sortTable1(1)" class="text-center">id_facture</th>
                                  <th onclick="sortTable1(2)" class="text-center">id_reservation</th>
                                  <th onclick="sortTable1(3)" class="text-center">date_facture</th>
                                  <th onclick="sortTable1(4)" class="text-center">prixtotal</th>
                                  
                                </tr>
                                
                                <?php
        
        
        
        
        foreach ($mylist as $row)       /*pour connaitre le nombre de lignes dans la table a afficher*/
        {
        ?>
        <tr>
          <td><?php echo $row['id_facture'];   ?></td>
          <td><?php echo $row['id_reservation'];   ?></td>
          <td><?php echo $row['date_facture'];   ?></td>
          <td><?php echo $row['prixtotal'];   ?></td>
          
          </td>
        </tr>
        <?php
        }
        ?>
        
                                
                                
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--row closed-->
        
                  </section>
                </div>
                <!--app-content closed-->
        
        
        <!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:50 GMT -->
        

        







        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>