<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Insert Vol</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        
                            
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Id_vol<span >*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="id_vol" autofocus="true" readonly  />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Destination<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="destination" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">price<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='number' name="prix"  required='required'></div>
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date_depart <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" name="date_depart" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date_arrivee <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy"name="date_arrivee" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">statement<span class="required">*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                

                                                start:
											<input type="radio" class="flat" name="statement" id="genderM" value="start" checked="" required style="margin-right:30px"/> not 
                                            In progress:
                                            <input type="radio" class="flat" name="statement" id="genderF" value=" in progress" />
                                              end:
											<input type="radio" class="flat" name="statement" id="genderF" value="end" /></div>
                                        </div>
                                        <div class="field item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3  label-align">Upload Vol Photo</label>
                  <input type="file" id="user-img" name="photo">
                </div> 
                                        
                                       
                                        
                                       
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' name="add" class="btn btn-primary">Ajouter</button>
                                                    <button type='reset' class="btn btn-success">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>