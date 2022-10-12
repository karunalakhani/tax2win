<!DOCTYPE html>
<!-- saved from url=(0024)https://paytosmm.com/api -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>API</title>
  <meta name="keywords" content="smm panel script,smm panel,smm panel instagram,instagram panel,paytosmm">
  <meta name="description" content="">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./tickets_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69744679-3');
</script>

<script src="./tickets_files/OneSignalSDK.js.download" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "d7d2ec9e-f1f7-4574-85bc-29515b432a00",
    });
  });
</script>

      <link rel="stylesheet" type="text/css" href="./tickets_files/aisnc30u0i1depwr.css">
      <link rel="stylesheet" type="text/css" href="./tickets_files/hrqunnb1gynknoel.css">
      <link rel="stylesheet" type="text/css" href="./tickets_files/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="./tickets_files/all.min.css">
  </head>
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
  <!--                    <li>-->
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
  <!--                    <li class="active">-->
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
  <!--                    <li><a href="https://paytosmm.com/api"><span class="badge">$0.00</span></a></li>-->
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
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <div class="well api well-float">
        <div class="center-big-content-block">
          <h2 class="m-b-md">API</h2>
          <table class="table table-bordered">
            <tbody>
            <tr>
              <td class="width-40">HTTP Method</td>
              <td>POST</td>
            </tr>
            <tr>
              <td>API URL</td>
              <td>https://paytosmm.com/api/v2</td>
            </tr>
                          <tr>
                <td>API Key</td>
                <td>6ee3946302afe19e189d41acb19e5b2e</td>
              </tr>
                        <tr>
              <td>Response format</td>
              <td>JSON</td>
            </tr>
            </tbody>
          </table>

                      <h4 class="m-t-md"><strong>Service list</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>services</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>[
    {
        "service": 1,
        "name": "Followers",
        "type": "Default",
        "category": "First Category",
        "rate": "0.90",
        "min": "50",
        "max": "10000"
    },
    {
        "service": 2,
        "name": "Comments",
        "type": "Custom Comments",
        "category": "Second Category",
        "rate": "8",
        "min": "10",
        "max": "1500"
    }
]
</pre>
                      <h4 class="m-t-md"><strong>Add order</strong></h4>
                                          <p>
                </p><form class="form-inline">
                  <div class="form-group">
                    <select class="form-control input-sm" id="service_type">
                                                  <option value="0">Default</option>
                                                  <option value="10">Package</option>
                                                  <option value="2">Custom Comments</option>
                                                  <option value="4">Mentions Custom List</option>
                                                  <option value="7">Mentions User Followers</option>
                                                  <option value="15">Comment Likes</option>
                                                  <option value="17">Poll</option>
                                                  <option value="100">Subscriptions</option>
                                            </select>
                  </div>
                </form>
                <p></p>
                                            <div id="type_0" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>quantity</td>
                        <td>Needed quantity</td>
                      </tr>
                                          <tr>
                        <td>runs (optional)</td>
                        <td>Runs to deliver</td>
                      </tr>
                                          <tr>
                        <td>interval (optional)</td>
                        <td>Interval in minutes</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_10" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_2" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>comments</td>
                        <td>Comments list separated by \r\n or \n</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_4" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>usernames</td>
                        <td>Usernames list separated by \r\n or \n</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_7" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>quantity</td>
                        <td>Needed quantity</td>
                      </tr>
                                          <tr>
                        <td>username</td>
                        <td>URL to scrape followers from</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_100" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>username</td>
                        <td>Username</td>
                      </tr>
                                          <tr>
                        <td>min</td>
                        <td>Quantity min</td>
                      </tr>
                                          <tr>
                        <td>max</td>
                        <td>Quantity max</td>
                      </tr>
                                          <tr>
                        <td>posts</td>
                        <td>New posts count</td>
                      </tr>
                                          <tr>
                        <td>delay</td>
                        <td>Delay in minutes. Possible values: 0, 5, 10, 15, 30, 60, 90</td>
                      </tr>
                                          <tr>
                        <td>expiry (optional)</td>
                        <td>Expiry date. Format d/m/Y</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_15" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>quantity</td>
                        <td>Needed quantity</td>
                      </tr>
                                          <tr>
                        <td>username</td>
                        <td>Username of the comment owner</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                              <div id="type_17" style="display:none;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="width-40">Parameters</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                                          <tr>
                        <td>key</td>
                        <td>Your API key</td>
                      </tr>
                                          <tr>
                        <td>action</td>
                        <td>add</td>
                      </tr>
                                          <tr>
                        <td>service</td>
                        <td>Service ID</td>
                      </tr>
                                          <tr>
                        <td>link</td>
                        <td>Link to page</td>
                      </tr>
                                          <tr>
                        <td>quantity</td>
                        <td>Needed quantity</td>
                      </tr>
                                          <tr>
                        <td>answer_number</td>
                        <td>Answer number of the poll</td>
                      </tr>
                                        </tbody>
                  </table>
                </div>
                          
            <p><strong>Example response</strong></p>
