<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		
            		<H3>Add A New  Post</H3>
						<a href="product.php" class ="btn btn-success">  Product List</a>
            		    <form action="addproduct_core.php" enctype="multipart/form-data" method="POST">
                        


                  <div class="from_lable"> 
                        <label >Add Product Name</label>
                        
                  </div>
                  <div class="from_input">
                        <input type="text" placeholder="Add  product Name" name="product_name" required>
                        
                  </div>
                  <div class="from_lable"> 
                        <label >Select Product Image </label>
                        
                  </div>
                  <div class="from_input">
                        <input  type="file"  name="product_img" required>
                        
                  </div>

                  <div class="from_lable"> 
                        <label>Product Description</label>
                        
                  </div>
                  
                   <div class="from_input" >
                   <textarea name="product_body" ></textarea>
                   </div>
                  <div class="from_lable"> 
                        <label>Product Category</label>
                        
                  </div>
                  <div class="from_input">
                        <select name="product_category" >
                              <option disabled selected >Select Category</option>
                              <?php 
                              $showCatQuery="SELECT * FROM category_table";
                              $runCatQuery=mysqli_query($connect,$showCatQuery);
                              $rowCount=mysqli_num_rows($runCatQuery);

                              if($rowCount> 0 ) {
                                    while($gatData=mysqli_fetch_assoc($runCatQuery)) {

                                          echo "<option value='{$gatData['category_id']}'>{$gatData['category_name']}</option>";
                                    }
                              }

                               ?>
                        </select>
                        
                  </div>

                     <div class="from_lable"> 
                        <label>Brand Name</label>
                        
                  </div>
                  <div class="from_input">
                        <select name="pro_brand" >
                              <option disabled selected >Select Brand</option>
                              <?php 
                              $showCatQuery="SELECT * FROM table_brand";
                              $runCatQuery=mysqli_query($connect,$showCatQuery);
                              $rowCount=mysqli_num_rows($runCatQuery);

                              if($rowCount> 0 ) {
                                    while($gatData=mysqli_fetch_assoc($runCatQuery)) {

                                          echo "<option value='{$gatData['brand_id']}'>{$gatData['brand_name']}</option>";
                                    }
                              }

                               ?>
                        </select>
                        
                  </div>
                  <div class="from_lable">
                                    <label>Product   Size</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Size " value="" name="product_chest">
                              </div>
                              <div class="from_lable">
                                    <label>Featured Product  </label>
                              </div>
                               <div class="from_input">
                                   <select name="product_type">
                                    <option disabled selected>Featured Product</option>
                                    <option value="1" >Featured </option>
                                    <option value="2" >Ganaral </option>

                                   </select>
                              </div>
                              <div class="from_lable">
                                    <label>Product Color</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Color " value="" name="product_color">
                              </div>

                              <div class="from_lable">
                                    <label>Product Price</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Price " value="" name="product_price">
                              </div>
                              <div class="from_lable">
                                    <label>Product Tage</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product tage " value="" name="product_tage">
                              </div>
                               <div class="from_lable">
                                    <label>Product Code</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Code " value="" name="product_code">
                              </div>

                  <div class="from_send">
                  <input type="submit" value="Add Product" class="btn btn-success">

                  </div>
            </form>
            		

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	