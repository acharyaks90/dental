<?php

  
  session_start();
 
   if(isset($_SESSION['login_user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
   {
    header("Location:teacherhome.php"); 
   }




 



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-6">
<img src="image/5.png"/>
</div>
<div class="col-md-2">
</div>
</div>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-5">
<form class="form-horizontal" role="form" method = "post" action ="" >
<table class="table">
  <div class="form-group">

    <label for="" class="col-sm-2 control-label">User id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="user id"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password"/>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	
	<input type="submit" value="Sign in" class="btn btn-md btn-success"  /> 
     
	  
	   <?php
 
   include("confi.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT teacher_id FROM staff WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
     
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count !=0) {
         
         $_SESSION['login_user'] = $myusername;
		  $query = mysqli_query($db, "UPDATE staff SET status = '1' WHERE username = '$myusername' ");
         
         header("location: teacherhome.php");
      }else {
        echo  $error = "Your Login Name or Password is invalid";
      }
   }
?>
  
   
               </td>
            </tr>
 </div>
  </div>
        </table>
        </form>
</div>
    <div class="col-md-2">
<img src="image/17.png"/>
</div>
</div>
</div>


</body>
</html>