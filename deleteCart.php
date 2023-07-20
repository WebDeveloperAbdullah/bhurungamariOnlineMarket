<?php 
include("include/connect.php");


$cart_id=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['cart_id']));

$deleteQuery="DELETE FROM `table_cart` WHERE cart_id='$cart_id' ";
$runQuery=mysqli_query($connect,$deleteQuery);
if($runQuery) {
	header("location:product_summary.php?delete_success");
}
else{
	header("location:product_summary.php?delete_error");
}


 ?>