<?php 
include("inclued/connect.php");

$cat_name=$_REQUEST['brondName'];

$catInsertQuery="INSERT INTO table_brand (brand_name) VALUES ('$cat_name')";
$runQuery=mysqli_query($connect,$catInsertQuery);
if($runQuery) {
	header('location:brond.php?add_success');
}
else{
	header('location:category.php?add_error');
}

 ?>