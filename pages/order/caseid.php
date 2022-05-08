<?php

      include('../../session.php');
	  $employee_user=$_SESSION['login_employee']; 
   

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="../../clinic_lab_dashboard.php"><!-- <img src="../../assets/images/logo.svg" alt="logo" /> --></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="../../clinic_lab_dashboard.php"><!-- <img src="../../assets/images/logo-mini.svg" alt="logo" /> --></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="../../assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php
                      $res = mysqli_query($db, "select * from employee where email='$employee_user'");
					  while($row=mysqli_fetch_array($res))
				   {
					echo $row['first_name']." ".$row['last_name'];
							 } 
							?></span>
                <!-- <span class="font-weight-normal">$8,753.00</span> -->
              </div>
              <!-- <span class="badge badge-danger text-white ml-3 rounded">3</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../employee_user.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="employee_order.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Order</span>
            </a>
          </li>
                   
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li><a href="../../logout.php">Sign Out</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count count-varient1">7</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">5</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Spain </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="../../assets/images/faces/face1.jpg" />
                  <span class="profile-name"><?php
                      $res = mysqli_query($db, "select * from employee where email='$employee_user'");
					  while($row=mysqli_fetch_array($res))
				   {
					echo $row['first_name']." ".$row['last_name'];
							 } 
							?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="../../logout.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav> 
		<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Order Details</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="employee_order.php"><button type="button" class="btn btn-success">Back</button></a></li>
                 
                </ol>
              </nav>
            </div>
			 <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   <div class="table-responsive">
                      <table class="table">
					  <?php   
			
			$file_id=$_GET['file_id'];
		   
			   $res=mysqli_query($db,"select * from file where file_id='$file_id'");
				while($row=mysqli_fetch_array($res))
			   {  ?>
				   
					   <tr>
						   <td style="width:250px;">Order ID</td>
							<td style="width:250px;"><?php echo $row['file_id'] ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Created At</td>
							<td style="width:250px;"><?php echo $row['createdAt'] ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Updated At</td>
							<td style="width:250px;"><?php $dateTime = $row['updatedAt']; 
                                            if($dateTime==0){
                                              echo " ";
                                            }else{
                                              echo "$dateTime";
                                            }  ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Status</td>
							<td style="width:250px;"><?php $workStatus = $row['work_status'];
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
			   
					   </tr>
					   <tr><td style="width:250px;">Working Status</td>
					   <td style="width:250px;">
					   <select class="form-control"  id="work_status" name="work_status">
                              <?php include_once '../../confi.php';
                                  $result = mysqli_query($db,"SELECT `work_id`, `work_status` FROM `work_status`");
                                     while ($row = mysqli_fetch_array($result)) {
                                      ?>

                                     <option  value="<?php echo $row['work_id']; ?>" > <?php  echo $row['work_status']; ?> </option> 
                                     <?php }  ?>
                              </select>
					   </td>
					</tr>
					   <tr>
						   <td style="width:250px;">Comments</td>
							<td style="width:250px;"><input type="text Area" width="250%" height= "50%"></td>
					   
					   </tr>
					   
					   
					  <tr>
							<td></td>
							<td> <a href="#" class="btn btn-danger">Update</a></td>
					   
					   </tr>
				   </table>
				   <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
					  <?php   
			
			$file_id=$_GET['file_id'];
		   
			   $res=mysqli_query($db,"select * from file where file_id='$file_id'");
				while($row=mysqli_fetch_array($res))
			   {  ?>
				   
					   <tr>
						   <td style="width:250px;">Units</td>
							<td style="width:250px;"><?php ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Tooths</td>
							<td style="width:250px;"><?php ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Material</td>
							<td style="width:250px;"><?php  ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Design Type</td>
							<td style="width:250px;"><?php ?></td>
			   
					   </tr>
					   <tr>
						<td style="width:250px;">Turn Around Time</td>
					   <td style="width:250px;"></td>
					   </tr>
					   <tr>
					   <td style="width:250px;">Initial Scan File</td>
						<td style="width:250px;"></td>
						</tr>
						<td style="width:250px;">STL File Download</td>
						<td style="width:250px;"></td>
						</tr>
						
				   </table>
				   <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                       <div class="table-responsive">
					   <form action="" method="POST"  enctype="multipart/form-data">
                      <table class="table table-striped">
					  <?php   
			
			$file_id=$_GET['file_id'];
		   
			   $res=mysqli_query($db,"select * from file where file_id='$file_id'");
				while($row=mysqli_fetch_array($res))
			   {  ?>
				   
					   <tr>
						   <td style="width:250px;">Rx Message</td>
							<td style="width:250px;"><?php ?></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">STL Upload</td>
							<td style="width:250px;"><input type="file" id="file" name="file" value="file"></td>
					   
					   </tr>
					   <tr>
						   <td style="width:250px;">Order History</td>
							<td style="width:250px;"><?php  ?></td>
					   
					   </tr>
					   <tr>
							<td></td>
							<td> <button name="upload" class="btn btn-danger">Upload</a></td>
					   
					   </tr>
						
				   </table>
				             <?php  
							         if(isset($_POST['upload'])){
										 //for the insertation of the work status
												$res1 = mysqli_query($db,"select * from work_status where work_status = 'Done'");
												while($row=mysqli_fetch_array($res1))
												{
												
													 $work_id = $row['work_id'];
													} 
													//for the date and time 
													$date = date('Y-m-d H:i:s');
									 
													   $fileName = $_FILES['file']['name'];  //storeing a name
													   $tempname = $_FILES['file']['tmp_name'];//temp name store      
													   
													   move_uploaded_file($tempname,"../../filecompleted/$fileName");   
												   
															   
													   $sql ="UPDATE ignore `file` SET `work_status`='$work_id',`updatedAt`='$date',`completedfile`=' $fileName' WHERE file_id = '$file_id'";
													   
													   
													   $result = mysqli_query($db,$sql);
													   if ($result>0) {
													   echo "<p id='info-message' class='alert alert-success' >File Upload Succesfully</p>
																 <script>
																   setTimeout(function(){
																 document.getElementById('info-message').style.display = 'none';
																	 /* or
																   var item = document.getElementById('info-message')
																	 item.parentNode.removeChild(item); 
																	 
																	   */
															 +		}, 3000);
																 
																   </script>";
															 }
															   else
															 {
															   echo "<p id='info-message' class='alert alert-danger' > Try again</p>
																 <script>
																   setTimeout(function(){
																 document.getElementById('info-message').style.display = 'none';
																	 /* or
																   var item = document.getElementById('info-message')
																	 item.parentNode.removeChild(item); 
																	   */
																 }, 3000);
																   </script>";
											   }
												   }
							 
							 
							  ?>

					   </form>
				   <?php } ?>
                              

                      
                    </div>
                  </div>
                </div>
              </div>


      </div>
    </div>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
  </body>
</html>