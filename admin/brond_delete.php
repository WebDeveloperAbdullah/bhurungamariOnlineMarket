<?php 
include("inclued/connect.php");

$deleteCat=$_REQUEST['delete_id'];

$deleteQuery="DELETE FROM table_brand WHERE brand_id ='$deleteCat' ";

$runQuery=mysqli_query($connect,$deleteQuery);
if($runQuery) {
	header("location:brond.php?delete_success");
}else{
	header("location:brond.php?delete_error");
}


 ?>