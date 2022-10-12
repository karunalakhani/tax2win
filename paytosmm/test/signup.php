
<?php   include 'connect-db.php';   ?>


<?php

 
  
  if (isset($_POST['submit']))
  
  {

$user_name= $_POST['user_name'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$password= $_POST['password'];
// $confirm_password= $_POST['confirm_password'];
  
// echo $q="insert into signup (`user_name`,`first_name`,`last_name`,`email`,`phone`,`password`,`confirm_password`)
// values('$user_name','$first_name','$last_name','$email','$phone','$password','$confirm_password')";
//  echo $query= mysqli_query($conn,$q);


echo $q="insert into signup (`user_name`,`first_name`,`last_name`,`email`,`phone`,`password`) 
values ('$user_name','$first_name','$last_name','$email','$phone','$password')";
// $query= mysqli_query($conn,$q);


if (!mysqli_query($conn, $q)) 
{
    echo "Error: " . mysqli_error($conn);
}

else
{
   header('location:index.php'); 
 }

$results=mysql_query($q);
mysql_close();
}

?>






<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from paytosmm.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:36:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create An Account | Paytosmm.com</title>
  <meta name="keywords" content="smm panel script,smm panel,smm panel instagram,instagram panel,paytosmm">
  <meta name="description" content="">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69744679-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69744679-3');
</script>

      <link rel="stylesheet" type="text/css" href="../cdn.mypanel.link/1335af/aisnc30u0i1depwr.css">
      <link rel="stylesheet" type="text/css" href="../cdn.mypanel.link/1335af/hrqunnb1gynknoel.css">
      <link rel="stylesheet" type="text/css" href="../cdn.mypanel.link/libs/bootstrap-datetimepicker/4.17.47/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="../cdn.mypanel.link/css/font-awesome/css/all.min.css">
  </head>
<body>
  <nav class="navbar navbar-default navbar-static-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
                      <img src="logo.png">
                  </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                      <li class="active" >
              <a href="signup.php" >
                                Sign up
              </a>
            </li>
                      <li>
              <a href="index.php" >
                                Sign in
              </a>
            </li>
                  </ul>
      </div>
    </div>
  </nav>

<!-- Main variables *content* -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="well">
        <form action="" method="post"  enctype="multipart/form-data">
                              <div class="form-group">
            <label for="username" class="control-label">Username</label>
            <input type="text" class="form-control"   name="user_name" required>
          </div>
                      <div class="form-group">
              <label for="firstname" class="control-label">First name</label>
              <input type="text" class="form-control"   name="first_name" required>
            </div>
            <div class="form-group">
              <label for="lastname" class="control-label">Last name</label>
              <input type="text" class="form-control"   name="last_name" required>
            </div>
                    <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control"   name="email">
          </div>
                      <div class="form-group">
              <label for="skype" class="control-label">Skype / Phone</label>
              <input type="text" class="form-control"   name="phone" required>
            </div>
                    <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="text" class="form-control"  name="password" required>
          </div>
          <!--<div class="form-group">-->
          <!--  <label for="confirm" class="control-label">Confirm password</label>-->
          <!--  <input type="text" class="form-control"  name="confirm_password" required>-->
          <!--</div>-->
                      <!--<div class="g-recaptcha form-group" data-sitekey="6LeQyxkUAAAAACZsRNUpGI-5rw7ifdLgP0mUyE4O"></div>-->
                                <div class="form-group">
              <!--<div class="checkbox">-->
              <!--  <label>-->
              <!--    <input type="checkbox" class="terms-accept-checkbox" name="RegistrationForm[termsofservice]"> I have read and agreed with <a href="terms.html" target="_blank">Terms of Service</a>-->
              <!--  </label>-->
              <!--</div>-->
            </div>
          
          <!--<input type="hidden" name="_csrf" value="306cPJWjeDjguGnrjQRKEQ-46iyV2KHluPAS1tdZLhC-fMlT5Y4Va63BLrr8VxNLTdeTRPu957D7g0uu7j8eZw==">-->
          <!--<button type="submit" name="submit" class="btn btn-primary">Sign up</button>-->
          <input type="submit" name="submit">
          <span class="pull-right pull-right-middle">Already have an account? <a href="index.html">Sign in</a></span>
        </form>
      </div>
    </div>
  </div>
</div>






  <script type="text/javascript" src="../cdn.mypanel.link/libs/jquery/1.12.4/jquery.min.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/flpbonhmkq9tsp29.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/a4kdpfesx15uh7ae.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/596z6ya3isgxcipy.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/jjj8cbs4ekmp0ayz.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/8noq4w39fy8suqee.js">
      </script>
  <script type="text/javascript" src="../cdn.mypanel.link/global/mobtyb3jy1karsh4.js">
      </script>
  <script type="text/javascript" src="../www.google.com/recaptcha/apifef7.js?hl=en">
      </script>
  <script type="text/javascript" >
     window.modules.layouts = {"auth":0};   </script>
  <script type="text/javascript" >
     window.modules.signup = [];   </script>

</body>

<!-- Mirrored from paytosmm.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:36:25 GMT -->
</html>