
<?php
    include 'confi.php';
   session_start();
  
   mysqli_query($db, "UPDATE staff SET status = '0' WHERE USERNAME = '".$_SESSION['login_user']."' ");
   unset($_SESSION['login_user']);
   session_destroy();
   header("Location: index.php");
   
?>
