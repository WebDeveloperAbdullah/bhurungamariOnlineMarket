<?php 

include("include/connect.php");

 if (isset($_REQUEST['customer_id'])) {

 	$customer_id=$_REQUEST['customer_id'];
 }
 else{
 	header("location:profile.php");
 }

$fname=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['fname']));
$lname=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['lname']));
$user=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['user']));
$adder=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['adder']));
$city=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['city']));
$zipCode=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['zipCode']));
$information=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['information']));
$birth=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['birth']));
$mobile=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['mobile']));

$updateQuery="UPDATE customer_table SET cusFastName='$fname',cusLastName='$lname',cusUsername='$user',cusAddress='$adder',cusCity='$city',cusZip='$zipCode',cusAdditional='$information',cusDareOfBirth='$birth',cusMobile='$mobile' WHERE  customer_id ='$customer_id'";
$runQuery=mysqli_query($connect,$updateQuery);
if($runQuery) {
	header("location:profile.php?update_success");
}
else{
	header("location:profile.php?update_error");

}


 ?>