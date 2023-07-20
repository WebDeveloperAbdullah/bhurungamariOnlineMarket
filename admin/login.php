<?php 

include("inclued/connect.php");
 if(isset($_COOKIE["PHPMASUMRAISHA"])) {
	header("location:index.php");
}





 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>UNIQUE ZONE</title>

</head>
<body>
	<div class="fullBody">
	<div class="row">

	<div class="col-12">
		<div class="image_logo">
			<img src="image/online shopping.png" alt="logo_image">
			
		</div>
		<div class="userFrom">
			<b>Admin</b>
		<form action="login_core.php" method="POST">
			

			<div class="lable"> 
				<label>User Email</label>
				
			</div>
			<div class="userInput">
				<input type="text" placeholder="User Email" name="user_email" required>
				
			</div>
			

			<div class="lable"> 
				<label>Password</label>
				
			</div>
			<div class="userInput">
				<input type="password" placeholder="Password" name="user_pass" required>
				
			</div>
			
			<div class="submit">
				<input type="submit" value="Log In" class="btn btn-success">
				
			</div>

			
		</form>

		
	</div>
		
	</div>
	
</div>
</div>





	  <script src="../assets/vendor/typed.js/typed.min.js"></script>
	  <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/all.min.js"></script>    
</body>
</html>