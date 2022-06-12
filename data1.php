<style type="text/css">
	#text{
		background-color: #B7CCFA;
	    border-radius: 10px;
	    padding-top: 3px;
	    padding-bottom: 3px;
		width:450px;
		float:left;
		margin-top:3px;
		margin-bottom:3px;
	
	}
	#text1{
		background-color: #00FF7F;
	    border-radius: 10px;
	    padding-top: 3px;
	    padding-bottom: 3px;
		width:450px;
		float:right;
		margin-top:3px;
		margin-bottom:3px;
	}
</style>

			
			
			<?php 
			include('session.php');
function formatDate($date){
	return date('M-d-Y h:i A', strtotime($date));
}


$query = " SELECT * FROM chat   where s_id='".$_SESSION['id']."' AND t_id='".$_SESSION['tid']."' ORDER BY date desc ";
$run = mysqli_query($db, $query);

	while ($row =mysqli_fetch_array($run)) {
		

		 if($row['us_id']==$_SESSION['id'])
		 {
				
		?>
		
			<tr >
				<!-- <span style="color:green;"><?php echo $row['username']; ?></span> <br> -->
				<div id="text"> <span style="color:black; margin-left: 8px; font-weight: bold;"><?php echo ucfirst($row['username'])." :</span><br><span style='color:#ffffff;font-size:16px;'>". str_repeat('&nbsp', 12); echo $row['message']; ?></span>
				<span style="float:right;"><?php echo formatDate($row['date']); echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></span></div><br>
				
			</tr>
		 <?php  }
else
		{ ?>
	
	<tr >
				<!-- <span style="color:green;"><?php echo $row['username']; ?></span> <br> -->
				<div id="text1"> <span style="color:black; margin-left: 8px; font-weight: bold;"><?php echo ucfirst($row['username'])." :</span><br><span style='color:#ffffff;font-size:16px;'>". str_repeat('&nbsp', 12); echo $row['message']; ?></span>
				<span style="float:right;"><?php echo formatDate($row['date']); echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></span></div><br>
				
			</tr>
	
		<?php }	
		 
	}


?>
