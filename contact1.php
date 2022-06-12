<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
    
?>

<html>
<head>
      <title>E-Tuitions</title>
      <link rel="stylesheet" href="pagestyle.css" type="text/css">
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
<body  >
<div class="container ">

<?php include ('menu/menu3.php'); ?>
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-6">
<br><br>
<table class="table" >



   <td class="cont2 " >
        <dl >
              <dt class="cont1">For any query and for your suggestion conatct us :</dt><br>
               <dt>Saurav Rai (Group Leader)</dt>
              <dd > <ul type="square">
                             <li>Mobile number         :    9889567565</li>
                              <li>E-mail               :    saurav325@gmail.com</li>
                              <li>Address              :    Delhi</li>
                             
                     </ul></dd>

       </dl>

<div class="col-md-8">
 <dl>
                <dt>Amit Yadav</dt>
              <dd> <ul type="square">
                             <li>Mobile number         :    9889567565</li>
                              <li>E-mail               :    amityada453@gmail.com
                              <li>Address              :    Allahabad
                             
                     </ul>
</dd>

       </dl>
</div>

<div class="col-md-2">

<img src="image/54.jpg" width="100px" height="100px"  class="img-circle"/>
</div>

<div class="col-md-8">
<dl>
                <dt>Sandeep Dubey</dt>
              <dd>  <ul type="square">
                             <li>Mobile number         :    9189867565</li>
                              <li>E-mail               :    sandeepdubey3757@gmail.com</li>
                              <li>Address              :    Kanpur</li>
                             
                     </ul></dd>

       </dl>
</div>

<div class="col-md-2">
<img src="image/52.jpg" width="100px" height="100px"  class="img-circle"/>
</div>

<div class="col-md-8">
 <dl>
              <dt class="cont1">Saurav Tiwari</dt>
              
              <dd ><ul type="square">
                             <li>Mobile number         :    9889567565</li>
                              <li>E-mail               :    amityada453@gmail.com</li>
                              <li>Address              :    Agra</li>
                         
                     </ul></dd>

       </dl>
</div>

<div class="col-md-2">

<img src="image/53.jpg" width="100px" height="100px"  class="img-circle"/>    
</div>
   </td>
</tr>
  
<tr><td class="myfooter">
         
      <marquee behavior="alternate" >Project Developed by Group member
     : Amit Yadav , Saurav Rai, Sandeep Dubey And Saurav Tiwari
</marquee>

</td></tr>

</table>
</div>
<br><br>
<div class="col-md-2">

  

<tr>
    <td><img src="image/19.jpg"  /></td>
</tr>

</div>
</div>

</div>
</html>