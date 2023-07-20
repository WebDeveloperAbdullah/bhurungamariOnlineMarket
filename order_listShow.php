<?php 

include "include/header.php";

 ?>

 <?php 
 if(!isset($_COOKIE["PHPMASUMRAISHA"])) {
    header("location:login.php");
}


  ?>


		<div class="span9">	
	 <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li><a href="payment.php">Payment</a> <span class="divider">/</span></li>
    <li  href="product_summary.php">product summary</li>
    </ul> 


			<table class="table table-bordered">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Product Name</th>
                  <th>product Image</th>
                  <th>Quantity</th>
				          <th>Price</th>
				          <th>Status</th>
                  <th>Action</th>
				  
				</tr>
              </thead>
              <tbody>
                <tr>
   

                	<?php 
                	if (isset($_SESSION['customer_id'])) {
                		$customer_id=$_SESSION['customer_id'];
                	}

                

                	$cartQuery="SELECT * FROM table_order  WHERE customer_id = '$customer_id' AND order_com='0' ";
                	$runQuery=mysqli_query($connect,$cartQuery);
                	if($runQuery) {
                	$b=1;
                		while ($gatData=mysqli_fetch_assoc($runQuery)) {
                			$order_id=$gatData['order_id'];
                			$proName=$gatData['product_name'];
                			$proImg=$gatData['product_img'];
                			$proQuan=$gatData['product_quenty'];
                			$proPrice=$gatData['price'];
                      $status=$gatData['status'];
                	 ?>
                  <td><?php echo $b++; ?></td>
                  <td><?php echo $proName; ?></td>
                  <td> <img width="60" src="admin/uploads/<?php echo $proImg; ?>" alt=""/></td>
                  <td><?php echo $proQuan; ?></td>
                  <td><?php echo $proPrice; ?>TK</td>
                  <td> <?php 

                    if ($status=='0') {
                      echo " Pending......";
                    }
                    else{
                      echo "Success";
                    }

                   ?> </td>
                  <td><?php 
                  if($status=='0') {
                    echo "N/A";
                  }
                  else{?>
                  <a href='confrim_order.php?confrim_id=<?php echo $order_id ?>'>Order Accept</a>

                  <?php } ?>

                  </td>
                  
                 
                 
                </tr>
			
				 
				
				<?php }}?>
               
				
				
				</tbody>
            </table>


			

		</div>
		</div>
	</div>
</div>
<?php 

include "include/footer.php";

 ?>