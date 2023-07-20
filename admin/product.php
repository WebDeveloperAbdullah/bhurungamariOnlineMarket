<?php 
include("inclued/header.php");

 

 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		
            		<h3>Post List</h3>
            		    <a href="addproduct.php" class ="btn btn-success"> Add Product</a>	
            		<div class="cattable">
                          
                               <form action="all_product_delete.php" method="POST">
                  <table class="table" border="2px">
                  <thead>
                    <th style="background-color: #000;color: #fff ;width:5%">S/N</th>
                    <th style="background-color: #000;color: #fff ;width:10%">productName</th>
                    <th style="background-color: #000;color: #fff ;width:15%">productCat</th>
                    <th style="background-color: #000;color: #fff ;width:10%">ProductBrond</th>
                    <th style="background-color: #000;color: #fff ;width:10%">productImg</th>
                    
                    <th style="background-color: #000;color: #fff ;width:10%">productEdit </th>
                    <th style="background-color: #000;color: #fff ;width:10%">productView </th>
                    <th style="background-color: #000;color: #fff ;width:10%">productDelete </th>
                    <th style="background-color: #000;color: #fff ;width:10%">
                      <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                    </th>
                  </thead>
                  <?php 

                  $serile=1;
                  $showCatQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  ORDER BY product_table.product_id DESC";
                 $runCatQuery=mysqli_query($connect,$showCatQuery);


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

                   ?>

                  <thead>
                    <th><?php echo $serile++; ?></th>
                  
                    <th><?php echo $gatName; ?></th>
                    <th><?php echo $gatCat; ?></th>
                    <th><?php echo $gatBro; ?></th>
                    <th><img width="50px" height="25px" src="uploads/<?php echo $gatimg; ?>"></th>
                    
                                    <td>
                                          <a href="product_edit.php?edit_id=<?php echo $gatId ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                          <a href="product_view.php?view_id=<?php echo $gatId ?>"><i class="far fa-eye-slash"></i></a>
                                    </td>
                                     <td>
                                          <a href="product_delete.php?delete_id=<?php echo $gatId ?> &catit=<?php echo $catId; ?>&broID=<?php echo $broId; ?> " onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                     </td>
                                     <td>
                                      <input type="checkbox" name="checkbox_al[]" value="<?php echo $gatId; ?> ">
                                    </td>
                  </thead>
                <?php }  } ?>
                </table>
              </form>
                      
                          
                             
                              

                           
                                  		</div>
                                  		

                                <div class="pajination">
                                  
                           


                                </div>
                                  	</div>
                                  	
                                  </div>

                              </div>
                          </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	