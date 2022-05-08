<?php
    
   include('session.php');
    $user=$_SESSION['login_user'];
   
    
?>

<?php
include_once 'confi.php';
?>


<html>
<head>
 <title>E-Tuition</title>


   
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   
   
   
   <!---------- End ------->
   
   <style>
   
   
   </style>

   
</head>

<body >


<?php include ('menu/menu3.php'); ?>


<div class="container ">
  <div class="row">
    
	
	 
	 
        <div class="col-md-12">
			<div class="main-grids">
			<div class="top-grids">
					<div class="recommended-info">
						<h3>Recent Notes</h3>
					</div>
			
			<?php 
	
	                 $limit = 3; 
					
	                 $sql="select * from tbl_uploads where upload_by='$user' order by id  DESC LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
			
				
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						
						<div class="resent-grid-info recommended-grid-info">
						<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
					</div>
				
					
					
				
				 <?php } ?>  
				 <div class="clearfix"> </div>
				</div>
				
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<a href="viewsinglesubjectdelete.php?subject=<?php echo "Operating System"; ?>"><h3>Operating System (View All)</h3></a>
						</div>
						
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
	                 $sql="select * from tbl_uploads  where subject='Operating System' AND upload_by='$user' order by id  desc LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											
											<div class="resent-grid-info recommended-grid-info">
											<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									
									
						 <?php } ?> 
						 	<div class="clearfix"> </div>
									</div>
									
								
						</div>
					</div>
					
					
					
					<div class="recommended-grids">
						<div class="recommended-info">
						<a href="viewsinglesubjectdelete.php?subject=<?php echo "Data Structure"; ?>"><h3>Data Structure (View All)</h3></a>
							
						</div>
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
                                  
	                 $sql="select * from tbl_uploads  where subject='Data Structure' AND upload_by='$user' order by id  desc LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											
											<div class="resent-grid-info recommended-grid-info">
											<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									
									
						 <?php } ?> 
						 	<div class="clearfix"> </div>
									</div>
									
								
						</div>
					</div>
					
					<div class="recommended-grids">
						<div class="recommended-info">
						<a href="viewsinglesubjectdelete.php?subject=<?php echo "Digital Logic Design"; ?>"><h3>Digital Logic Design (View All)</h3></a>
							
						</div>
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
                                   
	                 $sql="select * from tbl_uploads  where subject='Digital Logic Design' AND upload_by='$user' order by id  desc LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											
											<div class="resent-grid-info recommended-grid-info">
											<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									
									
						 <?php } ?> 
						 	<div class="clearfix"> </div>
									</div>
									
								
						</div>
					</div>

					
										
					<div class="recommended-grids">
						<div class="recommended-info">
						<a href="viewsinglesubjectdelete.php?subject=<?php echo "Theory Of Computation"; ?>"><h3>Theory Of Computation (View All)</h3></a>
						
							
						</div>
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
                                  
	                 $sql="select * from tbl_uploads  where subject='Theory Of Computation' AND upload_by='$user' order by id  desc LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											
											<div class="resent-grid-info recommended-grid-info">
											<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									
									
						 <?php } ?> 
						 	<div class="clearfix"> </div>
									</div>
									
								
						</div>
					</div>

					
					<div class="recommended-grids">
						<div class="recommended-info">
							<a href="viewsinglesubjectdelete.php?subject=<?php echo "Compiler Design"; ?>"><h3>Compiler Design (View All)</h3></a>
					
							
						</div>
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
                               
	                 $sql="select * from tbl_uploads  where subject='Compiler Design' AND upload_by='$user' order by id  desc LIMIT  $limit";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											
											<div class="resent-grid-info recommended-grid-info">
												<h5 style="color:black; font-size:18px;"><?php echo $row['title']; ?></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<p class="title title-info">Topic : <?php echo $row['topic']; ?></p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200  Downloads</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
													&nbsp	<p class="views views-info btn btn-primary"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Update</a></p></p>
														
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info btn btn-danger"  ><a  style="color:white;text-decoration:none;" href="<?php echo $row['id']; ?>" >Delete </a></p></p>			</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									
									
						 <?php } ?> 
						 	<div class="clearfix"> </div>
									</div>
									
								
						</div>
					</div>

					
					
					
					
					
					
					
					
					
				</div>
			</div>
			
			
		</div>
		<div class="clearfix"> </div>
</div>
</div>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>