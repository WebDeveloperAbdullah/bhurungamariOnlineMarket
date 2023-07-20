<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
           
            	<div class="min_conteant">
                        
            		 	<h1>Add New Category</h1>
            		<a  class="btn btn-success" href="category.php">Back Category List</a>


            		<form action="addCategory_core.php" method="POST">
            			<div class="from_lable">
            				<label>Category</label>
            			</div>
            			<div class="from_input">
            				<input type="text" placeholder="Enter New Category " name="categoryName">
            			</div>
            			<div class="from_send">
            				<input type="submit" class="btn btn-success" value="Add Category">
            			</div>
            		</form>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("../inclued/footer.php");


 	 ?>	