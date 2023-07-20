<?php 
include("inclued/connect.php");

$deleteCat=$_REQUEST['delete_id'];

$deleteQuery="DELETE FROM category_table WHERE category_id ='$deleteCat' ";

$runQuery=mysqli_query($connect,$deleteQuery);
if($runQuery) {
	header("location:category.php?delete_success");
}else{
	header("location:category.php?delete_error");
}


 ?>