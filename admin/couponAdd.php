<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            	<h3>Add Coupon Code</h3>


               

            	<a  class="btn btn-success" href="coupon.php">Back Coupon List</a>
                     <i>
                        <?php 
                        if (isset($_REQUEST['All_Ready_Taken'])) {
                              echo "The Coupon Has Been Given Before";
                        }
                        elseif (isset($_REQUEST['Add_success'])) {
                              echo"The Coupon Add Success";
                        }
                        elseif (isset($_REQUEST['Add_error'])) {
                              echo "The Coupon Add Error";
                        }


                         ?>
                        

                  </i>

            		<form action="coupon_add_core.php" method="POST">
            			<div class="from_lable">
            				<label>Coupon Code</label>
            			</div>
            			<div class="from_input">
            				<input type="text" placeholder="Enter New Coupon Code " name="coupon_code">
            			</div>
            			<div class="from_lable">
            				<label>Coupon Value</label>
            			</div>
            			<div class="from_input">
            				<input type="text" placeholder="Enter New Coupon Value" name="coupon_value">
            			</div>
            			<div class="from_lable">
            				<label>Coupon Type</label>
            			</div>
            			<div class="from_input">
            				 <select name="coupon_type" >
                              <option selected disabled >Select Coupon </option>
                              <option value="percentage"  >Percentage </option>
                              <option value="Money  "  >Money  </option>
                        </select>
            			</div>
            			<div class="from_lable">
            				<label>Cart Min Value</label>
            			</div>
            			<div class="from_input">
            				<input type="text" placeholder="Enter New Cart Min Value" name="cart_min_value">
            			</div>
                              <div class="from_lable">
                                    <label>Coupon Status</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter New Coupon Status" name="coupon_status">
                              </div>
            			<div class="from_send">
            				<input type="submit" class="btn btn-success" value="Add Coupon">
            			</div>
            		</form>


            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	