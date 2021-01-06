<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Vols</h2>
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
                          <th style="width: 3%">id_vol</th>
                          <th style="width:30%">destination</th>
                          <th style="width:8%">price</th>
						  <th style="width:8%">date_depart</th>
						  <th style="width:2%">date_arrivee</th>
						 
						  <th style="width:10%">statement</th>
						 
                          <th style="width: 40%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
  foreach($vols as $vol) /// parcourir la résultat du requete ligne par ligne 
  /// affichage d'attribut à partir de la  base suivant l'objet déclaré exemple :<?php echo $hotel["name"]
  { ?>
                        <tr>
                        <td><?php echo $vol["id_vol"]?></td> 
                        <td><?php echo $vol["destination"]?></td> 
                        <td><?php echo $vol["prix"]?></td> 
                        <td><?php echo $vol["date_depart"]?></td> 
                        <td><?php echo $vol["date_arrivee"]?></td> 
                        <td><?php echo $vol["statement"]?></td> 
                         
                          <td nowrap>
                          <a title='edit' href="index.php?controller=vols&action=edit&id_vol=<?php  echo $vol["id_vol"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                            
							<a title='Delete' href="javascript:ConfirmDelete('<?php  echo $vol["id_vol"]?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
				
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
   function ConfirmDelete(id_vol) {
       if (confirm("Voulez-vous supprimer ce vols ?")) { 
           window.location.href='index.php?controller=vols&action=delete&id_vol='+id_vol;
       }
   }
</SCRIPT>