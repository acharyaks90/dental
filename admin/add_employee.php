<?php
    
   include('session.php');
   
   $user=$_SESSION['login_user'];
    
?>
<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
   
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

<script>
$(document).ready(function(){

   $("#username").keyup(function(){

      var uname = $("#username").val().trim();

      if(uname != ''){

         $("#uname_response").show();

         $.ajax({
            url: 'uname_check.php',
            type: 'post',
            data: {uname:uname},
            success: function(response){

                if(response > 0){
                    $("#uname_response").html("<span class='not-exists'>* Username Already in use.</span>");
                }else{
                    $("#uname_response").html("<span class='exists'>OK</span>");
                }

             }
          });
      }else{
         $("#uname_response").hide();
      }

    });

 });

 $(document).ready(function(){

$("#email").keyup(function(){

   var uname = $("#email").val().trim();

   if(uname != ''){

      $("#email_response").show();

      $.ajax({
         url: 'uname_check.php',
         type: 'post',
         data: {email:email},
         success: function(response){

             if(response > 0){
                 $("#email_response").html("<span class='not-exists'>* Username Already in use.</span>");
             }else{
                 $("#email_response").html("<span class='exists'>OK</span>");
             }

          }
       });
   }else{
      $("#email_response").hide();
   }

 });

});


</script>
   
   <style>
   
   .comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;

}

/* Response */
.response{
    padding: 6px;
    display: none;
}

.not-exists{
    color: red;
}

.exists{
    color: green;
}


   
   
   </style>

   
</head>

<body >







<div class="container ">
<div class="row ">

<?php include ('menu/menu3.php'); ?>



<div class="col-md-12" >
<div  class="col-md-4"></div>
<div  class="col-md-2 "><img src="image/teacher.jpg" height="200" width="350" class="img-rounded" ><br><br></div>
<div  class="col-md-6"></div>
</div>





<div class="col-md-12" >

<div  class="col-md-4"></div>
<div class="col-md-4">



<div id="form-design">

<form role="form" action ="" method = "post" >


   
  <div class="form-group">
  <label >First Name</label>
    <input type="text" class="form-control" placeholder="Enter First Name" required  id="first_name" name="first_name">

  </div>
  
  <div class="form-group">
  <label >Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Last Name" required  id="last_name" name="last_name">
	
  </div>
  
  <div class="form-group">
  <label >Mobile Number</label>
    <input type="text" class="form-control" placeholder="Enter Mobile Number" required  id="mobile_number" name="mobile_number">

  </div>

 
  <div class="form-group">
  <label >Email</label>
    <input type="text" class="form-control" placeholder="Enter Email" required  id="email" name="email">
    <div id="email_response" class="response"></div>

  </div>

    <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" placeholder="Enter Username" required  id="username" name="username">
	<div id="uname_response" class="response"></div>
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="password"   name="password" class="form-control"  placeholder="Password" required  id="pass1" >
	</div>
  
   <div class="form-group">
    <label >Confirm Password</label>
	<input type="password" name="confirm_password" id="pass2" class="form-control" required  placeholder="Confirm Password"  onkeyup="checkPass(); return false;"  />
	<div id="error-nwl"></div>
  </div>
  
 
  
   
 
  
  <input type="submit" value="Submit" class="btn btn-md btn-primary" name="b1" id="btnSubmit"  />

<?php  
  if(isset($_POST['b1']))
           {
              require 'confi.php';
			  
            
              $sql = "insert IGNORE into employee(`first_name`, `last_name`, `mobile_number`, `email`, `username`, `password`) 
              VALUES ('".$_POST["first_name"]."','".$_POST['last_name']."','".$POST["mobile_number"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."')";
			 
			 //  $sql="insert IGNORE into staff (username,password)  VALUES ('".$_POST["username"]."','".$_POST["confirm_password"]."')";
			   
			     $row=mysqli_query($db,$sql);
				 if (!$row) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
            if($row>0)
              {
                ?> 
				   <script type="text/javascript">
	               	alert('Sucessfully Added');
		             location.replace("add_employee.php");
		          </script>
		<?php
             }
            else
              {
                  echo "<script> alert('Something is wrong')</script>";
             }
            }
			
  
  
 ?>
</form>
<br><br><br><br><br>

</div>
<!------------------- FORM END ------------->

</div>
<div <div class="col-md-4"></div>
</div>

</div>
</div>

</body>
</html>