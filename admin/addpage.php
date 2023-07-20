<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		
            		<H3>Add A New  Page</H3>
						<a href="updatePage.php" class ="btn btn-success">  Page List</a>
            		    <form action="addpage_core.php"  method="POST">
                        


                  <div class="from_lable"> 
                        <label >Page Name</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" placeholder="Enter Page Name" name="page_name" required>
                        
                  </div>
                 

                  <div class="from_lable"> 
                        <label>Description</label>
                        
                  </div>
                  <div class="from_input">
                        <textarea style="width: 300px" name="post_description" placeholder="page_body"></textarea>
                        
                  </div>
                 
                

                  <div class="from_send">
                  <input type="submit" value="update" class="btn btn-success">

                  </div>
            </form>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	