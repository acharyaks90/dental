<?php
   include('confi.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select first_name,last_name from admin where user_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['first_name']." ".$row['last_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>