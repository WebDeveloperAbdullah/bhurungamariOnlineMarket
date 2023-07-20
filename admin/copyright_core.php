<?php 
include("inclued/connect.php");

$getID=$_REQUEST['gatid'];
$copyright=$_REQUEST['copyright'];

	
	$updateQuery=" UPDATE copyright SET note='$copyright' WHERE copyright_id='$getID'";


	$runQuery=mysqli_query($connect,$updateQuery);
	if($runQuery) {
		header("Location:copyright.php?update_success");
	}
	else{
		header("Location:copyright.php?update_error");
	}

 ?>