<?php

include('session.php');

if(isset($_POST['submit']))
{
	
	
  
	$name = $_POST['userName'];
	$msg = $_POST['userMsg'];
	$query = "INSERT ignore INTO chat SET username= '$name', message='$msg' , date = NOW() , s_id='".$_SESSION['id']."' , t_id='".$_SESSION['tid']."' , us_id='".$_SESSION['id']."'  ";
	
	$run = mysqli_query($db, $query);
	
	$query1="INSERT ignore INTO combine SET username= '$name' , u_id='".$_SESSION['id']."' ,t_id='".$_SESSION['tid']."' , name='".$_SESSION['username']."' ";
	
	$run1 = mysqli_query($db, $query1);
	// if($run)
	// {
	// 	echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
	// }
}



?>