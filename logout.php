<?php
    include 'confi.php';
   session_start();
  
   mysqli_query($db, "UPDATE employee_id SET status = '0' WHERE email = '".$_SESSION['email']."' ");
   unset($_SESSION['email']);
   session_destroy();
   header("Location: index.php");
   
?>

