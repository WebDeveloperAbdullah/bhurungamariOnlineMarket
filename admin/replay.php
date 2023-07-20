<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Massage Replay</h3>
            		<?php 
            		if(isset($_REQUEST['replay_id'])) {
            			$replayID=$_REQUEST['replay_id'];
            		}else{
            			header("location:inbox.php");
            		}
            		$showQuery="SELECT * FROM `contact_table` WHERE contact_id='$replayID'";

            		$runQuery=mysqli_query($connect,$showQuery);
            		$rowCount=mysqli_num_rows($runQuery);
            		if($rowCount=="1") {
            			while ($gatData=mysqli_fetch_assoc($runQuery)) {
            				$gatID=$gatData['contact_id'];
            				$contact_name=$gatData['contact_name'];
            				$contact_email=$gatData['contact_email'];
            				$contact_sub=$gatData['contact_sub'];
            				$contact_sms=$gatData['contact_sms'];
            				$contact_time=$gatData['contact_time'];
            			}
            		}

            		 ?>
            		 <form action="replay_core.php" enctype="multipart/form-data" method="POST">
                        


                  <div class="from_lable"> 
                        <label >To</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" readonly value=" <?php echo $contact_email; ?> " name="toEmail" required>
                        
                  </div>
                   <div class="from_lable"> 
                        <label >From</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" placeholder="Enter Your Email" name="from_email" required>
                        
                  </div>
                 <div class="from_lable"> 
                        <label >SubJect</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" placeholder="Enter SubJect" name="from_sub" required>
                        
                  </div>

                  <div class="from_lable"> 
                        <label>Send Replay Massage</label>
                        
                  </div>
                  <div class="from_input">
                        <textarea class="tinymce" style="width: 300px" name="re_massage" > </textarea>
                        
                  </div>
                  
                 
                        
                 

                  <div class="from_send">
                  <input type="submit" value="Send" class="btn btn-success">

                  </div>
            </form>
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	