<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
  
   
?><?php   
                         $_SESSION['uid']=$u_id=$_GET['u_id']; 
						 
						 
						$run=mysqli_query($db,"select * from combine where u_id='$u_id' ");
						 
					
						 
						 while ($row =mysqli_fetch_array($run)) {
		

		
			
			
                  	 $tname=$row['username'];

		
		
	}
						 
						 ?>	
<html>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script>
   
   
   
   $(document).ready(function(){

             $("#send").click(function(){

             	var name = $("#name").val();
				var msg = $("#msg").val();

             	$.post("action1.php", {submit:1,userName:name,userMsg:msg}, function(data){

             		$("#done").text(data);
             	});
             });

     setInterval(function () {
                $('#show').load('data1.php')
            }, 1000);

		});
   
   </script>
   
   
 
    
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
&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button" class="btn btn-primary" onclick="window.location.href='chat.php'" >Back</button>
			
	<div class="container">			

<div class="row">
<div class="col-md-12">

			
			<div class="col-sm-8">
				<div class="panel panel-default" style="height: 350px;" >
					<div style="height:10px;"></div>
					
					<div id="chat_area" style="margin-left:10px;margin-right:10px; max-height:320px; overflow-y:scroll;">
					
			       <div id="show"></div>
 
					</div>
				</div>
		</div>
		<div class="col-sm-4">
				   <div class="panel panel-default" style="height: 350px;" >
					<div style="height:10px;"></div>
				    <center>	<span style="font-size:22px; margin-left:5px;padding:2px;color:blue;">Welcome to Q & A </span><br>
					<span style="font-size:10px;"><i>Note: Avoid using foul language and hate speech to avoid banning of account</i></span></center>
					<div style="height:10px;"></div>
					<div style="height:3px;background-color:red;"></div>
					<div style="height:10px;"></div>
					<center>	<span style="font-size:16px; margin-left:5px;padding:2px;color:green">You'r Now Connected With </span><br>
					<div style="height:5px;"></div>
					<span style="font-size:20px;color:red"><b>Student : <?php echo  $tname; ?></b></span>
					<div style="height:5px;"></div>
					<span style="font-size:16px; margin-left:5px;padding:2px;color:skyblue">Subject : Operating System </span><br></center>
						<div style="height:15px;"></div>
						<div style="height:3px;background-color:black;"></div>
						<div style="height:10px;"></div>
				<center>	<img src="image/qa.png"  width="250" /></center>
				</div>
		</div>
		</div>
			</div>
			<div class="row">
             <div class="col-md-12">
              		 
				<div class="col-sm-6" >
			    
				<div class="panel-footer" id="footer" style="border:2px solid grey;border-radius:5px;">
					<div class="row" >
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo  $login_session; ?>"  class="form-control" >
						<div class="col-sm-10" ><input type="text" name="msg" id="msg"  class="form-control" ></div>
						<div class="col-sm-2" style="padding-left: 2px">
							<input type="reset" name="send" id="send" value="Send" class="btn btn-primary " >
						</form>
						</div>
					</div>
					
				
					
				</div>
			
			</div>
			</div>
			
			</div>
		
		</div>
</div>
</div>












</body>
</html>