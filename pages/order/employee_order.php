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
          <a class="sidebar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
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
              <?php
             
                    $res = mysqli_query($db, "select * from employee where email='$employee_user'");
			                   while($row=mysqli_fetch_array($res))
                            {
                             echo $row['first_name']." ".$row['last_name'];
			                          } 
		                             ?></span>
                <!-- <span class="font-weight-medium mb-2">Henry Klein</span>
                <span class="font-weight-normal">$8,753.00</span> -->
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
            <a class="nav-link" href=#>
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
                  <!-- <span class="profile-name">Henry Klein</span> -->
                  <span class="profile-name">

                  <?php
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
              
            <div class="template-demo">
                      <button type="button" class="btn btn-primary btn-rounded btn-fw"> Filter Option </button>
                      <button type="button" class="btn btn-secondary btn-rounded btn-fw"> Bulk Assign</button>
                      <button type="button" class="btn btn-success btn-rounded btn-fw"> New </button>
                      <button type="button" class="btn btn-danger btn-rounded btn-fw"> In Progress </button>
                      <button type="button" class="btn btn-warning btn-rounded btn-fw"> Hold </button>
                      <button type="button" class="btn btn-info btn-rounded btn-fw"> Redesign </button>
                      <button type="button" class="btn btn-light btn-rounded btn-fw"> Completed </button>
                      <button type="button" class="btn btn-dark btn-rounded btn-fw"> QC </button>
                     </div>          
            </div>
            <!-- <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  
                  Place for the space work

                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  


                <div class="">
                      <table border="1">
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
                        <tbody style="overflow-y:scroll; height:100px;">
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





                     
                          
                        </tbody>
                      </table>
                      
                </div>
               
                       
                    </div>
                      

              </div>
            </div>

           
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Jai Shri Ram </span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href=# target="_blank">Welcome To Priyanshi Dent Designs Pvt Ltd</a> developed By Priyanshi</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
  </body>
</html>


