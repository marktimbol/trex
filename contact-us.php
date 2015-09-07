<?php include('header.php'); ?>

	<div class="row page contact-us">
		<div class="col-md-12">
			<h2 class="trex-title">Contact Us</h2>

			<div class="row">
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-6">
							<form method="POST">
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="text" name="name" id="name" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" name="email" id="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="phone">Phone Number:</label>
									<input type="text" name="phone" id="phone" class="form-control" required />
								</div>								
								<div class="form-group">
									<label for="message">Message:</label>
									<textarea name="message" id="message" rows="5" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Send Inquiry</button>
								</div>	

							</form>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-image">
									<img src="public/images/contact-us.png" alt="Contact Us" class="img-responsive" />
									<span class="card-title">Contact Us</span>
								</div>

								<div class="card-content">
									<address>
										Office C1201 - Burj Al Salam, Sheikh Zayed Road, Dubai, UAE
										<p class="lead theme-color">+971 4 331 3103</p>
										<a href="mailto:sales@trex.ae">sales@trex.ae</a>
									</address>
								</div>

								<div class="card-action">
									<p class="social-icons">
										<a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
										<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
										<a href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
									</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

<?php include('footer.php'); ?>