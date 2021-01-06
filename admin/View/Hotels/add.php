

			 
                    

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Ajouter Hotel</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="" method="POST"  enctype="multipart/form-data">
                                        
                            
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align" readonly>Id_hotel<span >*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="id" autofocus="true" readonly  />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input required class="form-control" class='optional'  data-validate-length-range="5,15" name="name" type="text"/></div>
                                        </div>
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Etoile<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number"  name="etoile" required='required'></div>
                                        </div>
										
										 <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Total_Chambre<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' data-validate-length-range="5,15" name="total_chambre" type="text" /></div>
                                        </div>
										 <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Number_Chambre_Disponible<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="nb_disponible" data-validate-length-range="5,15" type="number" value="0"/></div>
                                        </div>
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Phone_Number<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input oninput="verif_tel()" class="form-control" class='optional' name="phone" id="phone" type="number" /></div>
                                        </div>
										
										<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">statement<span class="required">*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                
available:
											<input type="radio" class="flat" name="statement" id="genderM" value="available"  required style="margin-right:30px"/> not 
available:
											<input type="radio" class="flat" name="statement" id="genderF" value="not available"  /></div>
                                        </div>
                                        <div class="field item form-group">
                  <label  class="col-form-label col-md-3 col-sm-3  label-align">Upload Hotel Photo</label>
                  <input type="file" id="photo" name="photo">
                </div> 
              </div>

                                        
                                       
                                        
                                       
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' name="add" class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

						<script>
						function verif_tel(){
							var phone = document.getElementById("phone").value;
							var nb = phone.length;
							if(nb > 9)
							{
								phone.substr(8, 1);
								document.getElementById("phone").value = phone;
								alert('Phone doit etre en 8 chiffres !');
							}
						}
						
						</script>