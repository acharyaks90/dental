<?php
    
   include('session.php');
    $user=$_SESSION['login_user'];
   
    
?>




<html>
<head>
 <title>E-Tuition</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
   <style>
   
   .glyphicon {
	margin-right: 4px;
	
}
   
   </style>

   
</head>

<body >


<?php include ('menu/menu3.php'); ?>

<div class="container ">
  <div class="row">
    
	 
	 <div class="col-md-12" >
        <div class="col-md-4"></div>
              <div class="col-md-5">
   
               <img src="image/smile.jpg" width="100%" height="70%" alt="Admin Logo">
               <br><br><br><br><br><br>
              </div>
        <div class="col-md-2"></div>

     </div>

  </div>
</div>

</body>
</html>