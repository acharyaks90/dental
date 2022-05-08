<?php
require_once ("db.php");

$vId=$_SESSION['vid'];

$sql = "SELECT * FROM tbl_comment ORDER BY parent_comment_id asc, comment_id asc where video_id='$vId'";

$result = mysqli_query($conn, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($conn);
echo json_encode($record_set);
?>