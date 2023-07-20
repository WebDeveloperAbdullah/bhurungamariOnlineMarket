<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>coupon code</h3>
            		<a href="couponAdd.php" class ="btn btn-success"> Add Coupon</a>	
            		<div class="cattable">
                          
                               <form action="coupon_al_delete.php" method="POST">
                  <table class="table" border="2px">
                  <thead>
                    <th style="background-color: #000;color: #fff ;width:5%">S/N</th>
                    <th style="background-color: #000;color: #fff ;width:25%">Coupon Code</th>
                    <th style="background-color: #000;color: #fff ;width:10%">Coupon Value</th>
                    <th style="background-color: #000;color: #fff ;width:20%">Coupon Type</th>
                    <th style="background-color: #000;color: #fff ;width:10%">Cart Min Value</th>
                    <th style="background-color: #000;color: #fff ;width:5%">Coupon Status</th>
                    <th style="background-color: #000;color: #fff ;width:5%">Coupon Edit</th>
                    <th style="background-color: #000;color: #fff ;width:5%">Coupon Delete</th>
                    
 
                    <th style="background-color: #000;color: #fff ;width:10%">
                      <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                    </th>
                  </thead>
                  <?php 

                  $serile=1;
                  $showCatQuery="SELECT * FROM coupon_code_table";
                 $runCatQuery=mysqli_query($connect,$showCatQuery);


                  if($runCatQuery) {
                    while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
                      
                       $gatId=$gatData['coupon_id'];
                       $coupon_code=$gatData['coupon_code'];
                       $coupon_value=$gatData['coupon_value'];
                       $coupon_type=$gatData['coupon_type'];
                       $cart_min_value=$gatData['cart_min_value'];
                       $coupon_status=$gatData['coupon_status'];
                      

                   ?>

                  <thead>
                    <th><?php echo $serile++; ?></th>
                  
                    
                    <th><?php echo $coupon_code; ?></th>
                    <th><?php echo $coupon_value; ?></th>
                    <th><?php echo $coupon_type; ?></th>
                    <th><?php echo $cart_min_value; ?></th>
                    <th><?php echo $coupon_status; ?></th>
                    <td>
                                          <a href="coupon_edit.php?edit_id=<?php echo $gatId ?>" ><i class="fas fa-edit"></i></a>
                                     </td>
                    
                    
                    
                                  
                                     <td>
                                          <a href="coupon_delete.php?delete_id=<?php echo $gatId ?> " onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                     </td>
                                     <td>
                                      <input type="checkbox" name="checkbox_al[]" value="<?php echo $gatId; ?> ">
                                    </td>
                  </thead>
                <?php }  } ?>
                </table>
              </form>
                      
                          
                             
                              

                           
                                  		</div>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	