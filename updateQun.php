<?php 
include("include/connect.php");


$quantity=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['quantity']));
$cart_id=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['cart_id']));

$queUpdateQuery="UPDATE table_cart SET quantity='$quantity' WHERE cart_id='$cart_id'";
$runQuery=mysqli_query($connect,$queUpdateQuery);


if($runQuery) {

	$udateQuery="SELECT * FROM table_cart";
	$runQt=mysqli_query($connect,$udateQuery);
	while ($gatData=mysqli_fetch_assoc($runQt)) {
		$session=$gatData['quantity'];
	}
	if($session <=0) {
		$delete="DELETE FROM `table_cart` WHERE quantity='$session'";
		$runD=mysqli_query($connect,$delete);
	}
 

	header("location:product_summary.php?update_quantity_success");
}
else{
	header("location:product_summary.php?update_quantity_error");
}


 ?>