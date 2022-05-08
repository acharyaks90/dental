<?php

include('confi.php');

$video_id=$_GET['video_id'];

$res=mysqli_query($db,"delete from videos where video_id=$video_id");
				header("Location:showall.php");




?>