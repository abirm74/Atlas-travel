<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hotels</h2>
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
                          <th style="width: 3%">id_Hotel</th>
                          <th style="width:30%">Name</th>
                          <th style="width:8%">Etoile</th>
						              <th style="width:8%">Total_Chambre</th>
						              <th style="width:2%">Number_chambre_Disponible</th>
                          <th style="width:8%">Phone_Number</th>
                          
						              <th style="width:10%">statement</th>
						 
                          <th style="width: 40%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
  foreach($hotels as $hotel) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { 
                      ?>
                      
                        <tr>
                          <td><?php echo $hotel["id_hotel"]?></td> 
                          
                          <td>
                          <?php echo $hotel["name"]?>
                          </td>
                          
						  <td>
              <?php echo $hotel["etoile"]?>
                          </td>
						   <td>
               <?php echo $hotel["total_chambre"]?>
                          </td>
						  <td>
              <?php echo $hotel["nb_disponible"]?>
                          </td>
						  <td>
              <?php echo $hotel["phone"]?>
                          </td>
                          
						  <td>
              <?php echo $hotel["statement"]?>
                          </td>
						  
						  
						  
						  
						  
                          <td nowrap>
                            <a title='Edit' href="index.php?controller=hotels&action=edit&id_hotel=<?php  echo $hotel["id_hotel"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
							<a title='Delete' href="javascript:ConfirmDelete('<?php  echo $hotel["id_hotel"]?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
							
						
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
   function ConfirmDelete(id_hotel) {
       if (confirm("Voulez-vous supprimer cet Hotel ?")) { 
           window.location.href='index.php?controller=hotels&action=delete&id_hotel='+id_hotel;
       }
   }
</SCRIPT>