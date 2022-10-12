// <?php
//   $dbhost='localhost';
//   $dbuser='anitamoto_admin';
//   $dbpass='UX_ydQW5n@B';
   
//       //$dbuser='root';
//   // $dbpass='';
   

//   $conn=mysqli_connect($dbhost,$dbuser,$dbpass,"anitamoto_db");
//   if($conn){
//       echo "Yes";
//   }else{
//       echo "No";
//   }
   
    
//      ?>


 <?php
        //  $dbhost = 'localhost';
        //  $dbuser = 'anitamoto_admin';
        //  $dbpass = 'av3X#P!eG';
        //  $db='anitamoto_db';
        //  $conn = mysql_connect($dbhost, $dbuser, $dbpass,$db);
         
        //  if(! $conn ) {
        //     die('Could not connect: ' . mysql_error());
        //  }
        //  echo 'Connected successfully';
        //  mysql_close($conn);
      ?>
      
      
      
      
       <?php
         $dbhost = 'localhost';
         $dbuser = 'anitamoto_admin';
         $dbpass = 'av3X#P!eG';
         $db='anitamoto_db';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         // mysql_close($conn);
      ?>