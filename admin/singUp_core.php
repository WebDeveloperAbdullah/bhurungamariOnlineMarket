<?php 
include("inclued/connect.php");


$admin_name=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['admin_name']));
$admin_user=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['admin_user']));
$admin_email=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['admin_email']));
$admin_pass=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['admin_pass']));
$admin_author=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['admin_author']));

$authorpass=md5(sha1($admin_pass));
$userEncytype=md5(sha1($admin_pass.$admin_email));



$adUserQuery="INSERT INTO `login_table` (`admin_id`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `label`, `enkypPoass`, `authorPass`) VALUES (NULL, '$admin_name', '$admin_user', '$admin_email', '$admin_pass', '$admin_author', '$authorpass', '$userEncytype')";
$runQuery=mysqli_query($connect,$adUserQuery);

if($runQuery) {
	header("location:singUp.php?sinup_success");
}
else{
	header("location:singUp.php?sinup_error");
}
 


 ?>