
<?php

  
session_start();

 if(isset($_SESSION['login_employee']))   // Checking whether the session is already there or not if 
                            // true then header redirect it to the home page directly 
 {
  header("location:employee_user.php"); 
 }
 if(isset($_SESSION['clinic_lab_login'])){

     header("location:clinic_lab_dashboard.php");
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

<div class="col-md-18"><br>
<div class="col-md-3" ></div>
<div class="col-md-6" id="f">
<form action="" method="post" enctype="multipart/form-data" onload="clearForms()" onunload="clearForms()" >

<table class="table table-bordered">
      <tr >
                  <td colspan="6" style="background-color:#2471A3;color:white;font-size:18px;text-align:center"><b>Login</b></td>
          </tr>
     <br>
      <tr>
  
             <td></td>
             <td> </td> 
        </tr> 
     
      <tr>
  
             <td>Email</td>
             <td> <input type="text" class="form-control" placeholder="Enter The Email" required   name="email"></td>
        </tr>
  
  
  <tr> 
  
              <td>Password</td>
              <td> <input type="password"   name="password" class="form-control"  placeholder="Password" required  ></td>
      </tr>
  
   <tr>
             <td></td>
             <td><input type="submit" value="Login" class="btn btn-md btn-primary" name="b1" id="btnSubmit"  />&nbsp &nbsp <a href="forgetpassword.php"> Forgot Password </a></td>
       
     </tr>

        <tr>
          <td>Don't have an account?</td>
          <td><a href="register_clinic.php">Sign Up</a></td>
           </tr>
  


<?php

 include("confi.php");   
    // $_SESSION['login_employee'] = '';
    // $_SESSION['clinic_lab_login'] ='';
       
  
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form 
  
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
  
  $sql = "SELECT employee_id FROM employee WHERE email = '$email' and password = '$mypassword'";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count !=0) {      
    $_SESSION['login_employee'] = $email;
   
    $query = mysqli_query($db, "UPDATE employee SET status = '1' WHERE email = '$email' ");
     header("location:employee_user.php");
  }elseif($count >1){

    throw new Exception("Multiple entry with same email and password");
  }else{

    $sql1 = "SELECT id FROM register_clinic WHERE email = '$email' and password = '$mypassword'";
    $result1=mysqli_query($db,$sql1);
    $count1 = mysqli_num_rows($result1);
       if($count1 !=0){
       
        $_SESSION['clinic_lab_login'] = $email;

        $query1 = mysqli_query($db, "UPDATE register_clinic SET status = '1' WHERE email = '$email' ");
        
        header("location:clinic_lab_dashboard.php");
         
       }elseif($count >1){

        throw new Exception("Multiple entry with same email and password");
      }else{

        echo "<tr ><td colspan='2'><p id='info-message' class='alert alert-danger' style='background-color:white' > Inavlid Username or Password</p></td></tr>
        <script>
          setTimeout(function(){
        document.getElementById('info-message').style.display = 'none';
            /* or
          var item = document.getElementById('info-message')
            item.parentNode.removeChild(item); 
              */
        }, 3000);
          </script>";
      }

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
