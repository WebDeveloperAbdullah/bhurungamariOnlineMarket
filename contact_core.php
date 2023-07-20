<?php 
include("include/connect.php");

$con_name=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['con_name']));
$con_email=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['con_email']));
$con_sub=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['con_sub']));
$con_messages=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['con_messages']));


$insertQuery="INSERT INTO contact_table (contact_name,contact_email,contact_sub,contact_sms) VALUES ('$con_name','$con_email','$con_sub','$con_messages') ";

$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery) {
header("location:contact.php?success");

}else{
	header("location:contact.php?error");
}


 ?>
