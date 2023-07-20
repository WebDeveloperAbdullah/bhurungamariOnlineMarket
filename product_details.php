<?php 

include "include/header.php";

 ?>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li><a href="payment.php">Payment</a> <span class="divider">/</span></li>
   
   
    </ul> 	

    <?php 
    if($_REQUEST['product_id']) {
    	$show_id=$_REQUEST['product_id'];
    }
    else{
    	header("location:404.php");
    }


     ?>


     <?php 
     $letestQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  WHERE product_id ='$show_id'";

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
			


    
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="admin/uploads/<?php echo $gatimg ?>" style="width: 500px;height: 400px;"  >
				<img src="admin/uploads/<?php echo $gatimg ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   
                  </div>
                  <div class="item">
                  
                  </div>
                </div>
            
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
				<h3><?php echo "$gatName"; ?>  </h3>
				
				<hr class="soft"/>
				<form class="" action="product_details_core.php" method="POST" >
				  <div class="control-group">
					<label class="control-label"><span>Tk<?php echo "$gatpri"; ?></span></label>
					<div class="controls">
					<input type="number" class="span1" name="quantity" value="1" placeholder="Qty"/>
					  

					</div>
					<input type="hidden" value="<?php echo $show_id; ?>" name="cart_id">
					<input type="submit" class="btn btn-large btn-primary pull-right" name=""  value="Add to cart ">
					
				  </div>
				</form>
				
				
				<!-- <p>
				14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. 
				Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. 
				Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).
				
				</p>
				<a class="btn btn-small pull-right" href="#detail">More Details</a> -->
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
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
		<div class="tab-pane fade" id="profile">
		<div id="myTab" class="pull-right">
		 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
		 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
		</div>
		<br class="clr"/>
		<hr class="soft"/>
		<div class="tab-content">
			<div class="tab-pane" id="listView">
				<div class="row">	  
					<div class="span2">
						<img src="themes/images/products/4.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.php?product_id=<?php echo $gatId; ?>">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
					<div class="btn-group">
					  <a href="product_details.php?product_id=<?php echo $gatId; ?>" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
					  <a href="product_summary.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					 </div>
						</form>
					</div>
			
					
			
			
			
		
				
			
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<?php 

include "include/footer.php";

 ?>