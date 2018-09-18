<?php
   require('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select utorid from users where utorid = '$user_check' ");
   
   if (!$ses_sql) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['utorid'];
   

   //important, see the header, which will force to login page if the _SESSION variable is not set. 
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>