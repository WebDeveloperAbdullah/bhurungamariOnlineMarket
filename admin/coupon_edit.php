<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            	<h3>Edit Coupon Code</h3>
                  <?php 
                  if ($_REQUEST['edit_id']) {
                        $edit_id=$_REQUEST['edit_id'];
                  }else{
                        header("location:coupon.php");
                  }
                  $editQuery="SELECT * FROM coupon_code_table  WHERE coupon_id ='$edit_id'";
                  $runQuery=mysqli_query($connect,$editQuery);
                  if ($runQuery) {
                        while ($gatData=mysqli_fetch_assoc($runQuery)) {
                              $gatid=$gatData['coupon_id'];
                              $gatCode=$gatData['coupon_code'];
                              $coupon_value=$gatData['coupon_value'];
                              $coupon_type=$gatData['coupon_type'];
                              $cart_min_value=$gatData['cart_min_value'];
                              $coupon_status=$gatData['coupon_status'];
                              
                        }
                  }


                   ?>

            	<a  class="btn btn-success" href="coupon.php">Back Coupon List</a>


            		<form action="edti_coupon_add_core.php" method="POST">
            			<div class="from_lable">
            				<label>Edit Coupon Code</label>
            			</div>
            			<div class="from_input">
            				<input type="text" value=" <?php echo $gatCode ?> " name="coupon_code">
            			</div>
            			<div class="from_lable">
            				<label> Edit Coupon Value</label>
            			</div>
            			<div class="from_input">
            				<input type="text" value=" <?php echo $coupon_value ?> " name="coupon_value">
            			</div>
            			<div class="from_lable">
            				<label>Edit Coupon Type</label>
            			</div>
            			<div class="from_input">
            				 <select name="coupon_type" >
                              <option selected disabled >Edit  Select Coupon Type </option>
                              <?php 
                              if($coupon_type=='percentage') {
                                    echo "<option selected value='percentage' >percentage </option>";
                                    echo "<option  value='Money' >Money </option>";
                              }
                              else{
                                    echo "<option  value='percentage' >percentage </option>";
                                    echo "<option selected value='Money ' >Money </option>";
                              }

                               ?>
                              
                        </select>
            			</div>
            			<div class="from_lable">
            				<label> Edit Cart Min Value</label>
            			</div>
            			<div class="from_input">
            				<input type="text"value=" <?php echo $cart_min_value ?> " name="cart_min_value">
            			</div>
                              <div class="from_lable">
                                    <label>Edit Coupon Status</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" value=" <?php echo $coupon_status ?> " name="coupon_status">
                              </div>
            			<div class="from_send">
            				<input type="submit" class="btn btn-success" value="Add Coupon">
                                    <input type="hidden" name="update_id"  value=" <?php echo $gatid; ?> ">
            			</div>
            		</form>


            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	