<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
    
?>
<html>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    
	<style>
	   #s
{
	font-size:16px;
	
	
}
	
	
	</style>
	

</head>
<body>



<?php include ('menu/menu3.php'); ?>


<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">

 <a href="chat.php" class="text-left"><button type="button"class="btn btn-primary">Back</button></a>
 
</div>
</div>
<div class="row">
<div class="col-md-12">

  
   <center><h3 class="bg-danger" style="padding:1%; border-radius: 1px;">&nbsp You Are Connected With Your Teacher   &nbsp!!!</h3>
 


</div>
</div>
<br>

</div>








<br><br>


			
<br><br>




</body>
</html>