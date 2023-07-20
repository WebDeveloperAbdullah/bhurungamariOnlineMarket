<?php 
         
 include("inclued/connect.php"); 
 if(isset($_REQUEST['seen_id'])) {
  $seen_id=$_REQUEST['seen_id'];
 }
  else{
   header("location:inbox.php");
  }

  $updateQuery="UPDATE contact_table SET contact_roll = '1' WHERE contact_id ='$seen_id'";
$runQuery=mysqli_query($connect,$updateQuery);
if($runQuery) {
      header("location:inbox.php?seen_success");
}
else{
  header("location:inbox.php?seen_error");
}

  ?>