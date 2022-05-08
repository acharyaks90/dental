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
   
   #s
{
	font-size:16px;
	
	
}
#f
{
	background-color:#F2D7D5;
	
}
.glyphicon {
	margin-right: 4px;
	
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
<br>



<div class="container">
<div class="row">
<div class="col-md-12">




<!------ NAVBAR START --------------------->






<!-------NAVBAR END ------------------------>

<div class="col-md-12">
  

  <span id="alert_action"></span>
	<div class="row">
		<div class="col-lg-12" style="font-size:18px;">
			
			<div class="panel  panel-primary" >
                <div class="panel-heading">
                	<div class="row">
                    	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            <h3 class="panel-title">Your Profile</h3>
                        </div>
                        
                    </div>
                </div>
                <div class="panel-body">
				   <div class="col-lg-8" >
                	
            <?php   
			
			 $ID=$_GET["ID"];
                $res=mysqli_query($db,"select * from users where ID=$ID");
				 while($row=mysqli_fetch_array($res))
                { 

                    $a= $row["ID"];
					$b= $row["USERNAME"];
					 $c=$row["FNAME"];
					 $d=$row["LNAME"];
                     $e=$row["EMAILADD"];
					 $f=$row["MOBNO"];
					 

				}	
				?>
				<form action="" method="post" enctype="multipart/form-data" name="form1" >
					<table id="order_data" class="table table-bordered " style="margin-left:27%;">
   
                		<tr>
						    <td style="width:250px;">Users ID</td>
							 <td style="width:250px;"><input type="text" class="form-control" disabled required value="<?php echo $a ?>"/></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Username</td>
							 <td style="width:250px;"><input type="text" class="form-control" disabled required value="<?php echo  $b ?>"/></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">First Name</td>
							 <td style="width:250px;"><input type="text" class="form-control" name="fn"  required value="<?php echo  $c ?>"/></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Last Name</td>
							 <td style="width:250px;"><input type="text" class="form-control"  name="ln" required  value="<?php echo $d  ?>"/></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Email ID</td>
							 <td style="width:250px;"><input type="email" class="form-control" id="username" name="em"  required value="<?php echo $e ?>"/>
							 <div id="uname_response" class="response"></div>		
						
						</tr>
						
						
						<tr>
						    <td style="width:250px;">Mobile No.</td>
							 <td style="width:250px;"><input type="text" class="form-control" name="mn"  required value="<?php echo  $f ?>"/></td>
						
						</tr>
						
						  
						
						
						
						<tr>
                            <td></td>
                            <td><input type="submit" value="Update" class="btn btn-md btn-primary" name="b1" /></td>
                       </tr>
						
                	</table>
					</form>
				
				
				 <?php 

     if(isset($_POST["b1"]))
	 {
		
			$row= mysqli_query($db,"update ignore users set FNAME='$_POST[fn]',LNAME='$_POST[ln]', EMAILADD='$_POST[em]', MOBNO='$_POST[mn]'    where ID=$ID ");
			 
			
		
				  	 if($row>0){
				 echo "<p id='info-message' class='alert alert-success' style='margin-left:30%;'>Your Profile Update Successfully</p>
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
								   echo "<p id='info-message' class='alert alert-danger' style='margin-left:30%;' > Try again</p>
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

	
	






</div>
</div>
</div>

</body>
</html>
