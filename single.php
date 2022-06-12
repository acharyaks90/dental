<?php
    
   include('session.php');
    $user=$_SESSION['login_user'];
   
    include_once 'confi.php';
	  $video_id=$_GET['video_id'];
?>

<!DOCTYPE HTML>
<html>
<head>
<title>My Play a Entertainment Category Flat Bootstrap Responsive Website Template | single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
<!-- //fonts -->
</head>
  <body>
<?php include ('menu/menu3.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
				
				<?php
                      $res=mysqli_query($db,"select * from videos where video_id='$video_id'");
					while($row=mysqli_fetch_array($res))
					{
            ?>
					<div class="song">
					
						<div class="song-info">
							<h3><?php echo $row['video_title']; ?></h3>	
					</div>
						<div class="video-grid">
							<video id="video1" width="510"  controls play>
               <source src="teacher/upload/<?php echo $row['location']; ?>" type="video/mp4"></video>
						</div>
						<div class="slid-bottom-grid">
														&nbsp
													</div>
						
						<div class="slid-bottom-grid slid-bottom-right">
							<p class="views views-info btn btn-success"  ><a  style="color:white;text-decoration:none;" href="teacher/upload/<?php echo $row['location']; ?>" >&nbsp Download </a></p></p>
													</div>
						
					</div>
					
				
					
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4>Upload on  <?php echo $row['date']; ?></h4><br>
										<h4>Topic : <?php echo $row['topic']; ?></h4>
										<h4>Subject : <?php echo $row['subject']; ?></h4>
										<h4>Upload By : <?php echo $row['upload_by']; ?></h4>
</li>
									<li>
										<div class="load-grids">
											<div class="load-grid">
												<p>Category</p>
											</div>
											<div class="load-grid">
												<a href="movies.html">Entertainment</a>
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								</ul>
							</div>
					</div>
						
					
					</div>
				</div>
				<?php } ?>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						
				<?php 		
						$limit=8;
					$res=mysqli_query($db,"select * from videos LIMIT $limit ");
					while($row=mysqli_fetch_array($res))
					{	
						
					?>	
						
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<video id="video1" width="120" height="70"  controls play>
													 <source src="teacher/upload/<?php echo $row['location']; ?>" type="video/mp4"></video>
						    </div>
							</div>
							<div class="col-md-8 single-right-grid-right" style="padding-left:13%;">
								<a href="single.php?video_id=<?php echo $row['video_id']; ?>"><?php echo $row['video_title']; ?> </a>
								<p class="author"><a href="#" class="author"><?php echo $row['upload_by']; ?></a></p>
								<p class="views">2,114,200 views</p>
							</div>
							
						<div class="clearfix"> </div>
					<?php  } ?>
					
						</div>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->

			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>