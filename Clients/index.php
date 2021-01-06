<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>clients</h2>
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
                          <th style="width: 3%">cin</th>
                          <th style="width:30%">first_name</th>
                          <th style="width:8%">last_name</th>
						  <th style="width:8%">telephone</th>
						  <th style="width:2%">email</th> 
						  <th style="width:10%">statement</th>
						 
                          <th style="width: 40%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php 
  foreach($clients as $client) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { ?>
                        <tr>
                        <td><?php echo $client["cin"]?></td> 
                        <td><?php echo $client["first_name"]?></td> 
                        <td><?php echo $client["last_name"]?></td> 
                        <td><?php echo $client["telephone"]?></td> 
                        <td><?php echo $client["email"]?></td> 
                        <td><?php echo $client["statement"]?></td> 
                         
                          <td nowrap>
                          <a title='Edit' href="index.php?controller=clients&action=edit&cin=<?php  echo $client["cin"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                          
						  <a title='Delete' href="javascript:ConfirmDelete('<?php  echo $client["cin"]?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
							
							
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
   function ConfirmDelete(cin) {
       if (confirm("Voulez-vous supprimer ce Client ?")) { 
           window.location.href='index.php?controller=clients&action=delete&cin='+cin;
       }
   }
</SCRIPT>