					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">						
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Categories</h3>
											<div class="list-group">

								                <?php
								                    require 'config.php';

								                    $statement_cat="select * from categories where deletedAt is null order by cat_id asc";
								                    $res_data_cat = mysqli_query($conn, $statement_cat);

								                    if (mysqli_num_rows($res_data_cat) > 0)
								                    {
								                        while($row = mysqli_fetch_assoc($res_data_cat))
								                        {

											  				echo "<a href=\"categories-view.php?cat_id=$row[cat_id]\" class=\"list-group-item list-group-item-action\">$row[title]</a>";

								                    	}	
								                    }
								                    else
								                    {
								                        echo "Nothing found in db";
								                    }
								                    //mysqli_close($conn);
								                ?>	

											</div>

									</div>
								</div>
							</div>
												
									
								
							
			     	    </div>
					</div>