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
                              header("location:category.php");
                        }

            		$catUpdate="SELECT * FROM category_table WHERE category_id='$edit_id'";
            		$runQuery=mysqli_query($connect,$catUpdate);
            		$rowCount=mysqli_num_rows($runQuery);
            		if($rowCount> 0) {
            			while ($gatData=mysqli_fetch_assoc($runQuery)) {
            				$gatId=$gatData['category_id'];
            				$gatname=$gatData['category_name'];
            				
            			}
            		}

            		 ?>
            		<form action="category_edit_core.php" method="POST">
            			<div class="from_lable">
            				<label>Category Update</label>
            			</div>
            			<div class="from_input">
            				<input type="text" value=" <?php echo$gatname; ?> " placeholder="Enter Update  Category Name" name="category_name">
            			</div>
            			<div class="from_send">
            				<input type="hidden" value=" <?php echo$gatId; ?> " name="edit_cat_id">
            				<input type="submit" class="btn btn-success" value="Update Category">
            			</div>
            		</form>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	