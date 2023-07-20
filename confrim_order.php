<?php 
include("include/connect.php");

  

    $updateData=$_REQUEST['confrim_id'];
    

    $updateQuery="UPDATE table_order SET order_com = '1' WHERE order_id= '$updateData' ";
    $runUpQuery=mysqli_query($connect,$updateQuery);

    if($runUpQuery) {

    	header("location:order_listShow.php?success");
    }
    else{
    	header("location:order_listShow.php?error");
    }
  


   ?>