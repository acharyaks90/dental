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
<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
   <style>
   
   .glyphicon {
	margin-right: 4px;
	
}
#f
{
	background-color:#F2D7D5;
	border-radius:3px;
	
}
   
   </style>

   
</head>

<body >


<?php include ('menu/menu3.php'); ?>


<div class="container ">
  <div class="row">
    
	 
	 <div class="col-md-12"  >
  
  
  <br>
  <table>
            <tr >
                    <td><button type="button" class="btn btn-primary" ><a href="showall.php" style="color:white;text-decoration:none;">Back</a></button></td>
            </tr>
			
			</table>
<div class="col-md-3"></div>
<div class="col-md-6" id="f">
<form action="" method="post" enctype="multipart/form-data" name="contact-form">

<table class="table table-bordered">
        <tr >
                    <td colspan="8" style="background-color:#2471A3;color:white;font-size:16px;border-radius:3px;"><b>Upload Videos</b></td>
            </tr>
       <tr>
               <td> Select Subject</td>
               <td><div class="form-group">
						
						<select class="form-control" id="sel1" name="myselectbox">
						<option  >Select Subject</option>
						<option  value="Operating System">Operating System</option>
						<option  value="Data Structure">Data Structure</option>
						<option  value="Digital Logic Design">Digital Logic Design</option>
						<option  value="Theory Of Computation">Theory Of Computation</option>
						<option  value="Compiler Design">Compiler Design</option>
						</select>
					</div></td>
        </tr>
        <tr>
               <td>Topic</td>
               <td><input type="text" required class="form-control" name="topic" placeholder="Enter topic Name"/></td>
        </tr>
        <tr>
               <td>Video Title</td>
               <td><input type="text" required class="form-control" name="title" placeholder="Enter title"/></td>
        </tr>
      <tr>
               <td>Select</td>
               <td> <input type="file" name="file" id="file" /></td>
                  	  
		 </tr>
		
		
     <tr>
               <td></td>
               <td><input type="submit" value="Submit" class="btn btn-md btn-primary" name="btn-upload" />
			 
        </tr>
		</table>
	<?php
	                      
							if(isset($_FILES['file'])){
							
								$name = $_FILES['file']['name'];
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['file']['type'];
								$size = $_FILES['file']['size'] /1024/1024;
								$random_name = rand();
								$tmp = $_FILES['file']['tmp_name'];
								$ti=$_POST['title'];
								$si=$_POST['myselectbox'];
								$to=$_POST['topic'];
								$date = date('d-M-Y');
								if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") 
								&& (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") 
								&& (strtolower($type) != "video/qt") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/wmv"))
								{
									$message= "Video Format Not Supported !";

								}else
								{
									move_uploaded_file($tmp, 'upload/'.$random_name.'.'.$extension);
								    $sql=	"insert ignore into videos (title,location,size,type,video_title,subject,upload_by,topic,date) values ('$name','$random_name.$extension','$size','$type','$ti','$si','$user','$to','$date')";								
									$row=mysqli_query($db,$sql);
									$message="Video Uploaded Successfully !";
								}
								
								?>
								<?php
									echo "<p id='info-message' class='alert alert-success'>".$message."</p>
										<script>
											setTimeout(function(){
										document.getElementById('info-message').style.display = 'none';
												/* or
											var item = document.getElementById('info-message')
												item.parentNode.removeChild(item); 
												
													*/
										}, 3000);
										
											</script>";
								?>
								
								<?php
							}
					
						?>
     

       
    </form> 

 

 
        
</div>
<div class="col-md-3"></div>

  



</div>

</body>
</html>