<?php 

include "include/header.php";


 ?>



	<div class="span9">
     <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li><a href="payment.php">Payment</a> <span class="divider">/</span></li>
    <li  href="product_summary.php">product summary</li>
    </ul> 

<?php 
if (!isset($_REQUEST['id'])) {
echo "<meta http-equiv='refresh' content='0;URL=?id=ORDER SUCCESS'/>";
}

  ?>

    <?php 
    if ($_SESSION['customer_id']) {
         $customer_id=$_SESSION['customer_id'];
        }


    if (isset($_REQUEST['orderid']) && $_REQUEST['orderid']=='order') {
     $session_id=session_id();

     $orderQuery="SELECT * FROM `table_cart` WHERE session_id='$session_id'  ";
     $runOrder=mysqli_query($connect,$orderQuery);
     if ($runOrder) {
      while ($getOrder=mysqli_fetch_assoc($runOrder)) {
        $gatprodId=$getOrder['product_id'];
        $product_name=$getOrder['product_name'];
        $quantity=$getOrder['quantity'];
        $product_price=$getOrder['product_price']*$quantity;
        $product_img=$getOrder['product_img'];
      $insertOrder="INSERT INTO table_order(product_id,customer_id,product_name,price,product_img,product_quenty) VALUES ('$gatprodId','$customer_id','$product_name','$product_price','$product_img','$quantity')";
      $runInsertQuery=mysqli_query($connect,$insertOrder);
      }
      
     }
      $deletQuery="DELETE FROM `table_cart` WHERE session_id='$session_id'";
       $runDelQuery=mysqli_query($connect,$deletQuery);

       echo "ORDER SUCCESS";

    }


     ?>
	


	<i style="color: green">
		<?php 
		if(isset($_REQUEST['update_quantity_success'])) {
			echo "update_quantity_success";
		}

		 ?>
	</i>
	<i style="color: green">
		<?php 
		if(isset($_REQUEST['delete_success'])) {
			echo "delete_success";
		}

		 ?>
	</i>
	<hr class="soft"/>
			
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Product Name</th>
                  <th>product Image</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
				  <th>Discount</th>
				  <th>Vat</th>
                
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                   <?php 
   $said=$_SESSION['session_id'];
   if(!isset($_COOKIE["PHPMASUMRAISHA"]))  {
    $deletQuery="DELETE FROM table_cart WHERE session_id='$said'";
    $runDEQuery=mysqli_query($connect,$deletQuery);
   }

    ?>

                	<?php 

                	if($_SESSION['session_id']) {
                	$session_id=$_SESSION['session_id'];
                }
                

                	$cartQuery="SELECT * FROM table_cart  WHERE session_id = '$session_id'";
                	$runQuery=mysqli_query($connect,$cartQuery);
                	if($runQuery) {
                		$b=1;
                		$sum=0;
                    $qunt=0;
                		
                		while ($gatData=mysqli_fetch_assoc($runQuery)) {
                			$cart_id=$gatData['cart_id'];
                			$proName=$gatData['product_name'];
                			$proImg=$gatData['product_img'];
                			$proQuan=$gatData['quantity'];
                			$proPrice=$gatData['product_price'];
                	 ?>
                  <td><?php echo $b++; ?></td>
                  <td><?php echo $proName; ?></td>
                  <td> <img width="60" src="admin/uploads/<?php echo $proImg; ?>" alt=""/></td>
                  
				  <td>
					<div class="input-append">
						<form action="updateQun.php" method="POST">
							<input class="span1" type="number" name="quantity" style="max-width:34px" value="<?php echo $proQuan; ?>" >


							<input type="hidden" name="cart_id" value="<?php echo$cart_id;  ?>">
						<input type="submit"  class="btn btn-info" value="Update"> 
						<a href="deleteCart.php?cart_id=<?php echo $cart_id; ?>" onclick="return confirm('ARE YOU SURE?')" class="btn btn-danger">Delete</a>
						</form>
					</div>
				  </td>
                  <td>TK<?php echo $proPrice; ?></td>
                  <td> 15%
                  	<?php 

                      $fullpri=($proPrice/100)*15;
                      $priceall=$proPrice-$fullpri;
                    ?>
                  </td>
                  <td>10%
                  	<?php  
                    $vatal=($proPrice*0.1); 

                  ?>
                  </td>
                  
                  <td>TK
                  	<?php
                    $qunt=$qunt+$proQuan;

                    

                  	$pricetoal=($priceall+$vatal)*$proQuan;
                  	 echo $pricetoal;

                    ?>
                  </td>
                 
                </tr>
				<?php $sum=$sum+$pricetoal ?>
				 
				
				<?php }}?>
                <tr>
                  <td colspan="7" style="text-align:right">Total Price:	</td>
                  <td>TK <?php echo $sum; ?></td>
                </tr>
				
				 <tr>
                  <td colspan="7" style="text-align:right"><strong>
                  
                 	GRAND TOTAL = 
                  </strong></td>
                  <td class="label label-important" style="display:block"> 
                  	<strong> 	
                  <?php 

                   
                  $_SESSION['qunt']=$qunt;
                  $_SESSION['sum']=$sum;
                  echo $sum ;


                 
                  
                   ?>
                  
                   </strong></td>
                </tr>
				</tbody>
            </table>
		
		
  
     <input type="textbox">
     <input type="submit" value="Apply Copuon " class="btn btn-info">   
   
				
	<a href="?orderid=order" class="btn btn-info pull-right" >Order</a>
  <a href="order_detiels.php" class="btn btn-info pull-right" >Order Details</a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<?php 

include "include/footer.php";

 ?>