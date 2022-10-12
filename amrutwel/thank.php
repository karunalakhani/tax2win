<?php
  if(isset($_POST['submit']))
  {
  
     $msg='Name:' .$_POST['name']."\n"
      .'Phone:' .$_POST['phone']."\n"
     .'EMail:' .$_POST['email']."\n"
   
    
     .'Message:' .$_POST['message'];
     
   
   
   $headers = "From:info@amrutwel.com";
      mail('nil98909@gmail.com,allmail@webocto.com','Enquiry Form:',$msg,$headers);
    // echo "success";
  
  }
      
      ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <!-- Swiper Min CSS -->
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>Amrutwel - Landing Page</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
       <style>
    @media only screen and (max-width: 700px){
.pooja{
  
    margin-left: 85px;
     margin-top: 20px;
    
}
.pooja1{
  
    margin-left: 70px;
     margin-top: 20px;
    
}

      .float-right .float{
      position:fixed;
   width: 50px;
   height: 200px;
    bottom:110px;
    top: 300px;
    /*background-color:#fff;
    color:#14315E;*/
    border-radius:0px;
    text-align:center;
  font-size:30px;
    /*box-shadow: 2px 2px 3px #999;*/
 
  margin-left: 88%;
}

.float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:110px;
    
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:30px;
   /* box-shadow: 2px 2px 3px #999;*/
  z-index:100;
  margin-left: 87%;
}

.my-float{
    margin-top:16px;
}
* {
    margin: 0;
    padding: 0;
}
    }

    @media only screen and (min-width: 701px) and (max-width: 1367px){
.pooja{

    margin-left: 585px;
     margin-top: 20px;
   
}
.pooja1{

    margin-left: 465px;
     margin-top: 20px;
   
}

      .float-right .float{
      position:fixed;
   width: 100px;
   height: 100px;
    bottom:110px;
    top: 250px;
    /*background-color:#fff;
    color:#14315E;*/
    border-radius:0px;
    text-align:center;
  font-size:30px;
    /*box-shadow: 2px 2px 3px #999;*/
 
  margin-left: 93%;
}
.float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:110px;
    
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:30px;
   /* box-shadow: 2px 2px 3px #999;*/
  z-index:100;
  margin-left: 95%;
}

.my-float{
    margin-top:16px;
}
* {
    margin: 0;
    padding: 0;
}

    }

.float1 {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 10px;
    background-color: #25d36600;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #9990;
    z-index: 100;
    margin-left: 85%;
}


</style>
<style type="text/css">
    
    @media only screen and (min-width: 600px)
     {
 .call {
   display:none;
}
}
</style>

    </head>

    <body id="home" data-spy="scroll" data-offset="70">


         <a href="https://api.whatsapp.com/send?phone=+919890044100&text=I am interested in Amrutwel Property, ping me for further details." class="float" style="
    background-color:#25d366;" target="_blank">
    <img src="assets/img/whatsapp.png">
                    <i class="fa fa-whatsapp my-float"></i>
                    </a>
               <a href="tel:+917030179577" class="float1 call" target="_blank">

                    <img src="assets/img/call.png" >
                    

                  </a>
       

        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="logo">
                <img src="assets/img/logo2.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

           <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#details">Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                   
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div> -->
        </nav>
        <!-- End Navbar Area -->

        <!-- Start Main Banner -->
        <section class="home-area">
            <div class="swiper-container home-slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide main-banner item-bg1">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="main-banner-content">
                                        <h1>South Grafield Street for sale <span>$6,575,000</span></h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <a href="javascript:;" data-toggle="modal" data-target="#login" 
                                               class="default-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide main-banner item-bg2">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="main-banner-content">
                                        <h1>South Grafield Street for sale <span>$6,575,000</span></h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <a href="javascript:;" data-toggle="modal" data-target="#login" 
                                               class="default-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide main-banner item-bg3">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="main-banner-content">
                                        <h1>South Grafield Street for sale <span>$6,575,000</span></h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <a href="javascript:;" data-toggle="modal" data-target="#login" 
                                               class="default-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End Main Banner -->
        <h1 style="text-align: center;">Thank You we will get back to you soon !</h1>

          <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <p><i class="icofont-copyright"></i> <a href="https://webocto.com/">WebOcto</a>. All Rights Reserved, 2020</p>
            </div>
        </footer>
        <!-- End Footer Area -->

       
        
        <!-- JQuery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Swiper Min JS -->
        <script src="assets/js/swiper.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Map API JS FILES -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>
    <!-- Holsworthy Map JS FILE -->
        <script src="assets/js/holsworthy-map.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
    </body>

</html>