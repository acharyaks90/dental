<?php

 include_once 'confi.php';


$sql ="INSERT INTO `users` (`FNAME`, `LNAME`, `EMAILADD`, `USERNAME`, `PASSWORD`,MOBNO) 
      VALUES ('".$_POST['FNAME']."','".$_POST['LNAME']."','".$_POST['EMAILADD']."','".$_POST['USERNAME']."','".$_POST['PASS']."','".$_POST['MOB']."')";
$result = mysqli_query($db,$sql) or die(mysqli_error());
if ($result>0) {
	# code...
	echo "<center><h1>Your now successfully resgistered!</h1></center>";
	echo "<a href='index.php' class='btn btn-primary'>Login</a>";
} 
?>