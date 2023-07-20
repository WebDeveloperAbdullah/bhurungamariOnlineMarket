<?php 
include("inclued/connect.php");

	if(isset($_FILES['product_img'])) {

	$errors=array();

	$file_name=$_FILES['product_img']['name'];
	$file_size=$_FILES['product_img']['size'];
	$file_tmp=$_FILES['product_img']['tmp_name'];
	$file_type=$_FILES['product_img']['type'];
	$file_ext=end(explode('.',$file_name));

	$extenstion=array("jpeg","jpg","png",);
	if(in_array($file_ext, $extenstion)===false) 
	{
		$errors[]="This extenstion File Not Allowed,Please Choose a JPG OR PNG File ";
	}

	if($file_size > 2097152) {
		$errors[]="File Size Must Be 2MB OR Lower";
	}
	$new_name=time()."-".basename($file_name);
	$target="uploads/".$new_name;
	if(empty($errors)) {
		move_uploaded_file($file_tmp,$target);
	}
	else{
		print_r($errors);
		
	}
}

	$product_name=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_name']));
	$product_body=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_body']));
	$product_category=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_category']));
	$pro_brand=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['pro_brand']));
	$product_chest=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_chest']));
	$product_type=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_type']));
	$product_color=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_color']));
	$product_price=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_price']));
	$product_tage=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_tage']));
	$product_code=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['product_code']));
	
	$author=$_SESSION['admin_id'];

	$query="INSERT INTO `product_table` ( `product_name`, `product_image`, `product_body`, `product_category`, `product_brond`, `product_chest`, `product_type`, `product_color`, `product_price`, `product_tag`, `product_code`, `author`) VALUES ( '$product_name', '$new_name', '$product_body', '$product_category', '$pro_brand', '$product_chest', '$product_type', '$product_color', '$product_price', '$product_tage', '$product_code', '$author');";
	$query.="UPDATE category_table SET post_number= post_number + 1 WHERE category_id='$product_category';";
	$query.="UPDATE table_brand SET bPost_number= bPost_number + 1 WHERE brand_id='$pro_brand';";

	if(mysqli_multi_query($connect,$query)) {
		header("location:product.php?post_success");
	}
	else{
	header("location:product.php?post_error");
	
	}





