<?php
    
   include('session.php');
   
   $user=$_SESSION['login_user'];
    
?>
<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
  
   
   <style>
   

   
   
   </style>

   
</head>

<body >


<?php include ('menu/menu3.php'); ?>




<div class="container ">
<div class="row ">
<div class="col-md-12">

<br><br>
<span id="alert_action"></span>
	<div class="row">
	
		<div class="col-lg-12">
			
			<div class="panel  panel-primary">
                <div class="panel-heading">
                	<div class="row">
                    	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            <h3 class="panel-title">Register Claint </h3>
                        </div>
                        
                    </div>
                </div>
                <div class="panel-body">
                	<table id="order_data" class="table table-bordered table-striped">
					
					
					<thead>
							<tr>
							    <th>Lab Name</th>
								<th>Email</th>
								<th>View</th>
								
								<th>Delete</th>
								
								
								
							</tr>
                    </thead>
									<?php
									
									  $limit = 8;  
                                     if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
								   $start_from = ($page-1) * $limit;  
			  
								
                                 $sql="select * from register_clinic order by ASC LIMIT $start_from, $limit ";

                                     $res=mysqli_query($db,"SELECT * FROM register_clinic");
									 while($row=mysqli_fetch_array($res))
									 {
									

                                     ?>									
									 
										 
										  <tr>
								               <td><?php echo $row['labname']; ?></td>
											   <td><?php echo $row['email']; ?></td>
											   <td> <a href="userprofile.php?id=<?php echo $row['id'];?>" class="btn btn-primary">View</a></td>
											  
											   <td> <a href="deleteuser.php?ID=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
											  
										 
										  
										  
								          </tr>
										 
										
									  <?php } ?>
									
										  
										  
										  
										   
										
								    </table>
									
									
									<?php  
$sql = "SELECT COUNT(id) FROM register_clinic";  
$rs_result = mysqli_query($db,$sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<center><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='viewuser.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></center>"; 
?>		
	
									
			              </div>
            </div>
        </div>
    </div>
			



</div>

</div>
</div>

</body>
</html>