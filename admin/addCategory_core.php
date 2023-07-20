<?php 
include("inclued/connect.php");

$cat_name=$_REQUEST['categoryName'];

$catInsertQuery="INSERT INTO category_table (category_name) VALUES ('$cat_name')";
$runQuery=mysqli_query($connect,$catInsertQuery);
if($runQuery) {
	header('location:category.php?add_success');
}
else{
	header('location:category.php?add_error');
}

 ?>