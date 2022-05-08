

<?php
 include('session.php');
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
	
	$s=$_POST['subject'];
	$t=$_POST['topic'];
	$ti=$_POST['title'];
	
	 $user=$_SESSION['login_user'];
	
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT ignore INTO  tbl_uploads(file,type,size,subject,topic,title,upload_by) VALUES('$final_file','$file_type','$new_size','$s','$t','$ti','$user')";
		$row=mysqli_query($db,$sql);
		 
		 if($row>0){
				 echo "<p id='info-message'>Your Message Send Successfully We will Connect Soon</p>
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
								   echo "<p id='info-message'>Your Message Not Send Try again</p>
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
		<script>
		alert('error while uploading file');
        window.location.href='addnotes.php?fail';
        </script>
		<?php
	}
}
?>