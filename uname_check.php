<?php

include "confi.php";

/* Get username */
$uname = $_POST['uname'];

/* Query */
$query = "select count(*) as cntUser from users where USERNAME='".$uname."'";

$result = mysqli_query($db,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;

?>