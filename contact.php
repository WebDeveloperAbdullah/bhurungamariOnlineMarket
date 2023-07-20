<?php 

include "include/header.php";

 ?>
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row">
		
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
			<p>web:bootsshop.com<br/><br/></p>
		</div>
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal" action="contact_core.php" method="POST">
       
          <div class="control-group">
           
              <input type="text" placeholder="name"  name="con_name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" name="con_email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name="con_sub" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea"  name="con_messages" class="input-xlarge"></textarea>
           
          </div>

            <input type="submit" value="Send" class="btn btn-success">

       
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span6 pull-right">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11662.187710548656!2d89.66004602022207!3d26.111187753513622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2eb6bfeee40fd%3A0x94baaf68340798cd!2z4Kat4KeB4Kaw4KeB4KaZ4KeN4KaX4Ka-4Kau4Ka-4Kaw4KeA!5e1!3m2!1sbn!2sbd!4v1615825435730!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php 

include "include/footer.php";

 ?>