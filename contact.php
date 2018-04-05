<?php include_once('inc/header.php'); ?>
<!--sectionHeader-->
<section class="sectionHeader aboutus">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Contact Us</h1>
			</div>
		</div>
	</div>
</section>
<!--sectionHeader end-->
<!--section contact-->
<section class="contact">
	<div class="container">
		<div class="row">
			<!--contact form-->
			<div class="col-md-6 contactform">
				<!--success msg-->
				<div class="successmessage">
					<p>Your Message has been sent successfully.</p>
				</div>
				<!--success msg end-->
				<!--failure msg-->
				<div class="failuremessage">
					<p>Sorry!!! your message has not been sent. Please try again</p>
				</div>
				<!--failure msg end-->
				<p>We'd love to hear from you.</p>
				<form class="needs-validation" action="" novalidate>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<input type="text" class="form-control contactinput" id="validationCustom01" placeholder="Full name" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please enter your full name.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<input type="email" class="form-control contactinput" id="validationCustom02" placeholder="Email Address" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please enter a valid email address.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<input type="tel" class="form-control contactinput" id="validationCustom03" placeholder="Mobile No. (+977-XXX-XXXXXX)" pattern="^+\d{4}-\d{3}-\d{7}$" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide valid Mobile number.
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<input type="text" class="form-control contactinput" id="validationCustom04" placeholder="Subject" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a subject.
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<textarea class="form-control contactinput" id="validationCustom05" rows="9" placeholder="Your Message" required></textarea>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide a messsage.
							</div>
						</div>
					</div>
					<button class="btn btn-primary btn-contact-submit" type="submit">Send Message</button>
				</form>
			</div>
			<!--google map-->
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5817920875725!2d85.33777608088646!3d27.699317765395044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199949814dc1%3A0x7ed21e7c9728004a!2sDining+Park+Restaurant+and+Lounge+Bar!5e0!3m2!1sen!2snp!4v1522904829574" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!--google map end-->
			
		</div>
	</div>
</section>
<!--section contact end-->
<script src="js/contact.js"></script>
<?php include_once('inc/footer.php'); ?>