<?php 
include("include/connect.php");

$coupon_str=get_safe_value($connect,$_POST['coupon_str']);
$res=mysqli_query($connect,"SELECT * FROM `coupon_code_table` WHERE coupon_code ='$coupon_str' AND coupon_status ='1 ' ");
$count=mysqli_num_rows($res);
if($count>0) {
	$coupon_details=mysqli_fetch_assoc($res);
	$coupon_value=$coupon_details['coupon_value'];
	$coupon_type=$coupon_details['coupon_type'];
	$cart_min_value=$coupon_details['cart_min_value'];
	$cart_total=0;
	foreach ($_SESSION['qunt'] as $key => $_SESSION['sum']) {
		
	}
	echo $cart_total;
}


 ?>