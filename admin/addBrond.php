
<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
           
            	<div class="min_conteant">
                        
            		 	<h1>Add New Brond</h1>
            		<a  class="btn btn-success" href="brond.php">Back Brond List</a>


            		<form action="addBrond_core.php" method="POST">
            			<div class="from_lable">
            				<label>Brond</label>
            			</div>
            			<div class="from_input">
            				<input type="text" placeholder="Enter New Brond " name="brondName">
            			</div>
            			<div class="from_send">
            				<input type="submit" class="btn btn-success" value="Add brond">
            			</div>
            		</form>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("../inclued/footer.php");


 	 ?>	