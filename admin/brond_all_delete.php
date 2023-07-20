<?php 
include("inclued/connect.php");

$checkboxData=$_REQUEST['checkbox_al'];

$deleteAlData=$_REQUEST['delete_m_data'];

$all_mark=implode(",",$checkboxData);
$deleteQuery="DELETE FROM table_brand WHERE brand_id IN ($all_mark)";
$runQuery=mysqli_query($connect,$deleteQuery);
if($runQuery) {
	header("location:brond.php?delete_success");
}else{
	header("location:brond.php?delete_error");
}



 ?>