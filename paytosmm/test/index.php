

<?php      
//     include('connect-db.php');  
//  echo   $username = $_POST['user_name'];  
// echo    $password = $_POST['password'];  
      
//         //to prevent from mysqli injection  
//         $username = stripcslashes($user_name);  
//         $password = stripcslashes($password);  
//         $username = mysqli_real_escape_string($con, $username);  
//         $password = mysqli_real_escape_string($con, $password);  
      
//       echo $sql = "select *from signup where user_name = '$username' and password = '$password'";  
//         $result = mysqli_query($con, $sql);  
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
//      echo   $count = mysqli_num_rows($result);  
          
//         if($count == 1){  
//             echo "<h1><center> Login successful </center></h1>";  
//         }  
//         else{  
//             echo "<h1> Login failed. Invalid username or password.</h1>";  
//         } 
?>


 <?php 
  session_start();   
  include 'connect-db.php'; 

   if(isset($_POST['submit'])){
    
      $username=$_POST['user_name'];
      $password=$_POST['password'];
          // $password1 = hash('sha512', $password);
    echo  $q_login="select * from signup where email='$username' AND password='$password'";
      $res_login=$conn->query($q_login);
     $row_login=$res_login->fetch_assoc();
      $useremail=$row_login['email'];
      
       
      if($username==$useremail)
      {
        $_SESSION['admin_user']=$username;
      header('location:new-order.php');  
      }
        echo "<html><h3 align='center'><p style='color:red;'>Invalid username or password!</p></h3></html>";
          
      
    }
   
    
    ?>














<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from paytosmm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:36:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in</title>
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
                      <li>
              <a href="signup.php" >
                                Sign up
              </a>
            </li>
                      <li class="active" >
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
        <form  method="post" action="">
          
          
          <div class="form-group">
            <label for="username" class="control-label">Email ID:</label>
            <input type="text" class="form-control" id="username" name="user_name" placeholder="Enter Email id please">
          </div>
          <div class="form-group form-group__password">
            <label for="password" class="control-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
                              <a href="resetpassword.php" class="forgot-password">Forgot password?</a>
                        </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"  name="LoginForm[remember]" value="1" id="remember">Remember me
            </label>
          </div>

          
          <input type="hidden" name="_csrf" value="qdt41HFdr412u9EnaD2VHVW7qmansbp26zfzkgtbXR3I6S27AXDC3jvClnYZbsxHF9TTDsnU_COoRKrqMj1tag==">
          <button name="submit" type="submit" class="btn btn-primary">Sign in</button>

                      <span class="pull-right pull-right-middle">Do not have an account? <a href="signup.php">Sign up</a></span>
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
  <script type="text/javascript" >
     window.modules.layouts = {"auth":0};   </script>
  <script type="text/javascript" >
     window.modules.signin = [];   </script>

</body>

<!-- Mirrored from paytosmm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:36:23 GMT -->
</html>