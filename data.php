<style type="text/css">
	#text{
		background-color: #B7CCFA;
	    border-radius: 10px;
	    padding-top: 3px;
	    padding-bottom: 3px;
		width:460px;
		margin-top:3px;
		margin-bottom:3px;
		float:left;
		
	}
	#text1{
		background-color: #00FF7F;
	    border-radius: 10px;
	    padding-top: 3px;
	    padding-bottom: 3px;
		width:460px;
		margin-bottom:3px;
		margin-top:3px;
		float:right;
		
	}
</style>

			
			
			<?php 
			include('session.php');
function formatDate($date){
	return date('M-d-Y h:i A', strtotime($date));
}


$query = " SELECT * FROM chatroom ORDER BY date desc";
$run = mysqli_query($db, $query);

	while ($row =mysqli_fetch_array($run)) {
		

		  if($row['user_id']==$_SESSION['id'])
		  {
		
		?>
		
			<div>
				<!-- <span style="color:green;"><?php echo $row['username']; ?></span> <br> -->
				<div id="text"> <span style="color:black; margin-left: 8px; font-weight: bold;position:relative;"><?php echo ucfirst($row['username'])." :</span><br><span style='color:#ffffff;font-size:16px;'>". str_repeat('&nbsp', 12); echo $row['message']; ?></span>
				<span style="float:right;position:relative;"><?php echo formatDate($row['date']); echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></span></div><br>
				
			</div>
		<?php	
		  }
		else
		{  ?>
			<div >
				<!-- <span style="color:green;"><?php echo $row['username']; ?></span> <br> -->
				<div id="text1"> <span style="color:black; margin-left: 8px; font-weight: bold;position:relative;"><?php echo ucfirst($row['username'])." :</span><br><span style='color:#ffffff;font-size:16px;'>". str_repeat('&nbsp', 12); echo $row['message']; ?></span>
				<span style="float:right;position:relative;"><?php echo formatDate($row['date']); echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></span></div><br>
				
			</div>
<?php		}			


		
		
	}


?>
