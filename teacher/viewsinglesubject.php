<?php
    
   include('session.php');
    $user=$_SESSION['login_user'];
   
    include_once 'confi.php';
	 $subject=$_GET['subject'];
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
    
	
	 
	 
        <div class="col-md-12" >
			<div class="main-grids">
			<div class="top-grids">
					
					<div class="recommended">
				<div class="recommended-grids">
						<div class="recommended-info" >
							<h3><?php echo $subject; ?></h3>
						</div>
						<div  id="top" class="callbacks_container">
							
									<div class="animated-grids">
						<?php 
	
	                
					$limit = 4;  
                                  
	                 $sql="select * from videos where upload_by='$user' AND subject='$subject'  order by video_id  desc ";
                     $rs=mysqli_query($db,$sql); 
                     while($row=mysqli_fetch_array($rs))	
                     {
	
	
	?>
		
						
						
										
									
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="single.php?video_id=<?php echo $row['video_id']; ?>"> <video id="video1" width="270" height="205" controls play>
               <source src="upload/<?php echo $row['location']; ?>" type="video/mp4"></video>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="single.php?video_id=<?php echo $row['video_id']; ?>" class="title"><?php echo $row['video_title']; ?></a></h5>
												<p class="title title-info">Subject : <?php echo $row['subject']; ?> </p>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
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
		<div class="clearfix"></div>
</div>
</div>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>