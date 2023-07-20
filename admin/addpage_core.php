<?php 
include("inclued/connect.php");


$page_name=$_REQUEST['page_name'];
$page_body=$_REQUEST['page_body'];

if($page_name==" " || $page_body==" " ) {
	echo "File empty";
} else{





	
	$insertQuery="INSERT INTO add_page ( page_name,page_body) VALUES ('$page_name','$page_body')";


	$runQuery=mysqli_query($connect,$insertQuery);
	if($runQuery) {
		header("Location:updatePage.php?insert_page_success");
	}
	else{
		header("Location:updatePage.php?insert_page_error");
	}
}
 ?>