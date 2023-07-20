<?php 
include("inclued/header.php");


$all_keys=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','!','@','#','$','%','^','*','(',')','_','-','=','+',':',';','?','<','>','.',',',);


$lenght = array(10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25 );
shuffle($lenght);
$final_length=$lenght[0];


$str="";

for ($i=0; $i <$final_length ; $i++) { 
	shuffle($all_keys);

	$str .=$all_keys[0];
}

 ?>



            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Add New User</h3>
            		
            		<div class="from_lable">
            		<form action="singUp_core.php" method="POST">
			<div class="from_lable"> 
				<label>Admin Name</label>
				
			</div>
			<div class="from_input">
				<input type="text" placeholder="Admin Name" name="admin_name" required>
				
			</div>
			
			<div class="from_lable"> 
				<label>Admin User </label>
				
			</div>
			<div class="from_input">
				<input type="text" placeholder="Admin Name " name="admin_user" required>
				
			</div>
			<div class="from_lable"> 
				<label>Admin Email</label>
				
			</div>
			<div class="from_input">
				<input type="email" placeholder="Admin Email" name="admin_email" required>
				
			</div>
			<div class="from_lable">
            				<label>Admin Author</label>
            			</div>
            			<div class="from_input">
            				
            				<select name="admin_author" >
            					<option disabled selected>Select Author</option>
            					
            					 <option value="1">Admin</option>
            					 <option value="2">Modarator</option>
            					 
									
            				</select>
            			</div>
			

			
			

			<div class="from_lable"> 
				<label>Admin Password</label>
				
			</div>
			<div class="from_input">
				<input type="password" placeholder="Password" name="admin_pass" required>
				
				
			</div>
			<div class="from_input">
				<h5> You Use This Password</h5>
				<b><?php echo $str; ?></b>
			</div>
			
			<div class="from_send">
				<input type="submit" value="Add Admin" class="btn btn-success">
				
			</div>

			
		</form>
	</div>

            		
            	</div>
            	
            </div>

        </div>
    </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	
 	