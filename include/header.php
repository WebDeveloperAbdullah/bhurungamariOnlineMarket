<?php 

include "connect.php";

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WEB SHOPING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
	
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">
		<img src="themes/images/imageist.png" alt="image">
	</div>
	<div class="span6">
	<div class="pull-right">

	
		
		
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>TK:
		<?php if (isset($_SESSION['sum'])) {
				echo $_SESSION['sum'];
				}
				else{
					echo "Cart:empty";
				}

			 ?>
		[ <?php if(isset($_SESSION['qunt'])) {
			echo $_SESSION['qunt'];
		}
		else{
			echo "0";
		} ?>] Itemes in your cart </span> </a> 
		
		
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img height="110px" width="180px;" src="themes/images/online shopping.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="ourteam.php">Our Team</a></li>

	 <li class="">
	 		 <?php 
         if(isset($_COOKIE["PHPMASUMRAISHA"])) {
 	     echo "<a href='profile.php'>Profile</a>";

            }
 ?>
	 	
	 </li>

	

	 <li class=""><a href="freeDeliveryZone.php">Free Delivery Zone</a></li>
	 <li class=""><a href="normal.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li>
	 <?php 
 if(isset($_COOKIE["PHPMASUMRAISHA"])) {
 	echo "<a href='logout.php'>LogOut</a>";

}else{
	  echo "<a href='login.php'>Login</a>";
}
 ?>
</li>
	 
	 
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p></p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.php"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/6.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">

		<div class="well">
			<span class="btn btn-mini">Tk:
				<?php if (isset($_SESSION['sum'])) {
				echo $_SESSION['sum'];
			} 
 				else{
 					echo "Cart:empty";
 				}

			?> </span>
		
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php if(isset($_SESSION['qunt'])) {
			echo $_SESSION['qunt'];
		}
		else{
			echo "0";
		} ?>] Itemes in your cart </span> </a> 
		</div>
		<ul id="sideManu" class="">
			<li class="subMenu open"><a> PRODUCT CATEGORY</a>
				<ul>
					<?php 					$catQuery="SELECT * FROM category_table ";
					$runCatQuery=mysqli_query($connect,$catQuery);
					if($runCatQuery) {
						while ($catDatagat=mysqli_fetch_assoc($runCatQuery)) {
							$catId=$catDatagat['category_id'];
							$catName=$catDatagat['category_name'];
					 ?>
				<li><a href="alCategory.php?cid=<?php echo $catId; ?>"> <?php echo $catName;?></a></li>
		<?php }} ?>
				</ul>
			</li>
			<li class="subMenu"><a> PRODUCT BROND </a>
			<ul>
					<?php 
					$bronQuery="SELECT * FROM table_brand ";
					$runBronQuery=mysqli_query($connect,$bronQuery);
					if($runBronQuery) {
						while ($catBrongat=mysqli_fetch_assoc($runBronQuery)) {
							$bronId=$catBrongat['brand_id'];
							$bronName=$catBrongat['brand_name'];
					 ?>
				<li><a  href="albrond.php?cid=<?php echo $bronId; ?>"> <?php echo $bronName; ?></a></li>
		<?php }} ?>
				</ul>
			</li>
			<!-- <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li> -->
		<!-- 	<li><a href="products.php">HEALTH & BEAUTY [18]</a></li> -->
			<!-- <li><a href="products.php">SPORTS & LEISURE [58]</a></li> -->
			<!-- <li><a href="products.php">BOOKS & ENTERTAINMENTS [14]</a></li> -->
		</ul>
		<br/>

		<?php 
		$productQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                  ORDER BY product_table.product_id DESC LIMIT 2";

                  $runProQuery=mysqli_query($connect,$productQuery);
                  if ($runProQuery) {
                  	while ($gatPro=mysqli_fetch_assoc($runProQuery)) {
                  		$gatId=$gatPro['product_id'];
                       $gatName=$gatPro['product_name'];
                       $gatCat=$gatPro['category_name'];
                       $gatBro=$gatPro['brand_name'];
                       $gatimg=$gatPro['product_image'];
                       $gatpri=$gatPro['product_price'];
                  


		 ?>
		  <div class="thumbnail">
			<img src="admin/uploads/<?php echo $gatimg; ?>" href="product_details.php?product_id=<?php echo $gatId; ?>" alt="Bootshop panasonoc New camera"/>

			<div class="caption">
			  <h5><?php echo $gatName; ?></h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_details.php?product_id=<?php echo $gatId; ?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="product_details.php?product_id=<?php echo $gatId; ?>">TK<?php echo $gatpri; ?></a></h4>
			</div>
		  </div><br/>
		<?php }} ?>
			
			<div class="thumbnail">
				<img src="themes/images/prement.jpg" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->