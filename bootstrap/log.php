<?php 

include "include/connect.php";

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
	  <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="ourteam.php">Our Team</a></li>

	 
	 	
	 </li>

	 <li class=""><a href="freeDeliveryZone.php">Free Delivery Zone</a></li>
	 <li class=""><a href="normal.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 
	 
	 
    </ul>

	 

 
	
	<div class="span9">
		 <?php 
 if(isset($_COOKIE["PHPMASUMRAISHA"])) {
    header("location:index.php");
}


  ?>
    
		
	
	
		<div class="">
			<div class="loginFrom">
			
			<form class="form-horizontal loginFrm" action="login_core.php" method="POST">
				<i><?php 
		if(isset($_REQUEST['filed_empty'])) {
			echo "filed must be empty";
		}


		 ?></i>
		 	<i><?php 
		if(isset($_REQUEST['login_error'])) {
			echo "Please Enter Right Email And PassWord";
		}


		 ?></i>
			  <div class="control-group">								
				<input type="text" id="inputEmail" name="email" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" name="password" placeholder="Password">
			  </div>
			 
			  <input type="submit" class="btn btn-success" value="Login" name="">
			</form>	
			<a href="register.php" class="btn btn-success">Register</a>	
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>

	