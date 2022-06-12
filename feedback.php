<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
    
?>


<!DOCTYPE html>



<html>
<head>
   <title>My Application</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
  


   
   <style>
       .glyphicon {
	margin-right: 10px;
	
}
  
   
   #s
{
	font-size:16px;
	
}
#f
{
	background-color:#F2D7D5;
	
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

<?php include ('menu/menu3.php'); ?>



<br>
<br>


<div class="container">
<div class="row">
<div class="col-md-12">



<!-------NAVBAR END ------------------------>

<?php 
 

$res = mysqli_query($db, "select FNAME,LNAME,EMAILADD from users where username='$user'");
			  while($row=mysqli_fetch_array($res))
            {
				
			  $name=$row['FNAME']." ".$row['LNAME'];
			  $email = $row['EMAILADD'];

		 }  
		 

?>



<div class="col-md-12">

<div class="imagebg"></div>
<div class="row " style="margin-top: 30px"  >
    <div class="col-md-6 col-md-offset-3 form-container" style="background-color:#d5e1df;border-radius:5px;">
        <h2>Feedback  </h2>
        <p>
            Please provide your feedback below:
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row">
                <div class="col-sm-12 form-group">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="comments">
                        Comments:</label>
                    <textarea class="form-control" type="textarea" required name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
           

                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-warning btn-block" name="b1">Post </button>
                </div>
            </div>

        </form>
		
		<?php
		
		
		  if(isset($_POST['b1']))
		  {
			 
			  $sql="insert ignore into feedback values('','$name','$email','$_POST[experience]','$_POST[comments]')";
			  
			  

			  $row=mysqli_query($db,$sql);
			  
			  	 if($row>0){
				 echo "<p id='info-message' class='alert alert-success' style='background-color:white'>Thank's for your feedback</p>
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
								   echo "<p id='info-message' class='alert alert-danger' style='background-color:white'> Try again</p>
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
		
		?>
		
		
    </div>
</div>


</div>

</div>
</div>
</div>

</body>
</html>
