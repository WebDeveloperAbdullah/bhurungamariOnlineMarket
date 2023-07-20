<?php 
include("inclued/connect.php");

$checkboxData=$_REQUEST['checkbox_al'];

$deleteAlData=$_REQUEST['delete_m_data'];

$all_mark=implode(",",$checkboxData);
$deleteQuery="DELETE FROM category_table WHERE category_id IN ($all_mark)";
$runQuery=mysqli_query($connect,$deleteQuery);
if($runQuery) {
	header("location:category.php?delete_success");
}else{
	header("location:category.php?delete_error");
}



 ?>