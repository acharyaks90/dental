

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
<div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  


                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Select <br> All</th>
                            <th>Order id</th>
                            <th>Initial <br>Scan File</th>
                            <th>Dental <br>Lab Id</th>
                            <th>Unit</th>
                            <th>Status</th>
                            <th>Design Type <br>Material Tooth</th>
                            <th>Material</th>
                            <th>Design <br>Type</th>
                            <th>Create <br>Type</th>
                            <th>Create At</th>
                            <th>Updated</th>
                            <th>Turn <br>Around Time</th>
                            <th>Design <br>Files</th>
                            
                          </tr>
                        </thead>
                        <?php
                                 $limit = 25;  
                                 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=25; };  
                                   $start_from = ($page-1) * $limit; 
                                
			  
								
                                     $sql="select * from file order by file_id ASC LIMIT $start_from, $limit ";

     

                                             $res=mysqli_query($db,"SELECT * FROM file order by file_id  DESC");
								                          	 while($row=mysqli_fetch_array($res))
								                             	 {
									

                                              ?>									
									 
										 
										                    <tr>
                                          <td></td>
								                          <td><a href="caseid.php?file_id=<?php echo $row['file_id']; ?>"><?php echo $row['file_id']; ?></a></td>
											                    <td><a href="../../fileupload/<?php echo $row['filename']; ?>"><?php echo $row['filename']; ?></a></td>
                                          <td> <?php echo $row['register_id']; ?> </td>
                                          <td></td>
                                          <td><?php $workStatus= $row['work_status'];
                                                if( $workStatus ==1){
                                                   echo "<label class='badge badge-warning'> Pending</label>";
                                                }elseif($workStatus ==2){
                                                  echo "<label class='badge badge-warning'>In progress</label>";
                                                }elseif($workStatus ==3){
                                                  echo "<label class='badge badge-info'>QC</label>";
                                                }
                                                elseif($workStatus ==4){
                                                  echo "<label class='badge badge-info'>Done</label>";
                                                }else if($workStatus ==5){
                                                  echo "<label class='badge badge-success'>New</label>";
                                                } else if($workStatus ==6){
                                                  echo "<label class='badge badge-success'>Redesign</label>";
                                                } 
                                                else if($workStatus ==7){
                                                  echo "<label class='badge badge-danger'>Redesign</label>";
                                                } ?></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td><?php echo $row['createdAt'];?></td>
                                          <td><?php $dateTime = $row['updatedAt']; 
                                            if($dateTime==0){
                                              echo " ";
                                            }else{
                                              echo "$dateTime";
                                            }?></td>
                                          <td></td>
                                          <td><a href="../../filecompleted/<?php echo $row['completedfile']; ?>"><?php echo $row['completedfile']; ?></a></td>
											  
										 
										  
										  
								                     </tr>
										 
										
									               <?php } ?>





                        <tbody>
                          
                        </tbody>
                      </table>
					  </div>
                <?php
                                          $sql = "SELECT COUNT(file_id) FROM file";  
                                          $rs_result = mysqli_query($db,$sql);  
                               
                                          $row = mysqli_fetch_row($rs_result);  
                                          $total_records = $row[0];  
                                          $total_pages = ceil($total_records / $limit);  
                                          $pagLink = "<center><ul class='pagination'>";  
                                          for ($i=1; $i<=$total_pages; $i++) {  
                                                      $pagLink .= "<li><a href='employee_order.php?page=".$i."'>".$i."</a></li>";  
                                          };  
                                          echo $pagLink . "</ul></center>";  




                                          ?>
                       
                    </div>

<?php	


//$name = $_SESSION['username'];

	

	//$query = "SELECT * FROM users WHERE status = '1' ";
	//$run = mysqli_query($db, $query);
	//while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {

		
		
//	}



?>







			  </div>
</div>
<



</body>
</html>