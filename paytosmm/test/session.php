  <?php 
   if(!empty($_SESSION['admin_user']))
   {
   
   }
   elseif($_SESSION['admin_user'] == "admin")
   {
   header("location:new-order.php");
   }
   else
   {
    header("location:index.php");
   }
      
 ?>