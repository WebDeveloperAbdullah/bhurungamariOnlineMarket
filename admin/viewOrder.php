<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Order Detelis</h3>


            		<div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table  class="table table-bordered">
                	<?php 
				 if ($_REQUEST['viewID']) {
					$viewID=$_REQUEST['viewID'];
				}else{
					header("location:orderView.php");
				}

                	$letestQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  WHERE product_id ='$viewID'";

                  $runLetestQuery=mysqli_query($connect,$letestQuery);

                  if($runLetestQuery) {
                  	while ($gatLData=mysqli_fetch_assoc($runLetestQuery)) {
                  		$gatId=$gatLData['product_id'];
                       $broId=$gatLData['brand_id'];
                       $catId=$gatLData['category_id'];
                       $gatName=$gatLData['product_name'];
                       $gatCat=$gatLData['category_name'];
                       $gatBro=$gatLData['brand_name'];
                       $gatimg=$gatLData['product_image'];
                       $gatpri=$gatLData['product_price'];
                       $gatcolor=$gatLData['product_color'];
                       $gatcode=$gatLData['product_code'];
                       $gatbody=$gatLData['product_body'];
                       $gatsize=$gatLData['product_chest'];
                      
 } }


                	 ?>



				<tbody>
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product Name: </td><td class="techSpecTD2"><?php echo $gatName; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product Brand: </td><td class="techSpecTD2"><?php echo $gatBro; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product Catogrey: </td><td class="techSpecTD2"><?php echo $gatCat; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product Model:</td><td class="techSpecTD2"><?php echo $gatBro; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product price:</td><td class="techSpecTD2">TK <?php echo $gatpri; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product color:</td><td class="techSpecTD2"><?php echo $gatcolor; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product size:</td><td class="techSpecTD2"><?php echo $gatsize; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Product Code:</td><td class="techSpecTD2"><?php echo $gatcode; ?></td></tr>
				</tbody>
				</table>

				<i>Product Full Details</i>
				<p><?php echo $gatbody ?></p>
				
              </div>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	