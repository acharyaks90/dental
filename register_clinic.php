<html>
<head>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
			<script type="text/javascript" src="jquery/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery.validate.min.js"></script>
			
			
			

   
   
			
			
<script>
  $(document).ready(function() { 
    // validating signup form on keyup and submit
    $("#signupForm").validate({
      rules: {
        FNAME: "required",
        LNAME: "required",
        USERNAME: {
          required: true,
          minlength: 4
        },
        PASS: {
          required: true,
          minlength: 8
        },
		MOB: {
          required: true,
          minlength: 10,
		  maxlength:10,
		  number:/^[0-9]+$/
        },
        CPASS: {
          required: true,
          minlength: 8,
          equalTo: "#PASS"
        },
        EMAILADD: {
          required: true,
          email: true
        }
        
      },
      /**set the validating message */
      messages: {
        FNAME: "Please enter your firstname",
        LNAME: "Please enter your lastname",
        USERNAME: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 4 characters"
        },
		MOB: {
          required: "Please provide a mobile number",
          minlength: "Please enter a valid  mobile number",
		  maxlength: "Please enter a valid  mobile number",
		  number:"Please enter a valid  mobile number"
        },
        PASS: {
          required: "Please provide a password",
          minlength: "Your password must be at least 8 characters long"
        },
        CPASS: {
          required: "Please provide a password",
          minlength: "Your password must be at least 8 characters long",
          equalTo: "Password does not match."
        },
        EMAILADD: "Please enter a valid email address",
       
      }
    });
	
   $("#USERNAME").keyup(function(){

      var uname = $("#USERNAME").val().trim();

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
</script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<style type="text/css">
  form label.error, label.error { 
  color: red;
  font-style: italic
}
div.error { 
  display: none; 
}
input { 
  border: 1px solid black; 
}
 
input:focus {
 border: 1px dotted black; 
}
input.error {
 border: 1px dotted red; 
} 
  #signupForm label.error {
    margin-left: 10px;
    width: auto;
    display: inline;
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

<!-- <div class="container"> -->
<div class="row">

<br>
<br>
<form id="signupForm" class="form-group"  action="" method="POST">
           
<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Clinic Registration From</h2>
                      
                    <br>
                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lab/Clinic Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Client Name" id="CLINIC" name="CLINIC" value="" required="required"/>
                            </div>
                          </div>
                        </div>
                      </div>
                                               

                        
                  
                      <p class="card-description"><h3>Contact Person</h3></p>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="FNAME" name="FNAME" value="" required="required" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="LNAME" name="LNAME" value="" required="required" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Add Phone</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="MOB" name="MOB" value="" placeholder="Add Your Phone Number" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" value="" required="required"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control"  id="COUNTRY" name="COUNTRY">
                              <?php include_once 'confi.php';
                                  $result = mysqli_query($db,"Select id,name from country");
                                     while ($row = mysqli_fetch_array($result)) {
                                      ?>

                                     <option  value="<?php echo $row['id']; ?>" > <?php  echo $row['name']; ?> </option> 
                                     <?php }  ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                        <input type="text" id="STATE" name="STATE" value="" class="form-control" required = "required" />
                          </div>
                        </div>
                        </div>
                      </div>

                      <p class="card-description"><h4>Select the scanner from the list to create your STL files. *</h4></p>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                          <?php include_once 'confi.php';
                                  $result = mysqli_query($db,"Select * from stlfile");
                                     while ($row = mysqli_fetch_array($result)) {
                                       
                                      ?>
                                            
                                              
                                              <div class="form-check form-check-success">
                                           <label class="col-sm-4">
                                           <input type="checkbox" class="form-check-input" name="stlfile[]" value=" <?php  echo $row['stl_name']; ?>"/> <?php  echo $row['stl_name'];?> </label>
                                           </div>
                                           <?php if($row['stl_id'] ==3)
                                           break; ?>
                                            
                                          
                                    
                                     <?php }  ?>
                          </div>
                        </div>
                            <div class="col-md-6">
                            <div class="form-group row"> 
                                
                            <?php include_once 'confi.php';
                                  $result = mysqli_query($db,"Select * from stlfile");
                                
                                     while ($row = mysqli_fetch_array($result)) {
                                         
                                          
                                      ?>
                                            <?php if($row['stl_id']>3 && $row['stl_id']<6){  ?>
                                              
                                              <div class="form-check form-check-success">
                                           <label class="col-sm-4">
                                           <input type="checkbox" class="form-check-input" name="stlfile[]" value=" <?php  echo $row['stl_name']; ?>"/> <?php  echo $row['stl_name'];?> </label>
                                           </div>
                                           <?php } ?>
                                            
                                          
                                    
                                     <?php }  ?>


                            <!-- <div class="form-check form-check-danger">
                              <label class="col-sm-4">
                                <input type="checkbox" class="form-check-input"/> Dental Wings </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="col-sm-4">
                                <input type="checkbox" class="form-check-input"/> Others </label>
                            </div> -->
                           </div>
                        </div>
                        </div>
                        <br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" id="EMAILADD" name="EMAILADD"  value="" class="form-control" required="required" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> <button class="btn  btn-primary btn-sm" name="" type=""  ><span class="fa fa-save fw-fa"></span>Send Code To Email</button></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Enter your code recieved in email" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="PASS" name="PASS" required="required" value=""/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control" id="CPASS" name="CPASS" required="required" />
                            </div>
                          </div>
                        </div>
                      </div>
                         
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><input type="button" value="Login" onclick="window.location.href='login_user.php'" class="btn  btn-primary btn-sm"><span class="fa fa-save fw-fa"></label>
                            <label class="col-sm-3 col-form-label"> <button class="btn  btn-primary btn-sm" name="save" type="submit"  ><span class="fa fa-save fw-fa"></span>Submit</button></label>
                          </div>
                        </div>
                        
                         
                           
                          
                        </div>
                      </div>


                      </div>
                  
                </div>
             

                </div>

   </div>        
 </div>
</form>
			




			<?php

					include_once 'confi.php';
          
		  if(isset($_POST['save']))
		  { 
        $STLFile= $_POST['stlfile'];
        $chkstr = implode(",",$STLFile);
       
        	$sql ="INSERT INTO `register_clinic`(`labname`, `first_name`, `last_name`, `phone`, `address`, `country`, `state`, `stltype`, `email`, `password`)
					VALUES ('".$_POST['CLINIC']."','".$_POST['FNAME']."','".$_POST['LNAME']."','".$_POST['MOB']."','".$_POST['ADDRESS']."','".$_POST['COUNTRY']."',
          '".$_POST['STATE']."','$chkstr','".$_POST['EMAILADD']."','".$_POST['PASS']."')";
					$result = mysqli_query($db,$sql) or die(mysqli_error($db));

       	echo "
			<p id='info-message' class='alert alert-success' >You Have Registered Successfully</p>
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
									else
								{
								   echo "<p id='info-message' class='alert alert-danger' > Try again</p>
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
		  














?>
			
			
			</div>
			<div class="col-md-2"></div>
			</div>
			</div>
			</div>
      
</body>
</html>
     