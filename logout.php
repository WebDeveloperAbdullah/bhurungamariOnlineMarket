<?php 
include("include/connect.php");




$session_id=session_id();


setcookie("PHPMASUMRAISHA",$authorPass,time()-(86400*8));

$deletQuery="DELETE FROM `table_cart` WHERE session_id='$session_id'";
$runQuery=mysqli_query($connect,$deletQuery);

header("location:login.php");


?>