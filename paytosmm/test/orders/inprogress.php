<!DOCTYPE html>
<!-- saved from url=(0037)https://paytosmm.com/orders/completed -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Orders</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://onesignal.com/api/v1/sync/d7d2ec9e-f1f7-4574-85bc-29515b432a00/web?callback=__jp0"></script><script type="text/javascript" async="" src="./inprogress_files/analytics.js.download"></script><script async="" src="./inprogress_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69744679-3');
</script>

<script src="./inprogress_files/OneSignalSDK.js.download" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "d7d2ec9e-f1f7-4574-85bc-29515b432a00",
    });
  });
</script>

      <link rel="stylesheet" type="text/css" href="./inprogress_files/aisnc30u0i1depwr.css">
      <link rel="stylesheet" type="text/css" href="./inprogress_files/hrqunnb1gynknoel.css">
      <link rel="stylesheet" type="text/css" href="./inprogress_files/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="./inprogress_files/all.min.css">
  <script src="./inprogress_files/OneSignalPageSDKES6.js.download" async=""></script></head>
<body>
  <!--<nav class="navbar navbar-default navbar-static-top ">-->
  <!--  <div class="container-fluid">-->
  <!--    <div class="navbar-header">-->
  <!--      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
  <!--        <span class="sr-only">Toggle navigation</span>-->
  <!--        <span class="icon-bar"></span>-->
  <!--        <span class="icon-bar"></span>-->
  <!--        <span class="icon-bar"></span>-->
  <!--      </button>-->
  <!--      <a class="navbar-brand" href="https://paytosmm.com/">-->
  <!--                    PaytoSmm-->
  <!--                </a>-->
  <!--    </div>-->
  <!--    <div id="navbar" class="collapse navbar-collapse">-->
  <!--      <ul class="nav navbar-nav navbar-left-block">-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/">-->
  <!--                              New order-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/massorder">-->
  <!--                              Mass order-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li class="active">-->
  <!--            <a href="https://paytosmm.com/orders">-->
  <!--                              Orders-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/addfunds">-->
  <!--                              Add funds-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/services">-->
  <!--                              Services-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/tickets">-->
  <!--                              Tickets-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/api">-->
  <!--                              API-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/affiliates">-->
  <!--                              Affiliates-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                    <li>-->
  <!--            <a href="https://paytosmm.com/child-panels">-->
  <!--                              Child panels-->
  <!--            </a>-->
  <!--          </li>-->
  <!--                </ul>-->
  <!--      <ul class="nav navbar-nav navbar-right navbar-right-block">-->
  <!--                    <li><a href="https://paytosmm.com/orders/completed"><span class="badge">$0.00</span></a></li>-->
  <!--                    <li><a href="https://paytosmm.com/account">Account</a></li>-->
  <!--                    <li><a href="https://paytosmm.com/logout">Logout</a></li>-->
  <!--                </ul>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</nav>-->
  
  
  <?php
  
  include "header.php"
  
  ?>

<!-- Main variables *content* -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
         <ul class="nav nav-pills ">
        <li class="active"><a href="#">All</a></li>
        <li><a href="pending.php">Pending</a></li>
        <li><a href="inprogress.php">In progress</a></li>
        <li><a href="completed.php">Completed</a></li>
        <li><a href="partial.php">Partial</a></li>
        <li><a href="processing.php">Processing</a></li>
        <li><a href="canceled.php">Canceled</a></li>
        <li class="pull-right search">
          <form action="https://paytosmm.com/orders" method="get" id="history-search">
            <div class="input-group">
              <input type="text" name="search" class="form-control" value="" placeholder="Search orders">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
          </form>
        </li>
      </ul>
      <div class="well well-float">
        <table class="table-responsive" style="width:100%" >
          <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th class="width-40">Link</th>
            <th>Charge</th>
            <th class="nowrap">Start count</th>
            <th>Quantity</th>
            <th>Service</th>
            <th>Status</th>
            <th>Remains</th>
                      </tr>
          </thead>
          <tbody>
                    </tbody>
        </table>
      </div>

      
    </div>
  </div>
</div>


<style>

@media (max-width: 991px){
.well-float {
    width: 100%;
    min-width: 100%;
}}


</style>


<style>
table tr td,table tr td{
		text-align: center;
	}
	@media only screen and (max-width: 500px) {

	 table,head,tbody,th,td,tr {
		display: unset;
	}
	thead tr {
	/*display: none;*/
	}
	tr {
	 border: 1px solid #ccc; 
	}
	td {
	border: none;
	border-bottom: 1px solid #eee;
	position: relative;
	padding-left: 50%;
	white-space: normal;
	text-align:left;
	min-height: 30px;
	overflow: hidden;
	word-break:break-all;
	}
	td:before {
	position: absolute;
	top: 6px;
	left: 6px;
	width: 45%;
	padding-right: 10px;
	text-align:left;
	font-weight: bold;
	}
	td:before { content: attr(data-title); }
}

</style>


 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <script type="text/javascript" src="./inprogress_files/jquery.min.js.download">
      </script>
  <script type="text/javascript" src="./inprogress_files/flpbonhmkq9tsp29.js.download">
      </script>
  <script type="text/javascript" src="./inprogress_files/a4kdpfesx15uh7ae.js.download">
      </script>
  <script type="text/javascript" src="./inprogress_files/596z6ya3isgxcipy.js.download">
      </script>
  <script type="text/javascript" src="./inprogress_files/jjj8cbs4ekmp0ayz.js.download">
      </script></body></html>