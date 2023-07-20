<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		 	<h1> Category Update </h1>
            		<a  class="btn btn-success" href="category.php">Back Category List</a>

            		<?php 

            		if(isset($_REQUEST['edit_id'])){
            			$edit_id=$_REQUEST['edit_id'];
            		}else{
                              header("location:brond.php");
                        }

            		$catUpdate="SELECT * FROM table_brand WHERE brand_id='$edit_id'";
            		$runQuery=mysqli_query($connect,$catUpdate);
            		$rowCount=mysqli_num_rows($runQuery);
            		if($rowCount> 0) {
            			while ($gatData=mysqli_fetch_assoc($runQuery)) {
            				$gatId=$gatData['brand_id'];
            				$gatname=$gatData['brand_name'];
            				
            			}
            		}

            		 ?>
            		<form action="brond_edit_core.php" method="POST">
            			<div class="from_lable">
            				<label>Category Update</label>
            			</div>
            			<div class="from_input">
            				<input type="text" value=" <?php echo$gatname; ?> "  name="brondName">
            			</div>
            			<div class="from_send">
            				<input type="hidden" value=" <?php echo$gatId; ?> " name="edit_cat_id">
            				<input type="submit" class="btn btn-success" value="Update brond">
            			</div>
            		</form>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	