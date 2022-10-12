<?php
  if(isset($_POST['submit']))
  {
  
     $msg='First Name:' .$_POST['first_name']."\n"
    .'Last Name:' .$_POST['last_name']."\n"
     .'EMail:' .$_POST['email']."\n"

      .'Phone:' .$_POST['phone']."\n"
    .'Country:' .$_POST['country']."\n" 

      .'Address:' .$_POST['address']."\n" 

        .'City:' .$_POST['city']."\n" 

          .'Pincode:' .$_POST['pincode']."\n" 
   
    
     .'message:' .$_POST['message']."\n";
   
   
    
     
   
   
   $headers = "webmail@anitamotors.com";
      mail('info@anitamotors.com,allmail@webocto.com,vishal.webocto@gmail.com','Enquiry Form:',$msg,$headers);
  
  
  }
      
?>


<?php
  if(isset($_POST['submit1']))
  {
  
     $msg='Name:' .$_POST['name1']."\n"
   
     .'EMail:' .$_POST['email1']."\n"

      .'Phone:' .$_POST['number1']."\n"
   
   
    
     .'message:' .$_POST['message1']."\n";
   
   
    
     
   
   
   $headers = "webmail@anitamotors.com";
      mail('info@anitamotors.com,adsul4158@gmail.com,vishal.webocto@gmail.com','Enquiry Form:',$msg,$headers);
  
  
  }
      
?>






<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About- Anita Motors</title>
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
		<!--	<img src="img/slider/bg2.png" alt="Page Banner" width="100%" height="500" />  -->
			<img src="img/slider/about_anita motors_1.jpg" alt="Page Banner" width="100%"/>
		</div>
		<!-- page banner area end -->
		<!-- about us section start -->
		<section class="about-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Thank You ... We Will Get Back To You Soon...!!!</h1>
					</div>
					
				</div>
			</div>
			


</section><br><br>
		
		<!-- our team section end -->
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