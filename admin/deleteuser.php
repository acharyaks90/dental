<?php

include('confi.php');

                $ID=$_GET["ID"];
                $res=mysqli_query($db,"delete from users where ID=$ID");
				header("Location:viewuser.php");




?>