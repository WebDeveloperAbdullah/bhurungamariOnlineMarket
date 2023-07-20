<?php 
include("inclued/connect.php");

$toEmail=$_REQUEST['toEmail'];
$from_email=$_REQUEST['from_email'];
$from_sub=$_REQUEST['from_sub'];
$re_massage=$_REQUEST['re_massage'];

 $sendMail=mail($toEmail, $from_sub, $re_massage,$from_email);

if($sendMail) {
	header('location:inbox.php?send_massage_success');
}
else{
	header('location:inbox.php?send_massage_error');
}

 ?>