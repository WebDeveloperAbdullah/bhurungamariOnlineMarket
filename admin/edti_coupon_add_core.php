<?php 


include("inclued/connect.php");

if ($_REQUEST['update_id']) {
	$update_id=$_REQUEST['update_id'];
}else{
	header("location:coupon.php");
}

$coupon_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_code']));
$coupon_value=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_value']));
$coupon_type=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_type']));
$cart_min_value=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['cart_min_value']));
$coupon_status=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_status']));

$updateQuery="UPDATE coupon_code_table SET coupon_code='$coupon_code',coupon_value='$coupon_value',coupon_type='$coupon_type',cart_min_value='$cart_min_value',coupon_status='$coupon_status' WHERE coupon_id='$update_id'";
$runQuery=mysqli_query($connect,$updateQuery);
if ($runQuery) {
	header("location:coupon.php?Edit_success");
}else{
	header("location:coupon.php?Edit_error");
}


 ?>