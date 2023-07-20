<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Show Full Massage</h3>
            		<?php 
            		if(isset($_REQUEST['view_id'])) {
            			$viewId=$_REQUEST['view_id'];
            		}
                        else{
                              header("location:inbox.php");
                        }
            		$showQuery="SELECT * FROM `contact_table` WHERE contact_id='$viewId'";

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
            		<h4>Full Name   : <?php echo $contact_name; ?> </h4>
            		<h4>Email Adder :<?php echo $contact_email; ?> </h4>
                        <h4>Email Sub :<?php echo $contact_sub; ?> </h4>

            		<h4>Massage Date:<?php echo  $contact_time  ?></h4>
            		<p><?php echo $contact_sms; ?></p>

            		<a href="inbox.php" class="btn btn-info"> Ok</a>
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	