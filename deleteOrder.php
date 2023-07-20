<?php 
include("include/connect.php");


if (isset($_REQUEST['delete_id'])) {
	$delete_id=$_REQUEST['delete_id'];
}else{
	header("location:index.php");
}
if ($_SESSION['customer_id'] ) {
	$customer_id=$_SESSION['customer_id'] ;
}




$deleteQuery="DELETE FROM `table_order` WHERE order_id='$delete_id'";
$runQuery=mysqli_query($connect,$deleteQuery);
if ($runQuery) {
	echo "Delete Success";
}
else{
	echo"Delete Error";
}





 ?>