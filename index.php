<?php 

include "include/header.php";

 ?>
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  	<ul class="thumbnails">
			  	<?php 

                  
                  $showCatQuery="SELECT * FROM product_table  WHERE product_type ='1' LIMIT 8";
                 $runCatQuery=mysqli_query($connect,$showCatQuery);


                  if($runCatQuery) {
                    while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
                      
                       $gatId=$gatData['product_id']; 
                       $gatName=$gatData['product_name'];
     
                       $gatimg=$gatData['product_image'];
                       $gatpri=$gatData['product_price'];

                   ?>
			  
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php?product_id=<?php echo $gatId; ?>"><img src="admin/uploads/<?php echo $gatimg;?>" alt="img"></a>
					<div class="caption">
					  <h5><?php echo $gatName; ?></h5>
					  <h4><a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>">VIEW</a> <span class="pull-right"><a class="btn btn-primary" href="product_details.php?product_id=<?php echo $gatId; ?>">TK <?php echo $gatpri ; ?></a></span></h4>
					</div>
				  </div>
				</li>
			  
			<?php }} ?>
		</ul>
			  
			  </div>
			  </div>
			  </div>
			  </div><!--------------------->
		</div>
		<h4>Latest Products </h4>
		 <ul class="thumbnails">

		<?php 
			$limet=6;
 			 if(isset($_REQUEST['page'])){
 			$page=$_REQUEST['page'];
 		}else{
 			$page=1;
 		}

 			$offset=($page-1) *$limet;

		$letestQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  ORDER BY product_table.product_id DESC LIMIT {$offset},{$limet}";

                  $runLetestQuery=mysqli_query($connect,$letestQuery);

                  if($runLetestQuery) {
                  	while ($gatLData=mysqli_fetch_assoc($runLetestQuery)) {
                  		$gatId1=$gatLData['product_id'];
                       $broId1=$gatLData['brand_id'];
                       $catId1=$gatLData['category_id'];
                       $gatName1=$gatLData['product_name'];
                       $gatCat1=$gatLData['category_name'];
                       $gatBro1=$gatLData['brand_name'];
                       $gatimg1=$gatLData['product_image'];
                       $gatpri1=$gatLData['product_price'];

		 ?>
			 
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?product_id=<?php echo $gatId1; ?>"><img src="admin/uploads/<?php echo $gatimg1;?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $gatName1; ?></h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php?product_id=<?php echo $gatId1; ?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="product_details.php?product_id=<?php echo $gatId; ?>">TK <?php echo $gatpri1; ?></a></h4>
					</div>
				  </div>
				</li>
			<?php }}?>
				
				
				
			  </ul>	


		 		<div class="pajination">
 			<?php 
 			
 			$paginationQuery="SELECT * FROM product_table";
 			$runPagQuery=mysqli_query($connect,$paginationQuery);
 			if(mysqli_num_rows($runPagQuery)) {
 				$total_data=mysqli_num_rows($runPagQuery);
 				$total_page=ceil($total_data/$limet);
               echo '<ul>';
 				for($i=1;$i<= $total_page;$i++) {

 					if($i==$page) {
 						$active="active";
 					}
 					else{
 						$active=" ";
 					}
 					echo 	" <li><a class='$active' href='index.php?page=$i'>".$i."</a></li> ";
 				}
 				echo '</ul>';
 			}


 			 ?>

 	
 		



 	</div>

		</div>
		</div>
	</div>
</div>
<?php 

include "include/footer.php";

 ?>