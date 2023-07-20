<?php 
include("inclued/connect.php");

$catName=$_REQUEST['brondName'];
$catID=$_REQUEST['edit_cat_id'];

$updateQuery="UPDATE table_brand SET brand_name='$catName' WHERE brand_id='$catID'";
$runQuery=mysqli_query($connect,$updateQuery);
if($runQuery){
		header('location:brond.php?update_success');
}
else{
	header('location:brond.php?update_error');

}


 ?>