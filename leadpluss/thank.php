<?php
  if(isset($_POST['submit']))
  {
  
    $msg='Name:' .$_POST['name']."\n"
     
      .'Email:' .$_POST['email']."\n"
      
	   .'Phone:' .$_POST['phone']."\n"
	   
	   // .'service:' .$_POST['service']."\n"
   

      // .'message:' .$_POST['message']."\n"
   

       .'message:' .$_POST['message']."\n";

  
        $headers = "leadpluss.com";
               mail('aarti.bhosale.webocto@gmail.com,test.webocto@gmail.com','Enquiry Form:',$msg,$headers);
  
  
  }
      
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Leadpluss</title>

  <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
  <link rel="manifest" href="assets/favicon/site.html">

  <!--stylesheet-->
  <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="unpkg.com/swiper%406.4.5/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <style>
  .header__nav-primary>li:first-child a {
    color: #6fc067;
}
.video__background::before {
    content: "";
    display: block;
    position: absolute;
    bottom: -10rem;
    left: 50%;
   
    -webkit-transform: translateX(-50%);
    z-index: 5;
    width: 77.6rem;
    height: 77.6rem;
    border-radius: 50%;
   
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 50%, #3a8da8 100%);
    background-size: 200% 200%;
    background-position: left bottom;
  
    animation-name: animateGradient;
   
    animation-iteration-count: infinite;
}
  .form-control {
    display: block;
    width: 100%;
    padding: 10px .75rem;
    font-size: 12px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
  
  </style>
  
  <style>
  
  
  .modal-content {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
    height: 350px;
}
  
  
  
  .form-control {
    display: block;
    width: 100%;
    padding: 10px .75rem;
    font-size: 12px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
  </style>
  
  
  
  
  <style>
  
  
  .section-heading {
    font-weight: 600;
    font-size: 36px;
    width: 68%;
    line-height: -4rem;
}
  
  .feature {
    width: 100vw;
    padding: 50px 0;
}

.growth__wrapper {
    background-color: #f0f7fc;
    padding: 50px 0;
    width: calc(100% - 10rem);
    margin: 0 auto;
    border-radius: 3rem;
}


.step__wrapper {
    margin: 5rem 0;
    background-color: #fff6e9;
    padding: 50px 0;
    width: calc(100% - 10rem);
    margin: 0 auto;
    border-radius: 3rem;
}

/*.clients-sec {*/
/*    width: 100vw;*/
/*    padding: 50px 0;*/
/*}*/


.questions__wrapper {
    background-color: #fef2f6;
    padding: 50px 0;
    width: calc(100% - 10rem);
    margin: 0 auto;
    border-radius: 3rem;
}

.pricing__wrapper {
    width: 100%;
    padding: 50px 0;
}

.screenshot__wrapper {
    background-color: #f0f7fc;
    margin: 0 auto;
    overflow: visible;
    padding: 50px 0;
    width: calc(100% - 10rem);
    margin: 0 auto;
    border-radius: 3rem;
}
.blog {
    padding: 50px 0;
}

.footer__wrapper {
    padding: 50px 0;
    width: calc(100% - 10rem);
    margin: 0 auto;
    border-radius: 3rem;
    background-color: #f0f7fc;
}

</style>
  
  
  <style>
      .clients-sec .testimonial__wrapper .client .testimonial p {
    font-weight: 500;
    font-size: 1.8rem;
}
  </style>
  <style>
  .download-buttons a.google-play {
    
    background: linear-gradient(0deg, #3a8da8 0%, #6fc067 50%, #3a8da8 100%);
   
    -webkit-filter: drop-shadow(0px 10px 10px rgba(245,69,144,0.4));
  
}
      .download-buttons a .button-content h6 {
    font-size: 1.2rem;
    color: #bbdef9;
}

.feature__box .icon-1 {
  
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
    filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
    -webkit-filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
    
}
.feature__box--1 .feature__box__wrapper {
    background-color: #96f9c0;
}

.feature__box .icon-3 {
     background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
    filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
    -webkit-filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
    
}
.feature__box--3 .feature__box__wrapper  {
    background-color: #96f9c0;
}

.feature__box .icon-2 {
   
    background: linear-gradient(45deg, #1369ec 0%, #65bef4 100%);
    filter: drop-shadow(0px 40px 15px rgba(255,186,114,0.4));
    -webkit-filter: drop-shadow(0px 40px 15px rgba(187, 222, 2490.4));
    
}
.feature__box--2 .feature__box__wrapper {
    background-color: #bbdef9;
}

.feature__box .icon-4 {
    background: linear-gradient(45deg, #1369ec 0%, #65bef4 100%);
    filter: drop-shadow(0px 40px 15px rgba(255,186,114,0.4));
    -webkit-filter: drop-shadow(0px 40px 15px rgba(187, 222, 2490.4));
    
}
.feature__box--4 .feature__box__wrapper {
    background-color: #bbdef9;
}
  </style>
  <style>
  .pricing__single-1 {
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
     filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
}
.pricing__single-1 .icon i {
    color: #2db7b3;
}
.pricing__single-3 {
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
     filter: drop-shadow(0px 40px 15px rgba(98, 193, 143, 0.4));
}
  </style>
  <style>
  
  @media (max-width:600px)
{
.clients-sec .testimonial__wrapper .client .testimonial {
    position: absolute;
    top: 211px;
    left: 49%;
   
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
    width: 103%;
    height: 53%;
    color: white;
    border-radius: 3rem;
    transition: all .25s ease;
}
}
@media (min-width:600px)
{
    .clients-sec .testimonial__wrapper .client .testimonial {
     position: absolute;
      background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
}
}
/*      .clients-sec .testimonial__wrapper .client .testimonial {*/
/*    position: absolute;*/
/*    top: 0;*/
/*    left: 50%;*/
   
/*    -webkit-transform: translateX(-50%);*/
   
/*    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);*/
/*    width: 60%;*/
/*    height: 100%;*/
/*    color: white;*/
/*    border-radius: 3rem;*/
   
    
/*    transition: all .25s ease;*/
   
/*    -webkit-filter: drop-shadow(0px 20px 10px rgba(79,188,186,0.4));*/
    
/*}*/
  </style>
  <style>
      .social ul li.facebook {
    
   
    background: linear-gradient(0deg, #3a8da8 0%, #6fc067 50%, #3a8da8 100%);
   
    -webkit-filter: drop-shadow(0px 5px 5px rgba(147,65,212,0.4));
    -moz-filter: drop-shadow(0px 5px 5px rgba(147,65,212,0.4));
}

.social ul li.linkedin {
    
    
    background: linear-gradient(0deg, #1369ec 0%, #65bef4 50%, #1369ec 100%);
    
    -webkit-filter: drop-shadow(0px 5px 5px rgba(108,222,220,0.4));
    -moz-filter: drop-shadow(0px 5px 5px rgba(108,222,220,0.4));
}
  </style>
  
</head>

<body>

  <!--preloader start-->
  <!--<div class="preloader">-->
  <!--  <img src="assets/images/loading-logo.png" alt="image">-->
  <!--</div>-->
  <!--preloader end-->

  <!--header section start-->
  <header class="header header-1">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="index.html">
            <img src="assets/images/website logo.PNG" alt="logo">
          </a>
        </div>
        <div class="header__nav">
          <ul class="header__nav-primary">
            <li><a href="index.html"><i class="fad fa-home-alt"></i></a></li>
            <!--<li class="nav__dropdown dropdown-wrapper" id="menu-1">-->
            <!--  <a href="#" class="nav__dropdown-info dropdown-info">-->
            <!--    Home-->
            <!--  </a>-->
            <!--  <ul class="nav__dropdown-box dropdown-box">-->
                <!--<li><a href="index.html">Home 1</a></li>-->
                <!--<li><a href="index2.html">Home 2</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
            <li><a href="#video">Video</a></li>
            <li><a href="#feature">Features</a></li>
            <li><a href="#feedback">Feedbacks</a></li>
            <li><a href="#faq">FAQs</a></li>
            <li><a href="#Process">Process</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#preview">Preview</a></li>
            <!--<li class="nav__dropdown dropdown-wrapper" id="menu-2">-->
            <!--  <a href="#" class="nav__dropdown-info dropdown-info">-->
            <!--    Pages-->
            <!--  </a>-->
            <!--  <ul class="nav__dropdown-box dropdown-box">-->
            <!--    <li><a href="blog.html">Blog</a></li>-->
            <!--    <li><a href="blog-single.html">Blog single</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
          </ul>
          <span><i class="fas fa-times"></i></span>
        </div>
        <div class="header__bars">
          <div class="header__bars-bar header__bars-bar-1"></div>
          <div class="header__bars-bar header__bars-bar-2"></div>
          <div class="header__bars-bar header__bars-bar-3"></div>
        </div>
      </div>
    </div>
  </header>
  <!--header section end-->

  <!--hero section start-->
  <section class="hero">
    <div class="hero__wrapper">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <h1 class="main-heading color-black">All in one CRM built for Real Estate </h1>
            <p class="paragraph"><strong>LeadPluss </strong>is an innovative software product designed and developed to revolutionise sales for Real Estate. With LeadPluss, you can get real-time insights into your marketing activities and be able to capitalise on every single opportunity for your business growth.</p>
            <div class="download-buttons">
              <a href="https://scalable.leadpluss.com/manage/register" data-toggle="modal" data-target="#myModal" class="google-play">
                <i class="fa fa-phone"></i>
                <div class="button-content">
                  <h6>TRY NOW <span>FOR FREE</span></h6>
                   <!--<button type="button" data-toggle="modal" data-target="#myModal" style="color: white;font-size: 12px;     padding: 8px 10px;"><i class="fa fa-envelope"></i> Get a Quote</button>-->
                </div>
              </a>
               <a href="#" data-toggle="modal" data-target="#myModal" class="apple-store">
                <i class="fas fa-envelope"></i>
                <div class="button-content">
                  <h6>GET MORE <span>DETAILS</span></h6>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="questions-img hero-img">
              <img src="assets/images/clients/screenshot- main-2-01.png" alt="image" style="margin-left:35px;" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->

  <!--feature section start-->
  <section class="feature" id="intro">
    <div class="container">
      <h2 class="section-heading color-black">INTEGRATED SOLUTION FOR REAL ESTATE BUILDERS & BROKERS</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--1">
            <div class="icon icon-1">
              <i class="fad fa-clock"></i>
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-1">
                <h3>Real Time Leads</h3>
                <p class="paragraph dark">Sync Lead Ads in real-time with LeadPluss CRM, start your funnel as leads come in and reach them with the perfect timing. Collect leads from Magic Bricks, 99 Acres, Facebook and many other websites.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--2">
            <div class="icon icon-2">
              <i class="fad fa-sort"></i>
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-2">
                <h3>Sorting and Contacting</h3>
                <p class="paragraph dark">With the help of real estate lead management software, leads get automatically sorted, filtered and categorized. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--3">
            <div class="icon icon-3">
              <i class="fad fa-share"></i>
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-3">
                <h3>Sharing & Collaboration</h3>
                <p class="paragraph dark">Allows your teams to work remotely with Real Time Leads, Document Management and Real-time Reports, Dashboards & Escalations.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature__box feature__box--4">
            <div class="icon icon-4">
              <i class="fad fa-sort"></i>
            </div>
            <div class="feature__box__wrapper">
              <div class="feature__box--content feature__box--content-4">
                <h3>Instant Notification</h3>
                <p class="paragraph dark">With LeadPluss, you can get an immediate notification with the details of specific properties and relevant market data for a meaningful conversation.</p>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="col-lg-3 col-md-6">-->
        <!--  <div class="feature__box feature__box--4">-->
        <!--    <div class="icon icon-4">-->
        <!--      <i class="fad fa-rocket-launch"></i>-->
        <!--    </div>-->
        <!--    <div class="feature__box__wrapper">-->
        <!--      <div class="feature__box--content feature__box--content-4">-->
        <!--        <h3>Become an Inspiration</h3>-->
        <!--        <p class="paragraph dark">Tuisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi-->
        <!--          nec tempor isvel ultricies ligula.</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
    </div>
  </section>
  <!--feature section end-->

  <!--video section start-->
  <div class="video" id="video">
    <div class="video__wrapper">
      <div class="container">
        <div class="video__play">
          <button type="button" data-toggle="modal" data-target="#videoModal">
            <i class="fad fa-play"></i>
          </button>
          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-close">
                  <button type="button" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <!--<iframe src="https://www.youtube.com/embed/2BrCE_zxM0U"-->
                  <!--  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->
                  <!--  allowfullscreen></iframe>-->
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/_wQJSyY6nXc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="video__background">
          <img src="assets/images/video-bg-1.png" alt="image" class="texture-1">
          <img src="assets/images/video-img.PNG" alt="image" class="phone">
          <img src="assets/images/video-bg-2.png" alt="image" class="texture-2">
        </div>
      </div>
    </div>
  </div>
  <!--video section end-->

  <!--growth section start-->
  <section class="growth" id="feature">
    <div class="growth__wrapper">
      <div class="container">
        <h2 class="section-heading color-black">Turn every enquiry into Sales with LeadPluss CRM Software</h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
                <!--<i class="fad fa-user-astronaut"></i>-->
                <!--<i class="fa fa-users" aria-hidden="true"></i>-->
                <img src="assets/images/icons/Icons-01.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
   

              </div>
              <div class="content">
                <h3>Lead Capturing</h3>
                <p class="paragraph dark">You can manage and track hundreds of leads from all marketing sources like magic bricks, 99 acres, social media, emails, landing pages in one place and improve your lead management process effectively.</p>
              </div>
            </div>
          </div>
           <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
          <!--<i class="fas fa-network-wired"></i>-->
          <img src="assets/images/icons/Icons-02.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
              </div>
              <div class="content">
                <h3>Mobile-Friendly CRM</h3>
                <p class="paragraph dark">Plan your all-day activity in advance, update activities, upload files and documents, and track your on-field agents, schedule a call, set reminders for meetings, etc.</p>
              <br>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
                <img src="assets/images/icons/Icons-03.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
              </div>
              <div class="content">
                <h3>Reports & Analytics</h3>
                <p class="paragraph dark">Analyze and track a complete lead journey, campaign reports, activities that happened between lead and sales team, sales team.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
                <!--<i class="fad fa-bullhorn"></i>-->
                 <img src="assets/images/icons/Icons-04.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
              </div>
              <div class="content">
                <h3>Track Site Visits </h3>
                <p class="paragraph dark">Track your site visit follow-ups using automatic reminders. Analyze the site visit counts with the relevant salesperson activity report.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
                <!--<i class="fad fa-clock"></i>-->
                 <img src="assets/images/icons/Icons-05.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
              </div>
              <div class="content">
                <h3>Sales Team Activities In Clicks</h3>
                <p class="paragraph dark">Real Estate CRM software allows you to measure your sales team performance, tracks sales calls & follow-ups. It allows finding the best performing salesperson based on target completion activities.</p>
              </div>
            </div>
          </div>
          
         
          <div class="col-lg-6">
            <div class="growth__box">
              <div class="icon">
                <!--<i class="fad fa-user-astronaut"></i>-->
                <!--<i class="fa fa-tasks" aria-hidden="true"></i>-->
                 <img src="assets/images/icons/Icons-06.png"  style=" max-width: 100%;
    height: auto;
    border: 0;
    vertical-align: top;
    margin-top: 35px;
    margin-left: 28px;">
              </div>
              <div class="content">
                <h3>Automated Text Messages And Emails</h3>
                <p class="paragraph dark">Send automated text and WhatsApp messages without saving contact number. Send the project details and brochures directly from your desktop to the lead's WhatsApp number.</p>
              <br>
              <br>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="button__wrapper">
            <a href="#" class="button" data-toggle="modal" data-target="#myModal">
              <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
            </a>
            <a href="#" class="button" data-toggle="modal" data-target="#myModal">
              <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--growth section end-->

  <!--step section start-->
  <section class="step">
    <div class="step__wrapper">
      <div class="container">
        <h2 class="section-heading color-black">Triple Your Profits with Accurate leads Tracking</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-01(1).PNG" alt="image">
              </div>
              <div class="content">
                <h3>Get Your Leads From <span>Properties Portals</span></h3>
                <p class="paragraph dark">Save time by following up with leads right inside LeadPluss real estate lead management software. Stop juggling multiple tools like magic bricks, 99 acres etc. Access contact details and follow up with leads all in the same place.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-01(2).PNG" alt="image">
              </div>
              <div class="content">
                <h3>Receive Meeting And Followup <span>Reminders On Sms</span></h3>
                <p class="paragraph dark">Once you’re signed up you can create
                  as many polls you want to watch.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="step__box">
              <div class="image">
                <img src="assets/images/phone-01(3).PNG" alt="image">
              </div>
              <div class="content">
                <h3>Property 
<span>Matching</span></h3>
                <p class="paragraph dark">
Capture detailed property information. Quick search of properties on various parameters. Get auto-matching customers for available properties. Send detailed property catalog (including images). Advanced action list and strong basic search feature.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="button__wrapper">
            <a href="#" class="button" data-toggle="modal" data-target="#myModal">
              <span>Get Free Demo <i class="fad fa-long-arrow-right"></i></span>
            </a>
            <a href="#" class="button" data-toggle="modal" data-target="#myModal">
              <span>Learn More <i class="fad fa-long-arrow-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--step section end-->
  
  
  
  
  
  

  <!--client section start-->
  <section class="clients-sec" id="feedback">
    <div class="container">
      <h2 class="section-heading color-black">Hear from what others had to say.</h2>
      <div class="testimonial__wrapper">
        <div class="client client-01 active">
          <div class="image">
            <img src="assets/images/testimonial-img-01.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“The backend support from the scalable is fantastic. Leadpluss software is the perfect solution to manage all our customer data setting and sending reminders,emails messages. We would definitely recommend your service to all our associates.”</p>
              <h4>— Backpack outdoors </h4>
            </div>
          </div>
        </div>
        <div class="client client-02">
          <div class="image">
            <img src="assets/images/testimonial-img-02.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“We have been using the leadpluss software for the last 1 year. It has proven to be an excellent tool to manage our leads what makes leadpluss so great is their attention to detail, availability and most importantly their knowledge and expertise to deliver on time and according to requirements.”</p>
              <h4>— USP</h4>
            </div>
          </div>
        </div>
        <div class="client client-03">
          <div class="image">
            <img src="assets/images/testimonial-img-03.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“Leadpluss is hands down the small to medium sized business my relationship with leadpluss what I wish I had with all my vendors”</p>
              <h4>— Ferns n Petals</h4>
            </div>
          </div>
        </div>
        <div class="client client-04">
          <div class="image">
            <img src="assets/images/testimonial-img-04.png" alt="image">
          </div>
          <div class="testimonial">
            <div class="testimonial__wrapper">
              <p>“fourth Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                sixth tree she'd open.”</p>
              <h4>— DAVID SPADE</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="clients">
        <div class="clients__info">
          <h3>1,000+</h3>
          <p class="paragraph dark">Customers in over 90 countries are growing their businesses with us.</p>
        </div>
        <div class="swiper-container clients-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-01.png" alt="image" style="width:100%; height:100%;" ></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-02.png" alt="image" style="width:100%; height:100%;" ></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-03.png" alt="image" style="width:100%; height:100%;" ></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-01.png" alt="image"></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-02.png" alt="image"></a>
            </div>
            <div class="swiper-slide clients-slide">
              <a href="#"><img src="assets/images/clients/clients-03.png" alt="image" style="width:100%; height:100%;" ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--client section end-->
  
  <!--step section start-->
  <!--<section class="step" id="Process">-->
  <!--  <div class="step__wrapper">-->
  <!--    <div class="container">-->
  <!--      <h2 class="section-heading color-black">Real Estate Contact Management That Works (Hard) for You</h2>-->
  <!--      <div class="row">-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="step__box">-->
        <!--      <div class="image">-->
        <!--        <img src="assets/images/phone-01.png" alt="image">-->
        <!--      </div>-->
        <!--      <div class="content">-->
        <!--        <h3>EASY TO<span>Register.</span></h3>-->
        <!--        <p class="paragraph dark">Join the app in 3 easy steps and get-->
        <!--          started with your progresso daily.</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="step__box">-->
        <!--      <div class="image">-->
        <!--        <img src="assets/images/phone-02.png" alt="image">-->
        <!--      </div>-->
        <!--      <div class="content">-->
        <!--        <h3>SIMPLE TO<span>Create.</span></h3>-->
        <!--        <p class="paragraph dark">Once you’re signed up you can create-->
        <!--          as many polls you want to watch.</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-lg-4">-->
        <!--    <div class="step__box">-->
        <!--      <div class="image">-->
        <!--        <img src="assets/images/phone-03.png" alt="image">-->
        <!--      </div>-->
        <!--      <div class="content">-->
        <!--        <h3>FUN TO<span>Measure.</span></h3>-->
        <!--        <p class="paragraph dark">Share your growth results with your-->
        <!--          friends and inspre others.</p>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="button__wrapper">-->
        <!--    <a href="#" class="button" data-toggle="modal" data-target="#myModal">-->
        <!--      <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>-->
        <!--    </a>-->
        <!--    <a href="#" class="button" data-toggle="modal" data-target="#myModal">-->
        <!--      <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>-->
        <!--    </a>-->
        <!--  </div>-->
        <!--</div>-->
  <!--      <img src="assets/images/crm_highlights.png">-->
        
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!--step section end-->
<br>
<br>
<br>
  <!--questions section start-->
  <!--<section class="questions" id="faq">-->
  <!--  <div class="questions__wrapper">-->
  <!--    <div class="container">-->
  <!--      <h2 class="section-heading color-black">Some frequently asked questions.</h2>-->
  <!--      <div class="row align-items-lg-center">-->
  <!--        <div class="col-lg-6 order-2 order-lg-1">-->
  <!--          <div id="accordion">-->
  <!--            <div class="card" id="card-1">-->
  <!--              <div class="card-header" id="heading-1">-->
  <!--                <h5 class="mb-0">-->
  <!--                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"-->
  <!--                    aria-controls="collapse-1">-->
  <!--                  What is the value proposition of LeadPluss to any business?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->

  <!--              <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">LeadPluss is a one-stop solution for leads management. LeadPluss helps organizations or individuals to automate business development, pre-sales or marketing efforts to gather leads quickly, efficiently and to perform a quick follow up actions to achieve a higher return on investments (ROI) of your efforts and make you more productive and efficient.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="card" id="card-2">-->
  <!--              <div class="card-header" id="heading-2">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2"-->
  <!--                    aria-expanded="false" aria-controls="collapse-2">-->
  <!--                Who can use LeadPluss?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">Anyone can use LeadPluss, especially for event organizers, exhibitors, business owners, sales and marketing professionals.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
              
              
              
  <!--               <div class="card" id="card-3">-->
  <!--              <div class="card-header" id="heading-3">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3"-->
  <!--                    aria-expanded="false" aria-controls="collapse-3">-->
  <!--                    What are the types of datadirect drivers?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
  <!--                    are contending with a mountain-->
  <!--                    of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
  <!--                    and oversight.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div> -->
              
              
              
              
              
              
              
              
              
            
  <!--            <div class="card" id="card-4">-->
  <!--              <div class="card-header" id="heading-4">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4"-->
  <!--                    aria-expanded="false" aria-controls="collapse-4">-->
  <!--                    How do determine agencies compliance?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
  <!--                    are contending with a mountain-->
  <!--                    of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
  <!--                    and oversight.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="card" id="card-5">-->
  <!--              <div class="card-header" id="heading-5">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5"-->
  <!--                    aria-expanded="false" aria-controls="collapse-5">-->
  <!--                    How are datadirect drivers different?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
  <!--                    are contending with a mountain-->
  <!--                    of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
  <!--                    and oversight.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <div class="card" id="card-6">-->
  <!--              <div class="card-header" id="heading-6">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6"-->
  <!--                    aria-expanded="false" aria-controls="collapse-6">-->
  <!--                    What is a business rules engine?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
  <!--                    are contending with a mountain-->
  <!--                    of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
  <!--                    and oversight.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
              
              
              
              
              
  <!--              <div class="card" id="card-7">-->
  <!--              <div class="card-header" id="heading-7">-->
  <!--                <h5 class="mb-0 hidden">-->
  <!--                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7"-->
  <!--                    aria-expanded="false" aria-controls="collapse-7">-->
  <!--                  Can I track my sales and marketing team members productivity and -->
  <!--                  efficiency in LeadPluss? How?-->
  <!--                  </button>-->
  <!--                </h5>-->
  <!--              </div>-->
  <!--              <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">-->
  <!--                <div class="card-body">-->
  <!--                  <p class="paragraph">Yes, you can track sales reports, pipeline sale report, sales cycle reports, pipeline reports, product interest by percentage.</p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
              
              
              
              
              
              
          
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-lg-6 order-1 order-lg-2">-->
  <!--          <div class="questions-img">-->
  <!--            <img src="assets/images/ss/5.png" alt="image">-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!--questions section end-->
  
  <!--questions section start-->
  <section class="questions" id="faq">
    <div class="questions__wrapper">
      <div class="container">
        <h2 class="section-heading color-black">Some frequently asked questions.</h2>
        <div class="row align-items-lg-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <div id="accordion">
              <div class="card" id="card-1">
                <div class="card-header" id="heading-1">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                      aria-controls="collapse-1" style="text-align:left;">
                      What is the value proposition of LeadPluss <br>to any business?
                    </button>
                  </h5>
                </div>

                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                  <div class="card-body">
                    <p class="paragraph">LeadPluss is a one-stop solution for leads management. LeadPluss helps organizations or individuals to automate business development, pre-sales or marketing efforts to gather leads quickly, efficiently and to perform a quick follow up actions to achieve a higher return on investments (ROI) of your efforts and make you more productive and efficient.</p>
                  </div>
                </div>
              </div>
              <div class="card" id="card-2">
                <div class="card-header" id="heading-2">
                  <h5 class="mb-0 hidden">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2"
                      aria-expanded="false" aria-controls="collapse-2">
                      Who can use LeadPluss?
                    </button>
                  </h5>
                </div>
                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                  <div class="card-body">
                    <p class="paragraph">Anyone can use LeadPluss, especially for event organizers, exhibitors, business owners, sales and marketing professionals.</p>
                  </div>
                </div>
              </div>
              <div class="card" id="card-3">
                <div class="card-header" id="heading-3">
                  <h5 class="mb-0 hidden">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3"
                      aria-expanded="false" aria-controls="collapse-3"style="text-align:left;">
                      Can I search my email & phone call leads <br>follow-up history?
                    </button>
                  </h5>
                </div>
                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                  <div class="card-body">
                    <p class="paragraph">Yes, you can search the follow-ups activities by email and phone call by team member & event name.</p>
                  </div>
                </div>
              </div>
              <div class="card" id="card-4">
                <div class="card-header" id="heading-4">
                  <h5 class="mb-0 hidden">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4"
                      aria-expanded="false" aria-controls="collapse-4"style="text-align:left;">
                     Can I track my sales and marketing team <br>members productivity and efficiency <br>in LeadPluss? How?
                    </button>
                  </h5>
                </div>
                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                  <div class="card-body">
                    <p class="paragraph">Yes, you can track sales reports, pipeline sale report, sales cycle reports, pipeline reports, product interest by percentage.</p>
                  </div>
                </div>
              </div>
              
              <div class="card" id="card-5">
                <div class="card-header" id="heading-5">
                  <h5 class="mb-0 hidden">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5"
                      aria-expanded="false" aria-controls="collapse-5" style="text-align:left;">
                      Does LeadPluss provide reminders for<br> tasks, meetings for leads?
                    </button>
                  </h5>
                </div>
                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
                  <div class="card-body">
                    <p class="paragraph">Yes, you can set up reminders for tasks, meeting for leads.</p>
                  </div>
                </div>
              </div>
              <!--<div class="card" id="card-6">-->
              <!--  <div class="card-header" id="heading-6">-->
              <!--    <h5 class="mb-0 hidden">-->
              <!--      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6"-->
              <!--        aria-expanded="false" aria-controls="collapse-6">-->
              <!--        What is a business rules engine?-->
              <!--      </button>-->
              <!--    </h5>-->
              <!--  </div>-->
              <!--  <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">-->
              <!--    <div class="card-body">-->
              <!--      <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
              <!--        are contending with a mountain-->
              <!--        of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
              <!--        and oversight.</p>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="card" id="card-7">-->
              <!--  <div class="card-header" id="heading-7">-->
              <!--    <h5 class="mb-0 hidden">-->
              <!--      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7"-->
              <!--        aria-expanded="false" aria-controls="collapse-7">-->
              <!--        What are the types of datadirect drivers?-->
              <!--      </button>-->
              <!--    </h5>-->
              <!--  </div>-->
              <!--  <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">-->
              <!--    <div class="card-body">-->
              <!--      <p class="paragraph">With increasing calls for government accountability and cost savings, agencies-->
              <!--        are contending with a mountain-->
              <!--        of rule and policy changes affecting everything from pensions and benefits, to client eligibility-->
              <!--        and oversight.</p>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="questions-img">
              <img src="assets/images/screenshot-01.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--questions section end-->

  <!--pricing section start-->
  <section class="pricing" id="pricing">
    <div class="pricing__wrapper">
      <h2 class="section-heading color-black">Easy pricing plans for your needs.</h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="pricing__single pricing__single-1">
              <div class="icon">
                <i class="fad fa-user-graduate"></i>
              </div>
              <h4>Free Trial</h4>
              <h3><i class="fa fa-rupee-sign"></i>0.00</h3>
              <h6>1 user</h6>
              <div class="list">
                <ul>
                     <li>7 Days</li>
                  <li>All Leadpluss Features</li>
                  <!--<li>1 email address</li>-->
                  <!--<li>2GB cloud storage</li>-->
                  <!--<li class="not-included">No customer support</li>-->
                  <!--<li class="not-included">Extra features</li>-->
                  <!--<li class="not-included">In-app products</li>-->
                </ul>
              </div>
              <a href="#" class="button" data-toggle="modal" data-target="#myModal">
                <span>Buy <i class="fad fa-long-arrow-right"></i></span>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pricing__single pricing__single-2">
              <div class="icon">
                <i class="fad fa-user-cowboy"></i>
              </div>
              <h4>STANDARD</h4>
               <h3><i class="fa fa-rupee-sign"></i>12,000</h3>
              <h6>1 User</h6>
              <div class="list">
                <ul>
                     <li>1 Year</li>
                  <li>All Leadpluss Features</li>
                  <!--<li>1 email address</li>-->
                  <!--<li>2GB cloud storage</li>-->
                  <!--<li class="not-included">No customer support</li>-->
                  <!--<li class="not-included">Extra features</li>-->
                  <!--<li class="not-included">In-app products</li>-->
                </ul>
              </div>
              <a href="#" class="button" data-toggle="modal" data-target="#myModal">
                <span>Buy <i class="fad fa-long-arrow-right"></i></span>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pricing__single pricing__single-3">
              <div class="icon">
                <i class="fad fa-user-astronaut"></i>
              </div>
              <h4>PREMIUM</h4>
               <h3><i class="fa fa-rupee-sign"></i>19,999</h3>
              <h6>3 Users</h6>
              <div class="list">
               <ul>
                     <li>1 Year</li>
                  <li>All Leadpluss Features</li>
                  <!--<li>1 email address</li>-->
                  <!--<li>2GB cloud storage</li>-->
                  <!--<li class="not-included">No customer support</li>-->
                  <!--<li class="not-included">Extra features</li>-->
                  <!--<li class="not-included">In-app products</li>-->
                </ul>
              </div>
              <a href="#" class="button" data-toggle="modal" data-target="#myModal">
                <span>Buy <i class="fad fa-long-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--pricing section end-->
  
  
  
  

  <!--screenshot section start-->
  <section class="screenshot" id="preview">
    <div class="screenshot__wrapper">
      <div class="container">
        <div class="screenshot__info">
          <h2 class="section-heading color-black">Have a look at what’s inside the app.</h2>
          <div class="screenshot-nav">
            <div class="screenshot-nav-prev"><i class="fad fa-long-arrow-left"></i></div>
            <div class="screenshot-nav-next"><i class="fad fa-long-arrow-right"></i></div>
          </div>
        </div>
      </div>
      <div class="swiper-container screenshot-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/1.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/2.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/3.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/4.png" alt="image">
          </div>
          <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/5.png" alt="image">
          </div>
           <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/6.png" alt="image">
          </div>
           <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/7.png" alt="image">
          </div>
           <div class="swiper-slide screenshot-slide">
            <img src="assets/images/ss/8.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--screenshot section end-->
  

  <!--related blog section start-->
  <!--<section class="related-blog blog">-->
  <!--  <div class="related-blog__wrapper">-->
  <!--    <h2 class="section-heading color-black">Read latest news from our blog.</h2>-->
  <!--    <div class="blog__content">-->
  <!--      <div class="container">-->
  <!--        <div class="row">-->
  <!--          <div class="col-lg-4">-->
  <!--            <a href="blog-single.html">-->
  <!--              <div class="blog__single blog__single--1">-->
  <!--                <div class="blog__single-image">-->
  <!--                  <img src="assets/images/blog-img-1.png" alt="image">-->
  <!--                </div>-->
  <!--                <div class="blog__single-info">-->
  <!--                  <h3>New features coming in 2020 to our app.</h3>-->
  <!--                  <h4>12 <i class="fad fa-comment"></i><span>|</span>Dec 17, 2020</h4>-->
  <!--                  <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced-->
  <!--                    eleifend dales felise morbi nec tempor isvel ultricies lideula. </p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </a>-->
  <!--          </div>-->
  <!--          <div class="col-lg-8">-->
  <!--            <a href="blog-single.html">-->
  <!--              <div class="blog__single blog__single--2">-->
  <!--                <div class="blog__single-image">-->
  <!--                  <img src="assets/images/blog-img-2.png" alt="image">-->
  <!--                </div>-->
  <!--                <div class="blog__single-info">-->
  <!--                  <h3>New features coming in 2020 to our app.</h3>-->
  <!--                  <h4>12 <i class="fad fa-comment"></i><span>|</span>Dec 17, 2020</h4>-->
  <!--                  <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced-->
  <!--                    eleifend dales felise morbi nec tempor isvel ultricies lideula. </p>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <a href="blog.html" class="button">-->
  <!--      <span>GO TO BLOG <i class="fad fa-long-arrow-right"></i></span>-->
  <!--    </a>-->
  <!--  </div>-->
  <!--</section>-->
  <!--related blog section end-->

  <!--newsletter section start-->
  <!--<section class="newsletter">-->
  <!--  <div class="newsletter__wrapper">-->
  <!--    <div class="container">-->
  <!--      <div class="row align-items-lg-center">-->
  <!--        <div class="col-lg-6">-->
  <!--          <div class="newsletter__info">-->
  <!--            <h2 class="section-heading color-black">Subscribe to our newsletter.</h2>-->
  <!--            <form class="newsletter__info--field">-->
  <!--              <input type="text" placeholder="Email address" class="input-field">-->
  <!--              <button class="button"><span>SUBSCRIBE <i class="fad fa-long-arrow-right"></i></span></button>-->
  <!--            </form>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-lg-6">-->
  <!--          <div class="newsletter__img">-->
  <!--            <img src="assets/images/newsletter-img.png" alt="image">-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!--newsletter section end-->

  <!--footer start-->
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer__info">
              <div class="footer__info--logo">
                <img src="assets/images/website logo.PNG" alt="image">
              </div>
              <div class="footer__info--content">
                <p class="paragraph dark">LeadPluss is a product of scalable solutions. An effective pipeline management system that allows the sales team to focus more on leads and brings more positive result.</p>
                <div class="social">
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/lead.pluss.92"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/leadpluss"><i class="fab fa-twitter"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/company/leadpluss1/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="youtube"><a href="https://www.youtube.com/watch?v=VWT85hpM7Qk"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="footer__content-wrapper">
              <div class="footer__list">
                <ul>
                  <li>Explore</li>
                  <!--<li><a href="#">About</a></li>-->
                  <!--<li><a href="#">Our Team</a></li>-->
                  <!--<li><a href="#">Features</a></li>-->
                  <!--<li><a href="#">Blog</a></li>-->
                  <!--<li><a href="#">How It Works</a></li>-->
                  
                 
                  
            <li><a href="#feature">Features</a></li>
            <li><a href="#feedback">Feedbacks</a></li>
            <!--<li><a href="#faq">FAQs</a></li>-->
            <li><a href="#Process">Process</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#preview">Preview</a></li>
                </ul>
              </div>
              <div class="footer__list">
                <ul>
                  <li>Help</li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="https://leadpluss.com/privacy-policy/">Privacy Policy</a></li>
                  <li><a href="#">Support</a></li>
                  <!--<li><a href="#">Terms of Service</a></li>-->
                  <!--<li><a href="#">Contact</a></li>-->
                </ul>
              </div>
              <div class="download-buttons">
                <h5>Download</h5>
                <a href="https://scalable.leadpluss.com/manage/register" class="google-play" data-toggle="modal" data-target="#myModal">
                  <i class="fa fa-phone"></i>
                  <div class="button-content">
                    <h6>Try Now <span>For Free</span></h6>
                  </div>
                </a>
                <a href="#" class="apple-store" data-toggle="modal" data-target="#myModal">
                  <i class="fas fa-envelope"></i>
                  <div class="button-content">
                    <h6>Get More<span> Details</span></h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="footer__copy">
            <h6>&copy; LeadPluss. All Rights Reserved. Designed & Developed By <a href="https://webocto.com/">Webocto</a> </h6>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--footer end-->

  <script src="code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script>
    $(window).on('load', function () {
      $("body").addClass("loaded");
    });
  </script>
  <script src="unpkg.com/swiper%406.4.5/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>



</html>



<div class="container">
  <!--<h2>Modal Example</h2>-->
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog"  style=" background: url(../images/counter-bg.jpg) no-repeat top;
    background-size: cover;">
     
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!--<h4 class="modal-title text-center">Grab the oppourtunity now</h4>-->
        </div>
        <div class="modal-body">
            
            
            
            
         <!--<img src="images/counter-bg.jpg" width="100%">   -->
            
        
            
            
         
         
         <form action="thank.php" method="post">
             
             <div class="form-group">
                      <br>
                 <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                 
                 
                 </div>
                 
                  <div class="form-group">
                 <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                 
                 
                 </div>
                 
                  <div class="form-group">
                 <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" minlength="10" maxlength="15">
                 
                 
                 </div>
                 
                 
                 
                 
                 
                 
                 
  <!--                <div class="form-group">-->
                 
                 
                 
  <!--                <select name="sector" id="cars" class="form-control">-->
  <!--                    <option value="Select Sector">Select Sector</option>-->
  <!--  <option value="Residential">Residential</option>-->
  <!--  <option value="Commercial">Commercial</option>-->
  <!--  <option value="Restaurant">Restaurant</option>-->
  <!--  <option value="Retail">Retail</option>-->
  <!--   <option value="Corporate">Corporate</option>-->
  <!--   <option value="Hospital">Hospital</option>-->
  <!--</select>-->
  <!--               </div>-->
                 
                  <div class="form-group">
                 <input type="text" name="message" class="form-control" placeholder="Enter Your Message">
                 
                 
                 </div>
             
             
               <!--<button type="button" name="submit" class="btn btn-info">Submit</button>-->
               <input type="submit" name="submit" style="background-color:#eba235;color:white;padding:7px;border-radius:5px">
             
             </form>
         
         
        </div>
        <!--<div class="modal-footer">-->
        <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <!--</div>-->
      </div>
      
    </div>
  </div>
  
</div>




<a href="https://api.whatsapp.com/send?phone=91 8669664199 &text=I have seen the product details on your website and I’m very interested in buying one. I would appreciate if you can send any information that could help me in my selection process. Please elaborate on the various options along with the different prices, discounts." class="float" target="_blank">

                   <i class="fab fa-whatsapp my-float"></i>
                    </a>



<style>
@media only screen and (min-width: 600px) {
.float {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 134px;
    background-color: #eba235;
    color: white;
    border-radius: 50px;
    text-align: center;
    font-size: 28px;
    /* box-shadow: 2px 2px 3px #999; */
    z-index: 10000;
    margin-left: 96%;
}
.my-float{
    margin-top:12px;
}
.icofont-email:before {
    content: "\ef12";
    color: white;
}
.hero .paragraph {
    font-size: 18px;
    line-height: 30px;
    color: #474b4c;
    margin: 3.6rem 0 3.5rem 0;
}
.growth__box .content h3 {
    font-size: 18px;
    font-weight: 600;
    width: 80%;
}
}
</style>
<!--<div class="phone-call"><a href="mailto:ask@leadpluss.com"><img src="assets/images/envolope.png" style="padding-top: 0px" width="50" alt="Email Us" title="Email"></a></div>-->
<!--<style>-->
<!--.phone-call {-->
<!--    width: 50px;-->
<!--    height: 50px;-->
<!--    right: 3px;-->
<!--    bottom: 48px;-->
<!--    background: #eba235;-->
    
<!--    position: fixed;-->
<!--    text-align: center;-->
<!--    color: #ffffff;-->
<!--    cursor: pointer;-->
<!--    border-radius: 50%;-->
<!--    z-index: 99;-->
<!--    display: inline-block;-->
<!--    line-height: 65px;-->
<!--}-->




<!--@media only screen and (min-width: 600px){-->

<!--.phone-call {-->
<!--    width: 50px;-->
<!--    height: 50px;-->
<!--    right: 7px;-->
<!--    bottom: 77px;-->
<!--    background: #eba235;-->
    
<!--    position: fixed;-->
<!--    text-align: center;-->
<!--    color: #ffffff;-->
<!--    cursor: pointer;-->
<!--    border-radius: 50%;-->
<!--    z-index: 99;-->
<!--    display: inline-block;-->
<!--    line-height: 65px;-->
<!--}-->
<!--}-->
<!--/*.phone-call:before {-->
<!--    position: absolute;-->
<!--    content: " ";-->
<!--    z-index: -1;-->
<!--    top: -15px;-->
<!--    left: -15px;-->
<!--    background-color: rgba(156, 67, 211, 0.92);-->
<!--    width: 80px;-->
<!--    height: 80px;-->
<!--    border-radius: 100%;-->
<!--    animation-fill-mode: both;-->
<!--    -webkit-animation-fill-mode: both;-->
<!--    opacity: 0.6;-->
<!--    -webkit-animation: pulse 1s ease-out;-->
<!--    animation: pulse 1.8s ease-out;-->
<!--    -webkit-animation-iteration-count: infinite;-->
<!--    animation-iteration-count: infinite;-->
<!--}*/-->


<!--img {-->
<!--    max-width: 100%;-->
<!--    height: auto;-->
<!--    border: 0;-->
<!--    vertical-align: top;-->
<!--    margin-top: 3px;-->
<!--}-->
<!--</style>-->


<style>
    @media (max-width: 991.98px){
.header__nav {
   
    height: 130vh;
    width: 100%;
    position: absolute;
    top: -5rem;
  
    overflow: hidden !important;
   
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 100%);
    
    transition: all .25s ease;
    padding-top: 15%;
}
@media (max-width: 991.98px)
{
.header__nav li:hover a, .header__nav li:hover i {
    color: #6fc067;
}
</style>

<style>

@media (max-width: 991.98px){
.hero .main-heading {
    font-size: 5.5rem;
    text-align: center;
    margin-top: 12rem;
}
.hero .main-heading {
    font-size: 50px;
    font-weight: 600;
    color: #000;
    letter-spacing: 0px;
    width: 100%;
}
}
</style>
<style>

@media (max-width: 991.98px){
.hero .main-heading {
    font-size: 28px;
    text-align: center;
    margin-top: 12rem;
}}


</style>
<style>
.hero .main-heading {
    font-size: 50px;
    font-weight: 600;
    color: #000;
    letter-spacing: -0.4rem;
    width: 100%;
}
.hero .hero-img::before {
    content: "";
    display: block;
    position: absolute;
    width: 75.3rem;
    height: 75.3rem;
    border-radius: 50%;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    background: #9341d4;
    background: linear-gradient(45deg, #3a8da8 0%, #6fc067 50%, #3a8da8 100%);
    background-size: 200% 200%;
    background-position: left bottom;
    
    

  </style>
  <style>
      @media (max-width: 575.98px)
{
.hero .hero-img::before {
    -webkit-transform: scale(1) translate(-50%, 0) !important;
    transform: scale(1) translate(-50%, 0) !important;
    left: 50% !important;
    top: 10% !important;
    width: 40rem;
    height: 40rem;
}
@media (max-width: 575.98px)
{
.hero .hero-img img {
    width:90% !important;
    height: 50% !important;
    /*-o-object-fit: cover !important;*/
    object-fit: cover !important;
}
/*@media (max-width: 575.98px)*/
/*{*/
/*.hero .main-heading {*/
/*    font-size: 5rem;*/
/*    margin-top: 111px;*/
/*}*/
@media (max-width: 600px)
{
.hero .main-heading {
    font-size: 28px;
    text-align: center;
    margin-top: 27rem;
}
@media (min-width: 600px)
{
.hero .main-heading {
    font-size: 28px;
    text-align: center;
    margin-top: 12rem;
}
  </style>
  <style>
      @media (max-width: 767.98px){
.hero .main-heading {
    font-size: 5rem;
    margin-top: 140px;
}
  </style>
<style>
@media (max-width: 767.98px){
.hero .paragraph {
    font-size: 14px;
    line-height: 2.5rem;
    padding: 10px;
}}
@media (max-width: 991.98px){
.hero .paragraph {
    font-size: 16px;
    line-height: 2.6rem;
    text-align: left;
}
.download-buttons a .button-content span {
    display: block;
    font-size: 14px;
    color: white;
    margin-top: .2rem;
    letter-spacing: initial;
}

.section-heading {
    font-weight: 600;
    font-size: 24px;
    width: 85%;
    line-height: -4rem;
}
.questions__wrapper {
    background-color: #fef2f6;
    padding: 50px 0;
    width: 85%;
    margin: 0 auto;
    border-radius: 3rem;
}


.questions #accordion {
    padding: 0 2rem;
    margin-top: 125px;
}

.questions .card .card-body {
    background-color: white;
    border-radius: 2rem;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 20px 10px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 1rem;
}
}
</style>


<style>
@media only screen and (max-width: 600px) {
.float {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 100px;
    background-color: #eba235;
    color: white;
    border-radius: 50px;
    text-align: center;
    font-size: 28px;
    /* box-shadow: 2px 2px 3px #999; */
    z-index: 10000;
    margin-left: 85%;
}
.my-float{
    margin-top:12px;
}
.icofont-email:before {
    content: "\ef12";
    color: white;
}
}
</style>



<style>
@media only screen and (min-width: 600px) {
 .hid
 {
     display:none;
 }
   
}
</style>


<style>
@media only screen and (max-width: 600px) {
 .hid1
 {
     display:none;
 }
   
}
</style>

