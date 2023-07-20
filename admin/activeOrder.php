<?php 

include("inclued/connect.php");


if ($_REQUEST['activeId']) {
	$active=$_REQUEST['activeId'];
}else{
	header("location:orderView.php");
}

	$activeQuery="UPDATE  table_order SET  status = '1' WHERE order_id='$active' ";

	$runQuery=mysqli_query($connect,$activeQuery);
	if($runQuery) {

		header("location:orderView.php?success");
	}else{
		header("location:orderView.php?error");
	}


 ?>