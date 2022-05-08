<?php
 include('session.php');

if(isset($_POST['submit']))
{
	$name = $_POST['userName'];
	$msg = $_POST['userMsg'];
	$query = "INSERT ignore INTO chatroom SET username= '$name', message='$msg' , date= NOW() , user_id='".$_SESSION['id']."'";
	
	$run = mysqli_query($db, $query);
	// if($run)
	// {
	// 	echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
	// }
}



?>