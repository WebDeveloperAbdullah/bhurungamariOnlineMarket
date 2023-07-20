<?php 
include("inclued/connect.php");
if(isset($_REQUEST['productID'])){

$edit_id=$_REQUEST['productID'];
}

if(empty($_FILES['image_file']['name'])) {
	$new_name=$_REQUEST['oldimage'];
}
else{
	$errors=array();
	$file_name=$_FILES['image_file']['name'];
	$file_size=$_FILES['image_file']['size'];
	$file_tmp=$_FILES['image_file']['tmp_name'];
	$file_type=$_FILES['image_file']['type'];

	$file_ext=end(explode('.',$file_name));

	$extanstion=array("jpeg","jpg","png");

	if(in_array($file_ext,$extanstion)===false)
	{
		$errors[]="This extenstion file not allowed, Please choose a jpg or png file";
	}
	if($file_size > 2097152){
		$errors[]="File size must be 2mb or lower";
	}
	if($file_size > 2097125) {
		$errors[]="File size must be 2mb or lower";
	}
	$new_name=time()."-".basename($file_name);
	$target="uploads/".$new_name;
	$image_name=$new_name;
	if(empty($errors)==true) {
		move_uploaded_file($file_tmp, $target);
	}else{
		print_r($errors);die();
	}

}

	$product_name=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_name']));
	$product_body=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_body']));
	$product_category=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['category_name']));
	$pro_brand=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['pro_brand']));
	$product_chest=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_chest']));
	$product_type=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_type']));
	$product_color=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_color']));
	$product_price=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_price']));
	$product_tage=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_tage']));
	$product_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_code']));
	$oldcat_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['old_category']));
	$oldbro_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['old_brond']));

$updateQuery="UPDATE product_table SET product_name='$product_name',product_image='$new_name',product_body='$product_body',product_category='$product_category',product_brond='$pro_brand',product_chest='$product_chest',product_type='$product_type',product_color='$product_color',product_price='$product_price',product_tag='$product_tage',product_code='$product_code' WHERE product_id ='$edit_id';";

		if($oldcat_code != $product_category) {
			$updateQuery .="UPDATE category_table SET post_number=post_number - 1 WHERE category_id='$oldcat_code';";
			$updateQuery .="UPDATE category_table SET post_number=post_number + 1 WHERE category_id='$product_category';";
		}
		if($oldbro_code != $pro_brand) {
			$updateQuery .="UPDATE table_brand SET bPost_number=bPost_number - 1 WHERE brand_id='$oldbro_code';";
			$updateQuery .="UPDATE table_brand SET bPost_number=bPost_number + 1 WHERE brand_id='$pro_brand';";
		}


		$runQuery=mysqli_multi_query($connect,$updateQuery);
		if($runQuery){
			header("location:product.php?update_success");
		}
		else{
			header("location:product.php?update_error");
		}






 ?>