
<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Order List</h3>

                <a href="confirmPage.php" class="btn btn-success">Confirm</a>
                 <a href="customerAccept.php" class="btn btn-success">Order Accept</a>


            		  <form action="brond_all_delete.php" method="POST">
                  <table class="table" border="2px">
                  <thead>
                    <th style="background-color: #000;color: #fff">S/N</th>
                    <th style="background-color: #000;color: #fff">Product Name</th>
                    
                    <th style="background-color: #000;color: #fff">Price </th>
                    <th style="background-color: #000;color: #fff">Quenty </th>
                    <th style="background-color: #000;color: #fff">Date & Time  </th>
                    <th style="background-color: #000;color: #fff">Order</th>
                    <th style="background-color: #000;color: #fff">View</th>
                    <th style="background-color: #000;color: #fff">Confirm</th>
                    <th style="background-color: #000;color: #fff">Customer  </th>
                    <th style="background-color: #000;color: #fff">Delete  </th>
                    
                    <th style="background-color: #000;color: #fff">
                      <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                    </th>
                  </thead>
                  <?php 

                  $serile=1;
                  $limet=3;
 			  if(isset($_REQUEST['page'])){
 		     	$page=$_REQUEST['page'];
 		       }else{
 		     	$page=1;
 		     }

 			$offset=($page-1) *$limet;

                  $showCatQuery="SELECT * FROM table_order WHERE status='0' ORDER BY  date  LIMIT {$offset},{$limet}";
                  $runCatQuery=mysqli_query($connect,$showCatQuery);

                  if($runCatQuery) {
                    while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
                      
                       $gatId=$gatData['order_id'];
                       $product_id=$gatData['product_id'];
                       $customer_id=$gatData['customer_id'];
                       $gatName=$gatData['product_name'];
                       $price=$gatData['price'];
                       $product_img=$gatData['product_img'];
                       $product_quenty=$gatData['product_quenty'];
                       $status=$gatData['status'];
                       $date=$gatData['date'];

                   ?>

                  <thead>
                    <th><?php echo $serile++; ?></th>
                    <th><?php echo $gatName; ?></th>
                  
                    <th><?php echo $price; ?></th>
                    <th><?php echo $product_quenty; ?></th>
                    <th><?php echo date('F j,Y g:ia',strtotime($date)); ?></th>
                    <th><?php 
                          if ($status=='0') {
                            echo "Order Pending";
                          }

                     ?></th>
                     <th><a href="viewOrder.php?viewID=<?php echo $product_id ?>" ><i class="fas fa-eye"></i></a></th>
                     <th><a href="activeOrder.php?activeId=<?php echo $gatId ?>" >Confirm</a></th>
                    <th><a href="viewCoustomer.php?cousId=<?php echo $customer_id ?>" > <i class="fas fa-eye"></i></a></th>
                    
                                   
                                     <td>
                                          <a href="brond_delete.php?delete_id=<?php echo $gatId ?>" onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                     </td>
                                     <td>
                                      <input type="checkbox" name="checkbox_al[]" value="<?php echo$gatId;?>">
                                    </td>
                  </thead>
                <?php }  } ?>
                </table>
              </form>
                    <div class="pajination">
 			<?php 
 			
 			
 			$paginationQuery="SELECT * FROM table_order";
 			$runPagQuery=mysqli_query($connect,$paginationQuery);
 			if(mysqli_num_rows($runPagQuery)) {
 				$total_data=mysqli_num_rows($runPagQuery);
 				$total_page=ceil($total_data/$limet);
               echo '<ul>';
 				for($i=1;$i<= $total_page;$i++) {

 					if($i==$page) {
 						$active="active";
 					}
 					else{
 						$active=" ";
 					}
 					echo 	" <li><a class='$active' href='orderView.php?page=$i'>".$i."</a></li> ";
 				}
 				echo '</ul>';
 			}


 			 ?>

 	
 		



 	</div>


            		
            	</div>
      
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	