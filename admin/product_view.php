<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>product View</h3>

            		<div class="productView">
            			<?php 
            			if (isset($_REQUEST['view_id'])) {
            				$viewID=$_REQUEST['view_id'];
            			}
            			else{
            				header("location:product.php");
            			}
            			$showCatQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  WHERE product_id ='$viewID'";
                 $runCatQuery=mysqli_query($connect,$showCatQuery);
                 $rowCound=mysqli_num_rows($runCatQuery);

                  if($runCatQuery) {
                    while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
                      
                       $gatId=$gatData['product_id'];
                       $broId=$gatData['brand_id'];
                       $catId=$gatData['category_id'];
                       $gatName=$gatData['product_name'];
                       $gatCat=$gatData['category_name'];
                       $gatBro=$gatData['brand_name'];
                       $gatimg=$gatData['product_image'];
                       $gatpri=$gatData['product_price'];
                       $gatchast=$gatData['product_chest'];
                       $gathight=$gatData['product_hight'];
                       $gatcode=$gatData['product_code'];
                       $gatcolor=$gatData['product_color'];
                       $product_body=$gatData['product_body'];
} }
                   ?>

            			<h6>product Name : <?php echo $gatName  ?></h6>
            			<h6>product cotegory : <?php echo $gatCat  ?></h6>
            			<h6>product Brond : <?php echo $gatBro  ?></h6>
            			<h6>product  Size : <?php echo $gatchast  ?></h6>
            			<h6>product Hight :<?php echo $gathight  ?></h6>
            			<h6>product Price :<?php echo $gatpri  ?></h6>
            			<h6>product color :<?php echo $gatcolor  ?></h6>
            			<h6>product code :<?php echo $gatcode  ?></h6>
            			
            			<img src="uploads/<?php echo $gatimg ; ?>">
            			<h6>product Description :</h6>
            			<p><?php echo $product_body  ?></p>

            			
            		</div>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	