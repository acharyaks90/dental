
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
   
  

<script type="text/javascript">
 
 function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 5)
    {
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
    else
    {
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit!"
        return;
    }
  
    if(pass1.value == pass2.value)
    {
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "ok!"
    }
	else
    {
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match"
    }
}  

</script>



   
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


<nav  class="navbar navbar-inverse navbar-default navbar-fixed-top  "role="navigation">
  <div class="container-fluid ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar "></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about">About</a></li>
        
          <li><a href="contact.php" >Contact </a></li>


        
    
        
      </ul>
    
 <form class="navbar-form navbar-right" role="search">
       
		<input type="button" value="Register" onclick="window.location.href='register'" class="btn btn-primary ">
    
   </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">




<br><br><br><br><br><br>




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
                <td> <input type="text"   name="email" class="form-control" disabled value="<?php echo $_SESSION['email']; ?>"   placeholder="Email" required  ></td>
        </tr>
			<tr>	<td>
				Password</td>
				<td><input type="password"   name="password" class="form-control"  placeholder="Password" required  id="pass1" >
	
				</div>
				</td>
			</tr>	
				<td>
				Confirm Password</td>
			<td><input type="password" name="confirm_password" id="pass2" class="form-control" required  placeholder="Confirm Password"  onkeyup="checkPass(); return false;"  />
				<div id="error-nwl"></div></td>
				
		
     <tr>
               <td></td>
               <td><button type="submit" name="b1" class="btn btn-md btn-primary">Next</button>&nbsp &nbsp <input type="button" value="Back" onclick="window.location.href='forgetpassword'" class="btn btn-success ">
</td>
			   
       </tr>
		
		
	

     
<?php  
  if(isset($_POST['b1']))
           {
              require 'confi.php';
			  
            
			
			 
			   $sql="update users set PASSWORD='".$_POST["confirm_password"]."' where EMAILADD='".$_SESSION['email']."'";
			   
			     $row=mysqli_query($db,$sql);
				 if (!$row) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
            if($row>0)
              {
                ?> 
				   <script type="text/javascript">
	               	alert('Your Password Changed Successfuly !!');
		             location.replace("login_user.php");
		          </script>
		<?php
             }
            else
              {
                  echo "<script> alert('Something is wrong')</script>";
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
