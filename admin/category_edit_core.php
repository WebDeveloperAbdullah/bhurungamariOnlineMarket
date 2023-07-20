<?php 
include("inclued/connect.php");

$catName=$_REQUEST['category_name'];
$catID=$_REQUEST['edit_cat_id'];

$updateQuery="UPDATE category_table SET category_name='$catName' WHERE category_id='$catID'";
$runQuery=mysqli_query($connect,$updateQuery);
if($runQuery){
		header('location:category.php?update_success');
}
else{
	header('location:category.php?update_error');

}


 ?>