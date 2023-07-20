<?php 
include("inclued/connect.php");

$post_id=$_REQUEST['delete_post_id'];
$category_id=$_REQUEST['catit'];


$queryImag="SELECT * FROM post WHERE post_id='$post_id'";
$runImgQuery=mysqli_query($connect,$queryImag);
$gatData=mysqli_fetch_assoc($runImgQuery);

unlink("uploads/".$gatData['post_img']);




$deleteQuery="DELETE FROM post WHERE post_id ='$post_id';";

$deleteQuery.="UPDATE category SET post=post-1  WHERE category_id='$category_id'; ";
$runQuery=mysqli_multi_query($connect,$deleteQuery);
if($runQuery){
	header("location:post.php?delete_success");
}
else{
	header("location:post.php?delete_error");
}

 ?>