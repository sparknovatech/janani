<?php 
include ("includes/head.php");
include ("includes/menu.php");

?>
 <div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<h3>Office Root Map</h3><hr>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6398820061804!2d79.69419099999999!3d13.752433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d3ef8892e1b85%3A0x4f90d9f36cbf19b9!2sSparknova+Technology+Pvt.Ltd!5e1!3m2!1sen!2sin!4v1431837891323" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<h3>Office Addrss</h3><hr>
			<address>
				Written by <a href="mailto:info@sparknova.org">Sparknova Technology Pvt. Ltd.</a>.<br> 
				Visit us at:<br>
				sparknova.org<br>
				D.No:15/122, Srikalahasti<br>
				A.P, India.
			</address>
			<h3>Contact Us</h3><hr>
			<form role="form" id="contact-form" name="contact-form" method="post" action="contact.php" class="contact-form">
					<input required type="text" class="form-control" id="first_name" name="first_name"
					placeholder="First Name: *">
					<input required type="email" class="form-control" id="email" name="email"
					placeholder="Email: *">
					<input required type="text" class="form-control" id="telephone" name="telephone"
					placeholder="Cell No: *">
					<textarea required class="form-control" id="message" name="comments"
                    placeholder="Message: *"></textarea>
					<center><input id="submit-button" type="submit" class=" btn btn-success" value="Submit"></center>
			</form>
		</div>
	</div>
</div>
</div>
<?php 
include ("includes/footer.php");
include ("js/jsfiles.php");
 ?>