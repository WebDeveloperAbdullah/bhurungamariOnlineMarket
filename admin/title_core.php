
<?php 
include("inclued/connect.php");



	if(isset($_FILES['logo_img'])) {

	$errors=array();

	$file_name=$_FILES['logo_img']['name'];
	$file_size=$_FILES['logo_img']['size'];
	$file_tmp=$_FILES['logo_img']['tmp_name'];
	$file_type=$_FILES['logo_img']['type'];
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
	if(empty($errors)==ture) {
		move_uploaded_file($file_tmp,$target);
	}
	else{
		print_r($errors);
		
	}
}

$postTitle=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['website_title']));
$postslogan=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['website_slogab']));
$idpost=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['update_id']));

$updateQuery="UPDATE update_website  SET u_w_title='$postTitle',web_sologan='$postslogan',logo_update='$target' WHERE update_id='$idpost'";
$runQuery=mysqli_query($connect,$updateQuery);
if($runQuery){
	header("location:titleSlogan.php?update_success");
}
else{
	header("location:titleSlogan.php?update_error");

}

?>