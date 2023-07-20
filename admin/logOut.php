<?php 
session_start();

setcookie("PHPMASUMRAISHA",$userEncytype,time()-(86400*8));
header("location:login.php");


?>