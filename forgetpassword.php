
<?php

  
  session_start();
 
   if(isset($_SESSION['login_user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
   {
    header("Location:home.php"); 
   }





?>



<!DOCTYPE html>
<html>
<head>
   <title>My Application</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   
  




   
   <style>
   
   #s
{
	font-size:16px;
	
}
#f
{
	background-color:#F2D7D5;
	border-radius:3px;
	
}
    .glyphicon {
	margin-right: 10px;
	
}
.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 2rem;
  background-color: black;
  text-align: center;
  color:white;
  height:50px;
  border-radius:3px;
}

 
   
   </style>
   
</head>
<body>


<div class="container">
<div class="row">
<div class="col-md-18">



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


<br><br><br><br>




<div class="col-md-12"><br>
<div class="col-md-4" ></div>
<div class="col-md-5" id="f">
<form action="" method="post" enctype="multipart/form-data" onload="clearForms()" onunload="clearForms()" >

<table class="table table-bordered" ">
        <tr >
                    <td colspan="6" style="background-color:#2471A3;color:white;font-size:18px;text-align:center"><b>Enter Email to reset passwrod</b></td>
            </tr>
       <br>
        <tr>
		
               <td></td>
               <td> </td> 
		
		
		<tr> 
       
       
		
                <td>Email</td>
                <td> <input type="email"   name="email" class="form-control"  placeholder="Email" required  ></td>
        </tr>
		
     <tr>
               <td></td>
               <td><button type="submit" value="" class="btn btn-md btn-primary">Next</button>&nbsp &nbsp <input type="button" value="Back" onclick="window.location.href='login_user.php'" class="btn btn-success ">
</td>
			   
       </tr>
		
		
	

 <?php
 
   include("confi.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
     
      
      $sql = "SELECT ID FROM register_clinic WHERE email = '$myusername'";
      $result = mysqli_query($db,$sql);
     
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count !=0) {
         
         $_SESSION['email'] = $myusername;
         
         header("location: resetpassword.php");
      }else {
         echo "<tr ><td colspan='2'><p id='info-message' class='alert alert-danger' style='background-color:white' > No Email Find</p></td></tr>
										<script>
											setTimeout(function(){
										document.getElementById('info-message').style.display = 'none';
												/* or
											var item = document.getElementById('info-message')
												item.parentNode.removeChild(item); 
													*/
										}, 5000);
											</script>";
      }
   }
?>		
            
 
      




       </table>
    </form>         
        

</div>
<div class="col-md-5" ></div>


</div>



</div>
</div>
</div>

</body>
</html>
