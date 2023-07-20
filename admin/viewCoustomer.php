<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            			<h3>Coustomer Deteils</h3>
            			<a href="orderView.php" class="btn btn-success">Order List</a>

            			<?php 
               if ($_REQUEST['cousId']) {
					$cousId=$_REQUEST['cousId'];
				}else{
					header("location:orderView.php");
				}
				 $showCusData="SELECT * FROM customer_table WHERE customer_id='$cousId' ";
				 $runQuery=mysqli_query($connect,$showCusData);
				 $rowCount=mysqli_num_rows($runQuery);
				 if($rowCount=="1") {
				 	while ($gatData=mysqli_fetch_assoc($runQuery)) {
				 		$gatId=$gatData['customer_id'];
				 		$gatFname=$gatData['cusFastName'];
				 		$gatLname=$gatData['cusLastName'];
				 		$gatUser=$gatData['cusUsername'];
				 		$gatEmail=$gatData['cusEmail'];
				 		$gatAddre=$gatData['cusAddress'];
				 		$gatCity=$gatData['cusCity'];
				 		$gatZip=$gatData['cusZip'];
				 		$gatCoun=$gatData['cusCountry'];
				 		$gatAddi=$gatData['cusAdditional'];
				 		$gatBirth=$gatData['cusDareOfBirth'];
				 		$gatMobile=$gatData['cusMobile'];
				 	}
				 }



				  ?>


						<div class="span9">
						<h6>Welcome <?php echo $gatFname ." ". $gatLname ; ?></h6>	
						<table class="table "  >
							<tr>
								<td> Fast Name</td>
								<td> <?php echo $gatFname; ?></td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td> <?php echo $gatLname; ?></td>
							</tr>
							<tr>
								<td> User Name</td>
								<td> <?php echo $gatUser; ?></td>
							</tr>
							<tr>
								<td> User Email</td>
								<td> <?php echo $gatEmail; ?></td>
							</tr>
							<tr>
								<td> User Adder</td>
								<td> <?php echo $gatAddre; ?></td>
							</tr>
							<tr><td> User City</td>
								<td> <?php echo $gatCity; ?></td>
							</tr>
							<tr>
								<td> User ZIP Code</td>
								<td> <?php echo $gatZip; ?></td>
							</tr>
							<tr>
								<td> User Country</td>
								<td> <?php 
								if($gatCoun=="1"){
									echo "Bangladesh";
								} 
								 ?></td>
							</tr>
							<tr>
								<td> Additional information</td>
								<td> <?php echo $gatAddi; ?></td>
							</tr>
							<tr>
								<td> Date Of Birth</td>
								<td> <?php echo $gatBirth; ?></td>
							</tr>
							<tr>
								<td> Mobile</td>
								<td>0<?php echo $gatMobile; ?></td>
							</tr>
							
							
						</table>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	