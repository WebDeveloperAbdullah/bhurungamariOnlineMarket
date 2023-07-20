<?php 

include "include/header.php";

 ?>
	
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	
	<form class="form-horizontal" action="register_core.php" method="POST" >
		<h4>Your personal information</h4>
		<i><?php 
		if(isset($_REQUEST['filed_empty'])) {
			echo "file must be empty";
		}


		 ?></i>
		 <i><?php 
		if(isset($_REQUEST['register_success'])) {
			echo "register_success";
		}


		 ?></i>
		 <i><?php 
		if(isset($_REQUEST['register_error'])) {
			echo "register_error";
		}


		 ?></i>
		 <i><?php 
		if(isset($_REQUEST['email_ex'])) {
			echo " Al Ready Have A account  ";
		}


		 ?></i>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="fastName" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="lastName" placeholder="Last Name">
			</div>
		 </div>
		  <div class="control-group">
			<label class="control-label" for="inputLnam">User name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="userName" placeholder="User Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="email" placeholder="Email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" name="password" placeholder="Password">
		</div>
	  </div>
		
		<div class="control-group">
			<label class="control-label" for="address"> Full Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" name="address" placeholder="Adress"/> 
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="city" id="city" placeholder="city"/> 
			</div>
		</div>
				
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="postcode" name="postcode" placeholder="Zip / Postal Code"/> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<select id="country" name="country" >
				<option selected disabled>Country</option>
				<option value="1">Bangladesh</option>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Additional information</label>
			<div class="controls">
			  <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Additional information</textarea>
			</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="postcode22">Date of Birth <sup>*</sup></label>
		<div class="controls">
	  <input type="text" id="postcode22" name="dateOfBirth" placeholder="Date of Birth "/> 

		</div>
	  </div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php 

include "include/footer.php";

 ?>