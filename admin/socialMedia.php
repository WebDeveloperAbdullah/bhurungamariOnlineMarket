<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant"> 		
            		<H3>Update Social Media</H3>
            		<h5 style="color: green"><?php 
            		if(isset($_REQUEST['update_success'])) {
            			echo "Social Media update_successfull";
            		}



            		 ?></h5>
            		 <h5 style="color: red"><?php 
            		if(isset($_REQUEST['update_error'])) {
            			echo "Social Media update_error";
            		}



            		 ?></h5>

            		<?php 

            		$showSocialQuery="SELECT * FROM social_media ";
            		$runQuery=mysqli_query($connect,$showSocialQuery);

            		if($runQuery){
            			while ($gatData=mysqli_fetch_assoc($runQuery)) {
            				$gatId=$gatData['social_id'];
            				$gatfb=$gatData['fb_link'];
            				$gattw=$gatData['tw_link'];
            				$gatin=$gatData['in_link'];
            				$gatgp=$gatData['gp_link'];
            				$gatem=$gatData['em_link'];
            			}
            		}




            		 ?>
						
            		    <form action="social_core.php" enctype="multipart/form-data" method="POST">
                        


                  <div class="from_lable"> 
                        <label >Facebook </label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gatfb; ?> " placeholder="Facebook Link" name="facebook_link" required>
                        
                  </div>
                  <div class="from_lable"> 
                        <label >Twitter</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gattw; ?> " placeholder="Twitter Link" name="twitter_link" required>
                        
                  </div>
                  <div class="from_lable"> 
                        <label >Linkedin</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gatin; ?> " placeholder="Linkedin Link" name="linkdin_link" required>
                        
                  </div>
                  <div class="from_lable"> 
                        <label >Google Plus</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gatgp; ?> " placeholder="Google Plus Link" name="google_link" required>
                        
                  </div>
                  <div class="from_lable"> 
                        <label >Email</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" value=" <?php echo $gatem; ?> " placeholder="Email Link" name="email_link" required>
                       
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