<?php 
session_start();
 $host="localhost";
 $dbuser="online_shop";
 $dbpwd="SvswYnVbv60wPQ7e";
 $dbname="online_market";



 $connect=mysqli_connect($host,$dbuser,$dbpwd,$dbname);

 if($connect==false){
 	echo "DataBase Not Connect";
 }


 ?>
