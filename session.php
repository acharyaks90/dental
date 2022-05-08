<?php
   include('confi.php');
   session_start();
     
   if(isset($_SESSION['login_employee'])){
      $employee_check = $_SESSION['login_employee'];
      $ses_sql = mysqli_query($db,"select employee_id, first_name, last_name, email from employee where email = '$employee_check'");
      $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      $login_session = $row['first_name']." ".$row['last_name'];
      $_SESSION['id']=$row['employee_id'];
      $_SESSION['email']=$row['email'];
    
   }else if(isset($_SESSION['clinic_lab_login'])){
      $claint_lab_check = $_SESSION['clinic_lab_login'];
      $ses_sql = mysqli_query($db,"select id, first_name, last_name, email from register_clinic where email = ' $claint_lab_check'");
      $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      $login_session = $row['first_name']." ".$row['last_name'];
      $_SESSION['id']=$row['id'];
      $_SESSION['email']=$row['email'];

   }else if(!isset($_SESSION['login_employee'])&& !isset($_SESSION['clinic_lab_login'])){
      header("location:index.php");
   }


?>