<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
    
?>
<html>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    
	<style>
	   #s
{
	font-size:16px;
	
	
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

  <div class="col-md-3"></div>
  <div class="col-md-6"> <center><h1 class="bg-primary" style="padding:1%; border-radius: 10px;">Online Chat With Students</h1></center></div>
  <div class="col-md-3"></div>


</div>
</div>
<div class="row">
<div class="col-md-12">

  
   <center><h3 class="bg-danger" style="padding:1%; border-radius: 1px;">Select Student to  Start Chat  &nbsp!!!</h3>
 


</div>
</div>
<br>
<div class="row">
<div class="col-md-12">

  
  
					<table class="table table-bordered table-striped ">
									<thead>
										<tr>
											<th>Student ID</th>
											<th>Student Name</th>
									<!---		<th>Teacher Subject</th>   --->
								
											<th>Student Status</th>
											<th>Send Message</th>
								
								
								
										</tr>
									</thead>
						<?php 			
									
									

                                     $res=mysqli_query($db,"SELECT * FROM combine where t_id='".$_SESSION['id']."'");
									 while($row=mysqli_fetch_array($res))
									 {
									   
                                       
                                     ?>		
										<tr>
								               <td><?php echo $row['u_id']; ?></td>
											   <td><?php echo $row['username']; ?></td>
											 <!--  <td><?php //echo $row['USERNAME']; ?>Operating System</td>  --->
											   <td><?php //echo $row['PASSWORD']; ?>Onlie</td>
											   <td> <a href="tchatroom.php?u_id=<?php  echo $row['u_id']; ?>" class="btn btn-primary">Start Chat</a></td>
											  
									  </tr>
									  
									  <?php } ?>
					</table>
 


</div>
</div>
</div>








<br><br>


			
<br><br>




</body>
</html>