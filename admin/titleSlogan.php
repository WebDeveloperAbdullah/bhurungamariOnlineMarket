<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
                        <h3>Title & Slogan</h3>
            		<div class="row">
            			<div class="col-7">
            			<div class="webtitle">
            				<?php 
            				$titleQuery="SELECT * FROM update_website";
            				$runQuery=mysqli_query($connect,$titleQuery);
            				if($runQuery){
            					while ($gatData=mysqli_fetch_assoc($runQuery)) {
            						$gatid=$gatData['update_id'];
            						$gattitle=$gatData['u_w_title'];
            						$gatSlogan=$gatData['web_sologan'];
            						$gatlogo=$gatData['logo_update'];
            					}
            				}

            				 ?>
            				
            				 <form action="title_core.php" enctype="multipart/form-data" method="POST">
            			<div class="from_lable2">
            				<label>Website  Title</label>
            			</div>
            			<div class="from_input2">
            				<input type="text" placeholder="Enter Website Title " value=" <?php echo $gattitle; ?> " name="website_title">
            			</div>
            			<div class="from_lable2">
            				<label>Website Slogan</label>
            			</div>
            			<div class="from_input2">
            				<input type="text" placeholder="Enter Website Slogan" value=" <?php echo $gatSlogan; ?> " name="website_slogab">
            			</div>
            			<div class="from_lable2"> 
                        <label >Update website logo </label>
                        
                  </div>
                  <div class="from_input2">
                        <input  type="file" value="<?php echo$gatlogo; ?>"  name="logo_img" required>
                        
                  </div>
            			<div class="from_send2">
            				<input type="hidden" value="<?php echo $gatid; ?> " name="update_id">
            				<input type="submit" class="btn btn-success" value="Update">
            			</div>
            		</form>
            			</div>
            			</div>
            			<div class="col-5"> 
            				<div class="weblogo">
            					<img src="<?php echo$gatlogo; ?>" >
            				</div>
            			</div>
            			
            		</div>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	