<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Insert Client</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                   <form action="" method="POST">
                                        
                            
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">cin<span >*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="cin" autofocus="true"  />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">first_name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="first_name" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">last_name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='number' name="last_name"  required='required'></div>
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">telephone<span class="required">*</span>
											</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='number' name="telephone"  required='required'></div>
                                             
                                            
											
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">email<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
                                                <input onblur="validate();" class="form-control" type="email" class='number' name="email" id="email"  required='required'></div>
												
											
										</div>
							
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">statement<span class="required">*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                

                                                start:
											<input type="radio" class="flat" name="statement" id="genderM" value="D" checked="" required style="margin-right:30px"/> not 
                                            In progress:
                                            <input type="radio" class="flat" name="statement" id="genderF" value="P" />
                                              end:
											<input type="radio" class="flat" name="statement" id="genderF" value="E" /></div>
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
					
					
					
					
					
					
					<script>
         function checkEmail(email) {
             var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
             return re.test(email);
         }
         function validate() {
             var email = document.getElementById("email").value;
         
             if (checkEmail(email)) {
                 alert('Adresse e-mail valide');
             } else {
                 alert('Adresse e-mail non valide');
             }
             return false;
         }
      </script>