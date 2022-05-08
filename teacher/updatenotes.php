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
<?php	 
	 
	  $id=$_GET["id"];
                $res=mysqli_query($db,"select * from tbl_uploads where id='$id'");
				 while($row=mysqli_fetch_array($res))
                { 

                    $a= $row["topic"];
					$b= $row["title"];
					 $c=$row["subject"];
					 
					 

				}
				
				
				?>

<div class="container ">
  <div class="row">
    
	 
	 <div class="col-md-12"  >
  
  
  <br>
  <table >
            <tr >
                    <td><button type="button" class="btn btn-primary" ><a href="showall1.php" style="color:white;text-decoration:none;">Back</a></button></td>
            </tr>
			
			</table>
<div class="col-md-3"></div>
<div class="col-md-6" id="f">
<form action="" method="post" enctype="multipart/form-data" name="contact-form">

<table class="table table-bordered">
        <tr >
                    <td colspan="8" style="background-color:#2471A3;color:white;font-size:16px;border-radius:3px;"><b>Upload Notes</b></td>
            </tr>
			
			 
        <tr>
               <td> Select Subject</td>
               <td><div class="form-group">
						
						<select class="form-control" id="sel1" name="myselectbox">
						<option  value="<?php echo $c; ?>"><?php echo $c; ?></option>
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
               <td><input type="text" required class="form-control" name="topic" placeholder="Enter topic Name" value="<?php echo $a; ?>"/></td>
        </tr>
        <tr>
               <td>Notes Title</td>
               <td><input type="text" required class="form-control" name="title" placeholder="Enter title" value="<?php echo $b; ?>"/></td>
        </tr>
      <tr>
               <td>Select</td>
               <td> <input type="file" name="file" /></td>
                  	  
		 </tr>
		
		
     <tr>
               <td></td>
               <td><input type="submit" value="Submit" class="btn btn-md btn-primary" name="btn-upload" />
			 
        </tr>
		
	
     

       </table>
    </form> 

 
   		<?php
 
include_once 'confi.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;                               
			  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	$dst1="uploads/".$final_file;
	
	
	$t=$_POST['topic'];
	$ti=$_POST['title'];
	$s=$_POST['myselectbox'];
	$date = date('d-M-Y');
	
	 $user=$_SESSION['login_user'];
	
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="update ignore   tbl_uploads set file='$final_file', type='$file_type', size='$new_size', subject='$s', topic='$t', title='$ti', upload_by='$user' , date='$date', path='$dst1'  where id='$id'";
		$row=mysqli_query($db,$sql);
		 
		 if($row>0){
				 echo "<p id='info-message' class='alert alert-success'>Your Notes is updated Succesfully </p>
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
								   echo "<p id='info-message' class='alert alert-danger'>Your Message Not Send Try again</p>
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
		
		<?php
	}
	else
	{
		?>
		<p id='info-message' class="alert alert-danger">Your Message Not Send Try again</p>
										<script>
											setTimeout(function(){
										document.getElementById('info-message').style.display = 'none';
												/* or
											var item = document.getElementById('info-message')
												item.parentNode.removeChild(item); 
													*/
										}, 3000);
											</script>
		<?php
	}
}
?>

 
        
</div>
<div class="col-md-3"></div>

  



</div>

  </div>
</div>

</body>
</html>