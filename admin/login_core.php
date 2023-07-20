<?php 

include("inclued/connect.php");

$user_email=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['user_email']));
$user_pass=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['user_pass']));


$userEncytype=md5(sha1($user_pass.$user_email));


$loginQuery="SELECT * FROM login_table WHERE adminEmail ='$user_email' && authorPass='$userEncytype'";

$runQuery=mysqli_query($connect,$loginQuery);

$rowCount=mysqli_num_rows($runQuery);

if($rowCount==1) {
	while($row=mysqli_fetch_assoc($runQuery)) {
 		$_SESSION['admin_id']       = $row['admin_id'];
 		$_SESSION['adminName']     = $row['adminName'];
 		$_SESSION['adminUser']     = $row['adminUser'];
 		$_SESSION['label']     = $row['label'];
 		
 	}


 	setcookie("PHPMASUMRAISHA",$userEncytype,time()+(86400*7));
 	header("location:index.php?welcome_to_mysite");


 }
 else{
 	header("location:login.php?login_error");
 }

 ?>