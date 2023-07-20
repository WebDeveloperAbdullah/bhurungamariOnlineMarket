<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            			<H3> Product Edit</H3>
						<a href="product.php" class ="btn btn-success">  product List</a>
						<?php 
						if(isset($_REQUEST['edit_id'])){
							$edit_id=$_REQUEST['edit_id'];
						}
							$showPostQuery=" SELECT * FROM product_table  WHERE product_id ='$edit_id' ORDER BY product_id DESC  "; 
            			$runPostQuery=mysqli_query($connect,$showPostQuery);
            			if($runPostQuery) {
            				while ($gatData=mysqli_fetch_assoc($runPostQuery)) {
            					
            				   $gatId=$gatData['product_id'];
                       $proCat=$gatData['product_category'];
            				   $gatname=$gatData['product_name'];
                       $gatimg=$gatData['product_image'];
            			     $gatbody=$gatData['product_body'];
            				   $gatbrond=$gatData['product_brond'];
                       $gatchast=$gatData['product_chest'];
                       $product_type=$gatData['product_type'];
                       $gatcolor=$gatData['product_color'];
                       $gatprice=$gatData['product_price'];
                       $gattags=$gatData['product_tag'];
                       $gatcode=$gatData['product_code'];
            				} }
                         ?>
            		<form action="product_edit_core.php" method="POST" enctype="multipart/form-data">
                  <div class="from_lable"> 
                        <label >Edit Product Name</label>     
                  </div>
                  <div class="from_input">
                        <input type="text" placeholder="Edit  product Name" name="product_name" value="<?php echo $gatname ; ?>" required>     
                  </div>
                  <div class="from_lable"> 
                        <label >Edit Product Image </label>     
                  </div>
                  <div class="from_input">
                      <input type="hidden" value="<?php echo $gatimg; ?>" name="oldimage">
                        <input  type="file"  name="product_img" > 
                        <img height="25px" width="40px" src="uploads/<?php echo $gatimg ; ?>">    
                  </div>
                  <div class="from_lable"> 
                        <label>Edit Product Description</label>     
                  </div>
                   <div class="from_input" >
                   <textarea name="product_body"  ><?php echo $gatbody ; ?></textarea>
                   </div>
                  <div class="from_lable"> 
                        <label>Edit Product Category</label> 
                  </div>
                  <div class="from_input">
                        <select name="category_name" >
                           <option disabled selected>Product Category</option>
                           <?php 
                        $categoryQuery="SELECT * FROM category_table ORDER BY category_id DESC ";
                        $runQuery=mysqli_query($connect,$categoryQuery);
                        $rowCount=mysqli_num_rows($runQuery);
                      if($rowCount> 0 ) {
                           while ($gatCatData=mysqli_fetch_assoc($runQuery)) {       
                     if($proCat == $gatCatData['category_id'] ) {
                        $selected="selected";
                     }
                     else{
                        $selected="";  
                     }

                     echo "<option {$selected} value='{$gatCatData['category_id']}'>{$gatCatData['category_name']}</option>";
                  }
                  }
               
                ?>
                        </select>
                        
                  </div>
                     <div class="from_lable"> 
                        <label>Edit Brand Name</label>
                        
                   </div>
                  <div class="from_input">
                        <select name="pro_brand" >
                           <option disabled selected>Product Brond</option>
                           
                        <?php 

                        $brondQuery="SELECT * FROM table_brand ORDER BY brand_id DESC ";

                        $runQuery2=mysqli_query($connect,$brondQuery);
                                    $rowCount1=mysqli_num_rows($runQuery2);

                      if($rowCount1> 0 ) {
                           while ($gatCatData=mysqli_fetch_assoc($runQuery2)) {
                              
                     if($gatbrond == $gatCatData['brand_id'] ) {
                        $selected="selected";
                     }
                     else{
                        $selected="";
                        
                     }

                     echo "<option {$selected} value='{$gatCatData['brand_id']}'>{$gatCatData['brand_name']}</option>";
                  }

                  }
               

                ?>
                        </select>
                        
                  </div>
                  <div class="from_lable">
                                    <label>Edit Product  Size</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product  Size " value=" <?php echo $gatchast ; ?> " name="product_chest">
                              </div>
                              <div class="from_lable">
                                    <label> Edit Product Hight Size </label>
                              </div>
                              <div class="from_input">
                                   <select name="product_type">
                                    <option disabled selected>Featured Product</option>
                                    <?php 
                                    if($product_type=="1") {
                                       echo "<option selected value='1' >Featured </option>";
                                       echo "<option  value='2' >Ganaral </option>";
                                    }
                                    else{
                                       echo "<option selected value='2' >Ganaral </option>";
                                        echo "<option  value='1' >Featured </option>";

                                    }

                                     ?>

                                   </select>
                              </div>
                              <div class="from_lable">
                                    <label>Edit Product Color</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Color " value="<?php echo $gatcolor ; ?>" name="product_color">
                              </div>

                              <div class="from_lable">
                                    <label> Edit Product Price</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Price " value="<?php echo $gatprice ; ?>" name="product_price">
                              </div>
                              <div class="from_lable">
                                    <label> Edit Product Tage</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product tage " value="<?php echo $gattags ; ?>" name="product_tage">
                              </div>
                               <div class="from_lable">
                                    <label> Edit Product Code</label>
                              </div>
                              <div class="from_input">
                                    <input type="text" placeholder="Enter Product Code " value="<?php echo $gatcode ; ?>" name="product_code">
                              </div>

                  <div class="from_send">
                     <input type="hidden" name="productID" value=" <?php echo$gatId;?> ">
                     <input type="hidden" name="old_category" value="<?php echo$proCat;?>">
                     <input type="hidden" name="old_brond" value="<?php echo$gatbrond;?>">
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
 	