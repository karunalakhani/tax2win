
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- all css here -->
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script async>(function(w, d) { w.CollectId = "5d4d4e0b3e2bc41de5c4513f"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    </head>
    <body>
       <?php include 'header.php';?>
		<!-- page banner area start -->
		<div class="page-banner">
		<!--	<img src="img/slider/contact.png" alt="Page Banner" width="100%" />-->
		
			<img src="img/slider/contact us_anitamotors.jpg" alt="Page Banner" width="100%" />
		
	
		</div>
		<!-- page banner area end -->
		<!-- contact area start -->
		<div class="contact-informaion section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="informaion-text ">
						    <h3 class="text-center" style="text-transform: uppercase;">CONTACT INFO</h3>
<p><i class="fa fa-map-marker"></i><strong>  2, Mahavir Plaza, Barajyotirling Mandir Road, Ranpise Nagar, Akola, Maharashtra 444001 </strong></p>
<p><i class="fa fa-phone"></i> <strong>+91-9067777071</strong></p>

<p><i class="fa fa-envelope"></i> <strong>info@anitamotors.com</strong></p>
						</div>
					</div>
					<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.040260072097!2d77.01533246492727!3d20.70858968617264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd72f5cf7ce88cf%3A0x374b932c71d379a1!2sAnita%20Motors%20Akola!5e0!3m2!1sen!2sin!4v1569044930253!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						
					</div>
				</div>
			</div>
		</div>

		<!-- contact-informaion start -->
		<div class="contact-informaion section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="informaion-text">
							<h3>Anita Motors</h3>
							<p><strong>Anita Motors was established in August 2015. We started our journey with E-rikshaw as a distributor for Maharashtra of Prestentia Creations Pvt ltd and as E-bike batteries dealer. From past three years we are dealing with E-scooters and spares. Now in collaboration with Green power E-vehicles we are dealing throughout Maharashtra.</strong> </p>
							<p><strong>Looking at the ever-increasing pollution day-by-days we came up with the idea of starting E-VEHICLE business as we care for you and mother nature. We believe in building a healthy relation with our dealers and customers.</p></strong>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="contact-form clearfix">
								  <form action="thank.php" method="POST" id="main_contact_form" novalidate>
									<div class="col-sm-6">
										<div class="input-text">
											<input type="text" name="name1" id="name" placeholder="Your Name" />
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-text">
											<input type="text" name="email1" id="email" placeholder="Email" required />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="input-text">
											<input type="text" name="number1" id="mobile" placeholder="Mobile Number" />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="input-text">
											<textarea name="message1" id="message" placeholder="Message" rows="4"></textarea>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="submit-text">
											<input type="submit" name="submit1" value="send" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-informaion end -->
		<?php include 'footer.php';?>
		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.3.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- camera slider JS -->
        <script src="js/camera.min.js"></script>
		
		<!-- jquery.easing js -->
        <script src="js/jquery.easing.1.3.js"></script>
		<!-- slick slider js -->
        <script src="js/slick.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- magnific-popup js -->
        <script src="js/magnific-popup.min.js"></script>
		<!-- countdown js -->
        <script src="js/countdown.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- Google Map JS -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Agsvf36du-7l_mp8iu1a-rXoKcWfs2I"> </script>
		<!-- Custom map-script js -->
        <script src="js/map-script.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
<?php
  if(isset($_POST['submit']))
  {
  
     $msg='Name:' .$_POST['name']."\n"
      .'Phone:' .$_POST['number']."\n"
     .'EMail:' .$_POST['email']."\n"
   
    
     .'Message:' .$_POST['message'];
     
   
   
   $headers = "From:info@anitamotors.com";
      mail('info@anitamotors.com,allmail@webocto.com','Enquiry Form:',$msg,$headers);
    // echo "mail has been sent to you successfully";
  
  }
      
      ?>