<?php

  
 session_start();
 
   if(isset($_SESSION['login_user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
   {
    header("Location:adminhome.php"); 
   }





?>


<!DOCTYPE html>
<html>
<head>
   <title>My Application</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
   
<style>

#form-design{
	
	margin-top:40px;
		font-size:16px;
		
}
#f
{
	background-color:#F2D7D5;
	
}


</style>   
   
   
   
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">


<div class="row">
<div class="col-md-1">
</div>
<!-- <div class="col-md-6"> -->
  <br>
  <h1 style="text-align:center; font-size : 50px ; border : 4px Solid green;
  padding : 10px">Welcome To Priyanshi Dent Designs Pvt Ltd</h1>
<!-- <img src="image/dentalcopy.jpg"/> -->
<!-- </div> -->
<div class="col-md-2">
</div>
</div>

<!------ NAVBAR START --------------------->




<!-------NAVBAR END ------------------------>

<!----------- FORM  START----------------->
<br>
<br>
<br>

<div class="col-md-12">
<div  class="col-md-5"></div>
<div  class="col-md-6"><h3>ADMIN LOGIN</h3></div>

<div  class="col-md-5"></div>
</div>

<div class="col-md-12">

<div  class="col-md-4"></div>
<div class="col-md-4">



<div id="form-design">

<form role="form" action ="" method = "post">
   
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required >
  </div>
 
  
  <input type="submit" value="Submit" class="btn btn-md btn-info"  />
  
  
 <?php

   include("confi.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT admin_id FROM admin WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
     
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count !=0) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: adminhome.php");
      }else {
        echo  $error = "Your Login Name or Password is invalid";
      }
   } 
?>
</form>

<div class="col-md-4"></div>
</div>
<!------------------- FORM END ------------->

</div>
</div>
</div>
</div>

</body>
</html>
