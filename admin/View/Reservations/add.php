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
                                    <form class="" action="" method="POST">
                                        
                            
                                        
                                            
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Date reservation<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
											<input class="form-control" name="date_creation" type="date" value="<?php echo date('Y-m-d'); ?>">
                                              </div>
                                        </div>
					
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">client<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class="form-control" name="id_client">
                                                        <option value="">Choose client</option>
                                                        <?php 
                                                        
                                                        foreach($clients as $clt)
                                                            { 
  
                                                         echo '<option value="'.$clt["cin"].'">'.$clt["first_name"].'  '.$clt["last_name"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="index.php?controller=clients&action=add"><button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">Hotel<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="id_hotel">
                                                        <option>Choose hotel</option>
                                                        <?php 
                                                        foreach($hotels as $hotel)
                                                            { 
  
                                                         echo '<option value="'.$hotel["id_hotel"].'">'.$hotel["name"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="index.php?controller=hotels&action=add"> <button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="control-label col-md-3 col-sm-3 label-align ">vol<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="id_vol">
                                                        <option>Choose vol</option>
                                                        <?php 
                                                        foreach($vols as $vol)
                                                            { 
  
                                                         echo '<option value="'.$vol["id_vol"].'">'.$vol["destination"].'</option>';
                                                              }  ?>
                                                    </select>
                                                    <a href="index.php?controller=vols&action=add"><button style="position: relative;;bottom: 30px;left: 520px;" type="button">add</button></a>
                                                </div>
                                            </div>
                                        
										
										 <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">price<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="prix" data-validate-length-range="5,15" type="number" step="any" /></div>
                                        </div>
			
										
										

                                        
                                       
                                        
                                       
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="add">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>