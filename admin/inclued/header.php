<?php 

include("connect.php");
include("founction.php");
 if(!isset($_COOKIE["PHPMASUMRAISHA"])) {
    header("location:login.php");
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="English">
    <meta name="description" content="It is a website about education">
    <meta name="keywords" content="blog,cms blog">
    <meta name="author" content="Abdulla Al Masum">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> WEB SHOPING  </title>
    <link rel="icon"  href="/favicon.png">
    <link href="favicon.png" rel="apple-touch-icon">

</head>
<body>

	<header>
		<div class="container">

		<div class="row no-gutters">
			<div class="col-11">
				<div class="min_menu"> 
					<ul>
					<li><a href="index.php">Dashbord</a></li>
					<li><a href="userprofile.php">User Profile</a></li>
					<li><a href="changePass.php">Change Password</a></li>
                   
					<li><a href="inbox.php">inbox

                          <?php 

                        $showOrderin="SELECT * FROM contact_table WHERE contact_roll='0'";
                        $runQueryin=mysqli_query($connect,$showOrderin);
                        $rowCountin=mysqli_num_rows($runQueryin);
                        if ($rowCountin) {
                            echo"($rowCountin)";
                        }else{
                            echo "(0)";
                        }

                         ?>
                       

                    </a></li>
					<li><a href="orderView.php">Order

                        <?php 

                        $showOrder="SELECT * FROM table_order WHERE status='0'";
                        $runQuery=mysqli_query($connect,$showOrder);
                        $rowCount=mysqli_num_rows($runQuery);
                        if ($rowCount) {
                            echo"($rowCount)";
                        }else{
                            echo "(0)";
                        }

                         ?>


                    </a></li>



                    <li><a href="http://localhost/bhurungamariOnlineMarket/index.php">view website</a></li>
				</ul>
					
				</div>

			</div>
            <div class="min_menu1">
            <div class="col-1">
                <a class="btn btn-info" href="logOut.php"> Log Out</a>
            </div>
        </div>
			
		</div>

	</div>
	<div class="container">

	<div class="row">
        
 	
 		  <div class="col-3">
 		  	<div class="sid_menu">
 		  		<h2 style="padding-left:  80px;padding-top: 10px;padding-bottom: 10px;background-color: blue">Site Option</h2>
            
                <ul>
                    
                    <li ><a href='titleSlogan.php'>Title & Slogan</a></li>";
                     


                     
                   
                     <li >
                        <a href="socialMedia.php">Social Media</a>
                    </li>
                  
                     <li><a href='copyRight.php'>Copyright</a> </li>
                   
                 <li > <a href='updatePage.php'>update Pages</a> </li>";
                  
                   

                    
                    <li ><a href='category.php'>category option</a> </li>;
                     

                    
                      <li><a href="brond.php">Brond</a></li>

                     <li > <a href="product.php">product Option</a></li>
                     <li > <a href="coupon.php">Coupon Code</a></li>
                     <li > <a href='singUp.php'>Add Admin</a></li>";
                  


                   
                   
                   
                    
                
                </ul>
            </div>
            </div>