<?php
header('Content-Type: application/json');
$array = array();

$res = mysql_query("SELECT * FROM users WHERE status=1");
if(mysql_num_rows($res) > 0){
    while($row = mysql_fetch_assoc($res)){  
        $array[] = $row['ID'];  // this adds each online user id to the array         
    }
}
echo json_encode($array);


?>