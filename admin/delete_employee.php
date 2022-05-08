<?php

include('confi.php');

                $employee_id=$_GET["employee_id"];
                $res=mysqli_query($db,"delete from employee where employee_id=$employee_id");
				header("Location:view_employee.php");




?>