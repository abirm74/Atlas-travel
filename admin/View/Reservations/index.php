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
                     <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="width: 3%">id_reservation</th>
                          <th style="width:20%">date_creation</th>
                          <th style="width:8%">client</th>
						              <th style="width:8%">Hotel</th>
						              <th style="width:2%">vol</th>
						              <th style="width:8%">price</th>
                                      <th style="width:10%">statement</th>
                                      <th style="width:10%">action</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
  foreach($reservations as $reser) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { 
                      ?>
                        <tr>
                          <td><?php echo $reser["id_reservation"]?></td>
                          <td>
                          <?php echo $reser["date_creation"]?>
                          </td>
						  <td>
              <?php echo $reser["client"]?>
                          </td>
						   <td>
               <?php echo $reser["hotel"]?>
                          </td>
						  <td>
              <?php echo $reser["vol"]?>
                          </td>
						  <td>
              <?php echo $reser["prix"]?>
                          </td>
						  <td>
              <?php echo $reser["statement"]?>
                          </td>
						  
						  
						  
						  
						  
                          <td nowrap>
              <a title='edit' href="index.php?controller=reservations&action=edit&id_reservation=<?php  echo $reser["id_reservation"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
              
			  <a title='Delete' href="javascript:ConfirmDelete('<?php  echo $reser["id_reservation"]?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
							
                            
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
			
			
			
<SCRIPT language=javascript>
   function ConfirmDelete(id_reservation) {
       if (confirm("Voulez-vous supprimer cette reservations ?")) { 
           window.location.href='index.php?controller=reservations&action=delete&id_reservation='+id_reservation;
       }
   }
</SCRIPT>