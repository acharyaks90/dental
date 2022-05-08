

<?php
    
   include('session.php');
   $user=$_SESSION['login_user']; 
   
    
?>
<html>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/main.js"></script>
   
   
 
    
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

		
			<div class="col-sm-8">
				<div class="panel panel-default" style="height: 380px;" >
					<div style="height:10px;"></div>
					
					<div id="show" style="margin-left:10px; max-height:365px; overflow-y:scroll;">
					
			     
				   
				   

					</div>
				</div>
				
				</div>
				
				
				<div class="col-sm-4">
				   <div class="panel panel-default" style="height: 380px;" >
					<div style="height:10px;"></div>
				    <center>	<span style="font-size:20px; margin-left:5px;padding:2px;color:blue;">Welcome to Discussion Forum </span><br>
					<span style="font-size:10px;"><i>Note: Avoid using foul language and hate speech to avoid banning of account</i></span></center>
					<div style="height:8px;"></div>
					<div style="height:3px;background-color:red;"></div>
					<div style="height:10px;"></div>
					<center>	<span style="font-size:16px; margin-left:5px;padding:2px;color:green">You'r Now Connected With  </span><br>
					<div style="height:5px;"></div>
					<span style="font-size:18px;color:red"><b>All Users</b></span>
					<div style="height:8px;"></div>
					<div style="height:3px;background-color:black;"></div>
					<div style="height:0px;"></div>
					<div  style=" max-height:228px; overflow-y:scroll;">
					
					 <table id="order_data" class="table  table-striped">					
						  
			  
			 <?php   
                      $name=1; 
						 
						$run=mysqli_query($db,"select * from users order by ID desc   ");
						 
					
						 
						 while ($row =mysqli_fetch_array($run,MYSQLI_BOTH)) {
							 
							 
							 if ($row['status']==1) {
		
	
   ?>	 
					
                
		                            <tr>
								         <td> <?php echo $row['FNAME']." ".$row['LNAME']; ?> <img align="right" src="image/green.png" /></td>
									  </tr>
									  
<?php		
	}

		else   
		          {  ?>
			 <tr>
								         <td> <?php echo $row['FNAME']." ".$row['LNAME']; ?><img  align="right" src="image/red.png" /></td>
									  </tr>
		<?php 		}
		
		         ?>	 
					
                
		                           
									  
	
					 
					<?php	  	}  ?>	
					
					
					
					<!-----  TRy ----->
					
					
					
					
					
					
					
					
	</table>
					</div>
					
				</div>
		</div>
		
			
				</div>
			</div>
		<div class="row">
           <div class="col-md-12">
				           		 
				<div class="col-sm-6">
			<div class="panel panel-success">
				
				<div class="panel-footer" id="footer" style="border:2px solid grey;border-radius:5px;">
					<div class="row">
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo  $login_session; ?>"  class="form-control" >
						<div class="col-sm-10"><input type="text" name="msg" id="msg"  class="form-control" ></div>
						<div class="col-sm-1" style="padding-left: 1px">
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












</body>
</html>