<pre>{
    "order": 23501
}
</pre>
                      <h4 class="m-t-md"><strong>Order status</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>status</td>
                  </tr>
                                  <tr>
                    <td>order</td>
                    <td>Order ID</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>{
    "charge": "0.27819",
    "start_count": "3572",
    "status": "Partial",
    "remains": "157",
    "currency": "USD"
}
</pre>
                      <h4 class="m-t-md"><strong>Multiple orders status</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>status</td>
                  </tr>
                                  <tr>
                    <td>orders</td>
                    <td>Order IDs separated by comma</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>{
    "1": {
        "charge": "0.27819",
        "start_count": "3572",
        "status": "Partial",
        "remains": "157",
        "currency": "USD"
    },
    "10": {
        "error": "Incorrect order ID"
    },
    "100": {
        "charge": "1.44219",
        "start_count": "234",
        "status": "In progress",
        "remains": "10",
        "currency": "USD"
    }
}
</pre>
                      <h4 class="m-t-md"><strong>Create refill</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>refill</td>
                  </tr>
                                  <tr>
                    <td>order</td>
                    <td>Order ID</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>{
    "refill": "1"
}
</pre>
                      <h4 class="m-t-md"><strong>Get refill status</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>refill_status</td>
                  </tr>
                                  <tr>
                    <td>refill</td>
                    <td>Refill ID</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>{
    "status": "Completed"
}
</pre>
                      <h4 class="m-t-md"><strong>User balance</strong></h4>
                          <table class="table table-bordered">
                <thead>
                <tr>
                  <th class="width-40">Parameters</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td>key</td>
                    <td>Your API key</td>
                  </tr>
                                  <tr>
                    <td>action</td>
                    <td>balance</td>
                  </tr>
                                </tbody>
              </table>
            
            <p><strong>Example response</strong></p>
<pre>{
    "balance": "100.84292",
    "currency": "USD"
}
</pre>
                    <a href="https://paytosmm.com/example.txt" class="btn btn-default m-t" target="_blank">Example of PHP code</a>
        </div>
      </div>
    </div>
  </div>
</div>


 <style>
               @media screen and (max-width: 767px){
             .container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    overflow-y: auto;
}  }
                  
                  </style>
 <script type="text/javascript" src="./services_files/jquery.min.js.download">
      </script>
  <script type="text/javascript" src="./services_files/flpbonhmkq9tsp29.js.download">
      </script>
  <script type="text/javascript" src="./services_files/a4kdpfesx15uh7ae.js.download">
      </script>
  <script type="text/javascript" src="./services_files/596z6ya3isgxcipy.js.download">
      </script>
  <script type="text/javascript" src="./services_files/jjj8cbs4ekmp0ayz.js.download">
      </script>
  <script type="text/javascript" src="./services_files/8noq4w39fy8suqee.js.download">
      </script>
  <script type="text/javascript" src="./services_files/mobtyb3jy1karsh4.js.download">
      </script>
  <script type="text/javascript">
     window.modules.layouts = {"auth":1};   </script>

  </body></html>