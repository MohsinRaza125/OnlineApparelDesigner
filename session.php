<?php
   include('config.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select name from login where name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name']; 
   $_SESSION['user'] = 1;
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>