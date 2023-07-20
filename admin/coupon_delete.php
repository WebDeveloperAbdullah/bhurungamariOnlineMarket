<?php 

include("inclued/connect.php");

if ($_REQUEST['delete_id']) {
	$delete_id=$_REQUEST['delete_id'];
}else{
	header("location:coupon.php");
}

$deleteQuery="DELETE FROM `coupon_code_table` WHERE coupon_id='$delete_id'";
$runQuery=mysqli_query($connect,$deleteQuery);
if ($runQuery) {
	header("location:coupon.php?delete_success");
}else{
	header("location:coupon.php?delete_error");
}





 ?>