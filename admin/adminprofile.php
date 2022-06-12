<?php
    
   include('session.php');
    $user=$_SESSION['login_user'];
    
    
?>


<!DOCTYPE html>
<html>
<head>
   <title>My Application</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
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
		<div class="col-md-12" style="font-size:18px;">
			
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
                	<table id="order_data" class="table table-bordered " style="margin-left:27%;">
   
            <?php   
			
			 $id=$_GET["id"];
                $res=mysqli_query($db,"select * from admin where admin_id=$id");
				 while($row=mysqli_fetch_array($res))
                {  ?>
					
                		<tr>
						    <td style="width:250px;">User ID</td>
							 <td style="width:250px;"><?php echo $row["admin_id"];  ?></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Username</td>
							 <td style="width:250px;"><?php echo $row["user_name"];  ?></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">First Name</td>
							 <td style="width:250px;"><?php echo $row["first_name"];  ?></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Last Name</td>
							 <td style="width:250px;"><?php echo $row["last_name"];  ?></td>
						
						</tr>
						<tr>
						    <td style="width:250px;">Email ID</td>
							 <td style="width:250px;"><?php echo $row["email_id"];  ?></td>
						
						</tr>
						
						
						<tr>
						    <td style="width:250px;">Mobile No.</td>
							 <td style="width:250px;"><?php echo $row["mobile_no"];  ?></td>
						
						</tr>
						
						
						
						
						<tr>
                            <td></td>
                            <td><button class="btn btn-primary" name="b1" type="submit"><a href="edit_profile.php?admin_id=<?php echo $row["admin_id"];  ?> " style="color:white;text-decoration:none;">Update</a></button></td>
                       </tr>
						
                	</table>
					
					
				<?php }	?>
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
