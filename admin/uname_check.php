<?php

include "confi.php";

/* Get username */
$uname = $_POST['uname'];
//$email = $_POST['email'];
/* Query */
$query = "select count(*) as cntUser from employee where username='".$uname."'";

$result = mysqli_query($db,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;




//  $query1 = "select count(*) cntemail from employee where email='".$email."'";

// $result1 = mysqli_query($db,$quary1);

// $row1 = mysqli_fetch_array($result);

//  $count = $row1['cntemail'];

//  echo $count;

?>