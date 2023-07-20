<?php 

include "include/header.php";

 ?>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li >Products Name</li>
    </ul>
	<i style="color: red">
						<?php 
						if(isset($_REQUEST['cid'])){
							$cId=$_REQUEST['cid'];
						}

						 ?>
					</i>
	  
<div id="myTab" class="pull-right">

</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		
		
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<?php 
			$limet=9;
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
                  WHERE product_table.product_category='$cId'
                  ORDER BY product_table.product_id DESC LIMIT {$offset},{$limet}";

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

		 ?>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.php?product_id=<?php echo $gatId; ?>"><img src="admin/uploads/<?php echo $gatimg ?>" alt=""/></a>
				<div class="caption">
				  <h5> <?php echo$gatName  ?></h5>
				  <p> 
					<?php echo$gatBro;  ?>
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="product_details.php?product_id=<?php echo $gatId; ?>">TK <?php echo $gatpri;  ?></a></h4>
				</div>
			  </div>
			</li>
		<?php }} ?>
			
		
		  </ul>
	<hr class="soft"/>
	</div>
</div>

	
	 		<div class="pajination">
 			<?php 
 			
 			$paginationQuery="SELECT * FROM product_table WHERE product_table.product_category='$cId' ";
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
 					echo 	" <li><a class='$active' href='alCategory.php?cid=".$cId."&page=$i'>".$i."</a></li> ";
 				}
 				echo '</ul>';
 			}


 			 ?>
			<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php 

include "include/footer.php";

 ?>