<?php 
include("include/connect.php");

$fastName=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['fastName']));
$lastName=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['lastName']));
$userName=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['userName']));
$email=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['email']));
$password=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['password']));
$authorPass=sha1(md5($email.$password));
$address=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['address']));
$city=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['city']));
$postcode=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['postcode']));
$country=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['country']));
$aditionalInfo=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['aditionalInfo']));
$dateOfBirth=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['dateOfBirth']));
$mobile=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['mobile']));

if( $fastName ==" " || $lastName ==" " || $userName ==" " || $email ==" " || $password ==" " || $address ==" " || $city ==" " || $postcode ==" " || $country ==" " || $aditionalInfo ==" " || $dateOfBirth ==" " || $mobile ==" " ) {
	header("location:register.php?filed_empty");
}

$chakEmailQuery="SELECT * FROM customer_table WHERE cusEmail='$email' LIMIT 1";
$runChakeEmail=mysqli_query($connect,$chakEmailQuery);
$rowCount=mysqli_num_rows($runChakeEmail);

if($rowCount==" ") {
	$insertCusQuery="INSERT INTO customer_table(cusFastName,cusLastName,cusUsername,cusEmail,cusPassword,cusAuthoPass,cusAddress,cusCity,cusZip,cusCountry,cusAdditional,cusDareOfBirth,cusMobile) VALUES ('$fastName','$lastName','$userName','$email','$password','$authorPass','$address','$city','$postcode','$country','$aditionalInfo','$dateOfBirth','$mobile')";
	$runInsertQuery=mysqli_query($connect,$insertCusQuery);
	if($runInsertQuery) {
		header("location:register.php?register_success");
	}
	else{
		header("location:register.php?register_error");
	}

} 
else{
	header("location:register.php?email_ex");
}

?>