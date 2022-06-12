<?php
require_once ("db.php");
 include('session.php');
   $user=$_SESSION['login_user'];
	 
	 $video_id=$_POST['video_id'];
	 
	

$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
 
$date = date('Y-m-d H:i:s');

$sql = "INSERT ignore INTO tbl_comment(parent_comment_id,comment,comment_sender_name,date,video_id) VALUES ('" . $commentId . "','" . $comment . "','" . $user . "','" . $date . "','" . $video_id  . "')";

$result = mysqli_query($conn, $sql);

if($result>0)
{
	echo "<p id='info-message' class='alert alert-success'>Comments Added Successfully!</p>
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
	echo "<p id='info-message' class='alert alert-danger'>Try again</p>
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
