<?php 

include "include/header.php";

 ?>
 <?php 
 if ($_REQUEST['customer_id']) {

 	$customer_id=$_REQUEST['customer_id'];
 }
 else{
 	header("location:profile.php");
 }
 
 $showCusData="SELECT * FROM customer_table WHERE customer_id='$customer_id' ";
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
		<h2>Welcome <?php echo $gatFname ." ". $gatLname ; ?></h2>	
		<form action="updateuser_core.php" method="POST">
		<table class="table "  >
			<tr>
				<td> Fast Name</td>
				<td> <input type="text" value="<?php echo$gatFname; ?>" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td> <input type="text" value="<?php echo$gatLname; ?>" name="lname"></td>
			</tr>
			<tr>
				<td> User Name</td>
				<td> <input type="text" value="<?php echo$gatUser; ?>" name="user"></td>
			</tr>
			
			<tr>
				<td> User Adder</td>
				<td> <input type="text" value="<?php echo$gatAddre; ?>" name="adder"></td>
			</tr>
			<tr><td> User City</td>
				<td> <input type="text" value="<?php echo$gatCity; ?>" name="city"></td>
			</tr>
			<tr>
				<td> User ZIP Code</td>
				<td> <input type="text" value="<?php echo$gatZip; ?>" name="zipCode"></td>
			</tr>
			
			<tr>
				<td> Additional information</td>
				<td>
					<textarea name="information"><?php echo$gatAddi; ?></textarea>
				</td>
			</tr>
			<tr>
				<td> Date Of Birth</td>
				<td> <input type="text" value="<?php echo$gatBirth; ?>" name="birth"></td>
			</tr>
			<tr>
				<td> Mobile</td>
				<td><input type="text" value="<?php echo$gatMobile; ?>" name="mobile"></td>
			</tr>
			
			
		</table>
		<input type="hidden" name="customer_id" value="<?php echo $gatId; ?>">
		<input type="submit"  value="Update" class="btn btn-success">
	</form>




			

		</div>
		</div>
	</div>
</div>
<?php 

include "include/footer.php";

 ?>