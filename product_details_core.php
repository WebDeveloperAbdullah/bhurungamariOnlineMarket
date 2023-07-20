<?php 
include("include/connect.php");





$quantity=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['quantity']));
$product_id=htmlspecialchars(mysqli_real_escape_string($connect,$_REQUEST['cart_id']));
// $cart_id=preg_replace('/[^-zA-Z0-9_]/','',$_REQUEST['cart_id']);
$sessino_id=session_id();

$selectQuery="SELECT product_table.*,table_brand.brand_id,table_brand.brand_name,category_table.category_id,category_table.category_name
                  FROM product_table
                  INNER JOIN table_brand
                  ON  product_table.product_brond=table_brand.brand_id
                  INNER JOIN category_table
                  ON product_table.product_category=category_table.category_id
                   WHERE product_id='$product_id'";
$runQuery=mysqli_query($connect,$selectQuery);
$rowCount=mysqli_num_rows($runQuery);
if($rowCount>0) {
  while ($gatData=mysqli_fetch_assoc($runQuery)) {
  		$product_name=$gatData['product_name'];
  		$product_price=$gatData['product_price'];
  		$product_category=$gatData['category_name'];
  		$product_brond=$gatData['brand_name'];
  		$product_image=$gatData['product_image'];
  }

}

$chakQuery="SELECT * FROM table_cart WHERE product_id ='$product_id' AND session_id='$sessino_id' ";
$runChakQuery=mysqli_query($connect,$chakQuery);
$rowChakId=mysqli_num_rows($runChakQuery);
if($rowChakId>0) {
  header("location:products.php?product_added");
}
else{

$insertQuery="INSERT INTO table_cart (`session_id`, `product_id`, `product_name`, `bround_name`, `category_name`, `product_price`, `quantity`, `product_img`) VALUES ('$sessino_id','$product_id','$product_name','$product_brond','$product_category','$product_price','$quantity','$product_image')";
$runInsertQuery=mysqli_query($connect,$insertQuery);
if($runInsertQuery) {
$cartQuery="SELECT * FROM table_cart";
$runCartQuery=mysqli_query($connect,$cartQuery);

if($runCartQuery) {
  while ($row=mysqli_fetch_assoc($runCartQuery)) {
    $_SESSION['session_id']       = $row['session_id'];
  }
}

	header("location:product_summary.php?cart_success");
}
else{
	header("location:404.php?cart_error");
}
}
 ?>
