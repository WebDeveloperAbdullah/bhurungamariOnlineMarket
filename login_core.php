<?php 
include("include/connect.php");

$email=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['email']));
$password=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['password']));

$authorPass=sha1(md5($email.$password));

if (empty($email) && empty($password)) {
	header("location:index.php?filed_empty");
}

$loginQuery="SELECT * FROM customer_table WHERE cusEmail='$email' && cusAuthoPass='$authorPass'";

$runQuery=mysqli_query($connect,$loginQuery);
$rowCount=mysqli_num_rows($runQuery);
if($rowCount =="1") {
	while($row=mysqli_fetch_assoc($runQuery)) {
 		$_SESSION['customer_id'] =$row['customer_id'];
 		$_SESSION['session_id'] =$row['session_id'];
 		$_SESSION['roll'] =$row['roll'];
 		
 		
 	}


 	setcookie("PHPMASUMRAISHA",$authorPass,time()+(86400*7));
 	header("location:profile.php?welcome_to_mysite");
	
}
else{
		header("location:login.php?login_error");

}


?>