<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Add New Page</h3>
            		<a class="btn btn-info" href="addpage.php">Add Page</a>

            		<h5 style="color: green"><?php 
            		if(isset($_REQUEST['insert_page_success'])) {
            			echo "insert_page_Successfull";
            		}



            		 ?></h5>
            		 <h5 style="color: red"><?php 
            		if(isset($_REQUEST['insert_page_error'])) {
            			echo "insert_page_Error";
            		}



            		 ?></h5>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	