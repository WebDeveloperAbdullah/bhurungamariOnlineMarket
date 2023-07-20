<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">

            				<H3>Update Copy Right</H3>
            		<h5 style="color: green"><?php 
            		if(isset($_REQUEST['update_success'])) {
            			echo "Copy Right Update_Successfull";
            		}



            		 ?></h5>
            		 <h5 style="color: red"><?php 
            		if(isset($_REQUEST['update_error'])) {
            			echo "Copy Right Update_Error";
            		}



            		 ?></h5>

            		<?php 

            		$showSocialQuery="SELECT * FROM copyright ";
            		$runQuery=mysqli_query($connect,$showSocialQuery);

            		if($runQuery){
            			while ($gatData=mysqli_fetch_assoc($runQuery)) {
            				$gatId=$gatData['copyright_id'];
            				$gatfb=$gatData['note'];
            				
            			}
            		}




            		 ?>
						
            		    <form action="copyright_core.php" enctype="multipart/form-data" method="POST">
                        


                  <div class="from_lable"> 
                        <label >Update Copy Right </label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gatfb; ?> " placeholder="Enter Copy Right" name="copyright" required>
                        
                  </div>
                  <div class="from_send">
                  	<input type="hidden" value=" <?php echo $gatId; ?> " name="gatid">
                  <input type="submit" value="Update" class="btn btn-success">

                  </div>

              </form>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	