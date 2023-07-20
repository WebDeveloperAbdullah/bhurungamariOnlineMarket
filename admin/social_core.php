<?php 
include("inclued/connect.php");

$getID=$_REQUEST['gatid'];
$facebook_link=$_REQUEST['facebook_link'];
$twitter_link=$_REQUEST['twitter_link'];
$linkdin_link=$_REQUEST['linkdin_link'];
$google_link=$_REQUEST['google_link'];
$email_link=$_REQUEST['email_link'];
	
	$updateQuery="UPDATE social_media SET fb_link='$facebook_link',tw_link='$twitter_link',in_link='$linkdin_link',gp_link='$google_link',em_link='$email_link' WHERE social_id='$getID'";


	$runQuery=mysqli_query($connect,$updateQuery);
	if($runQuery) {
		header("Location:socialMedia.php?update_success");
	}
	else{
		header("Location:socialMedia.php?update_error");
	}

 ?>