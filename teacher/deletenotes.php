
<?php
    
   include('confi.php');
   
   $id=$_GET["id"];
   $res=mysqli_query($db, "select * from tbl_uploads where id=$id");
   while($row=mysqli_fetch_array($res))
   {
	   $img=$row["path"];
   }
   unlink($img);
   
   
   mysqli_query($db, "delete from tbl_uploads where id=$id");
   
   
  header('Location:showall1.php');
   
   
    
?>

