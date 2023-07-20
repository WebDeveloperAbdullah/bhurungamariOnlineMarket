<?php 
include("inclued/connect.php");


$coupon_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_code']));
$coupon_value=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_value']));
$coupon_type=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_type']));
$cart_min_value=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['cart_min_value'])); 
$coupon_status=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['coupon_status'])); 

$chakeQuery="SELECT * FROM coupon_code_table WHERE coupon_code='$coupon_code' ";
$runChakeQuery=mysqli_query($connect,$chakeQuery);
$rowCount=mysqli_num_rows($runChakeQuery);

if ($rowCount==" ") {
	


$insertQuery="INSERT INTO coupon_code_table (coupon_code,coupon_value,coupon_type,cart_min_value,coupon_status) VALUES ('$coupon_code','$coupon_value','$coupon_type','$cart_min_value','$coupon_status')";
$runQuery=mysqli_query($connect,$insertQuery);
if ($runQuery) {
	header("location:couponAdd.php?Add_success");
}
else{
header("location:couponAdd.php?Add_error");
}

}
else{
	header("location:couponAdd.php?All_Ready_Taken");
}


 ?>