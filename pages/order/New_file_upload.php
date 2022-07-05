<?php

      include('../../session.php');
    $clinic_user=$_SESSION['clinic_lab_login']; 
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Priyanshi Dental Design</title>
 
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modal</title>
  <link href="style3.css" rel="stylesheet">
  <!-- <script type="module" src="./main3.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script>
  var app = angular.module("fileApp", []);

app.controller("fileUploadCtrl", function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.orders = [
        {   
            Units:"",

        }
    ];

    $scope.add = function() {
        $scope.orders.push({
            Units:"",
        })
      };
  });
  </script>
  
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
                    $res = mysqli_query($db, "select * from register_clinic where email='$clinic_user'");
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
            <a class="nav-link" href="../../clinic_lab_dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="clinic_order.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="New_file_upload.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">New File Upload</span>
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
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
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
                    $res = mysqli_query($db, "select * from register_clinic where email='$clinic_user'");
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
              </div>
              
               <div class="row justify-content-center align-items-center">
                
  <!-- <button data-modal-target="#modal1">Open Modal</button>
  <div class="modal1" id="modal1">
    <div class="modal1-header">
      <div class="title">Example Modal</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal1-body">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Nostrum voluptatem totam, molestiae rem at ad autem dolor ex aperiam. Amet assumenda eos architecto, dolor placeat deserunt voluptatibus tenetur sint officiis perferendis atque! Voluptatem maxime eius eum dolorem dolor exercitationem quis iusto totam! Repudiandae nobis nesciunt sequi iure! Eligendi, eius libero. Ex, repellat sapiente!
    </div>
  </div>
  <div id="overlay"></div>
                           -->

                      <div class="">
                    <div class="card-body">
                    <h4 class="card-title">Upload New File</h4>
                    <br>
                    <br>
                     <!-- <form class="forms-sample"> -->
                       <form action="" method="POST"  enctype="multipart/form-data">
                      <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Upload File  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>                      
                      <input type="file" id="file" name="file" value="file" required="required">
                      </div>
                      <!-- From Data Tooth-->
                      <!-- <div class="form-group">
                        <label for="exampleInputUsername1">Teeth  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </label>
                        <input type="button" data-modal-target="#modal1" value="openModel" />
                        <div class="modal1" id="modal1">
                              <div class="modal1-header">
                         
                             <input type="button" data-close-button class="close-button" value='X'/>
                         </div>
                                       <div class="modal1-body">
                                         <div class="teeth-1">
                                         Unit #  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="text" name="text">
                                         <br>
                                         <br>
                                         Tooth No*  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <input type="checkbox" id="teeth1" name="teeth1" value="1">
                                          <label for="teeth1">1</label>
                                          <input type="checkbox" id="teeth2" name="teeth2" value="2">
                                          <label for="teeth2">2</label>
                                          <input type="checkbox" id="teeth3" name="teeth3" value="3">
                                          <label for="teeth3">3</label>
                                          <input type="checkbox" id="teeth4" name="teeth4" value="4">
                                          <label for="teeth4">4</label>
                                          <input type="checkbox" id="teeth5" name="teeth5" value="5">
                                          <label for="teeth5">5</label>
                                          <input type="checkbox" id="teeth6" name="teeth6" value="6">
                                          <label for="teeth6">6</label>
                                          <input type="checkbox" id="teeth7" name="teeth7" value="7">
                                          <label for="teeth7">7</label>
                                          <input type="checkbox" id="teeth8" name="teeth8" value="8">
                                          <label for="teeth8">8</label>
                                          <input type="checkbox" id="teeth9" name="teeth9" value="9">
                                          <label for="teeth9">9</label>
                                          <input type="checkbox" id="teeth10" name="teeth10" value="10">
                                          <label for="teeth10">10</label>
                                          <input type="checkbox" id="teeth11" name="teeth11" value="11">
                                          <label for="teeth11">11</label>
                                          <input type="checkbox" id="teeth12" name="teeth12" value="12">
                                          <label for="teeth12">12</label>
                                          <input type="checkbox" id="teeth13" name="teeth13" value="13">
                                          <label for="teeth13">13</label>
                                          <input type="checkbox" id="teeth14" name="teeth14" value="14">
                                          <label for="teeth14">14</label>
                                          <input type="checkbox" id="teeth15" name="teeth15" value="15">
                                          <label for="teeth15">15</label>
                                          <input type="checkbox" id="teeth16" name="teeth16" value="16">
                                          <label for="teeth16">16</label>
                                          <input type="checkbox" id="teeth17" name="teeth7" value="17">
                                          <label for="teeth17">17</label>
                                          <input type="checkbox" id="teeth18" name="teeth18" value="18">
                                          <label for="teeth18">18</label>
                                          <input type="checkbox" id="teeth19" name="teeth19" value="19">
                                          <label for="teeth19">19</label>
                                          <input type="checkbox" id="teeth20" name="teeth20" value="20">
                                          <label for="teeth20">20</label>
                                          <input type="checkbox" id="teeth21" name="teeth21" value="21">
                                          <label for="teeth21">21</label>
                                          <input type="checkbox" id="teeth22" name="teeth22" value="22">
                                          <label for="teeth22">22</label>
                                          <input type="checkbox" id="teeth23" name="teeth23" value="23">
                                          <label for="teeth23">23</label>
                                          <input type="checkbox" id="teeth24" name="teeth24" value="24">
                                          <label for="teeth24">24</label>
                                          <input type="checkbox" id="teeth25" name="teeth25" value="25">
                                          <label for="teeth25">25</label>
                                          <input type="checkbox" id="teeth26" name="teeth26" value="26">
                                          <label for="teeth26">26</label>
                                          <input type="checkbox" id="teeth27" name="teeth27" value="27">
                                          <label for="teeth27">7</label>
                                          <input type="checkbox" id="teeth28" name="teeth28" value="28">
                                          <label for="teeth8">8</label>
                                          <input type="checkbox" id="teeth29" name="teeth29" value="29">
                                          <label for="teeth29">29</label>
                                          <input type="checkbox" id="teeth30" name="teeth30" value="30">
                                          <label for="teeth30">30</label>
                                          <input type="checkbox" id="teeth31" name="teeth31" value="31">
                                          <label for="teeth31">31</label>
                                          <input type="checkbox" id="teeth32" name="teeth32" value="32">
                                          <label for="teeth32">32</label>
                                          
                                        <br>
                                        Material 


                                        <br>

                                       Design type 

                                       <br>
                                          










                                      </div>
                              </div>
                                      <button type="button" class="add-teeth">Add new teeth</button>
                                      <button type="button" class="remove-teeth">Remove</button>
                                      </div>

                            <div id="overlay"></div>
                      
                      </div> -->
                      <div ng-app="fileApp">
                      <div ng-controller="fileUploadCtrl">
                      <button type="button" ng-click="add()">Add More + </button>
                      <div style="border:2px solid black; padding:5px" ng-repeat="x in orders; ">
                     
                        <div class="form-group">
                          <label for="exampleInputEmail1">Units  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                          <label>
                          <input type="text" name="units{{$index}}">
                        </div>
                      
                                   <div class="form-group">
                                        <label for="exampleInputEmail1">Teeth  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                        <label>
                                         <input type="checkbox" id="teeth1_{{$index}}" name="teeth[]" value="1">
                                          <label for="teeth1">1</label>
                                          <input type="checkbox" id="teeth2_{{$index}}" name="teeth[]" value="2">
                                          <label for="teeth2">2</label>
                                          <input type="checkbox" id="teeth3_{{$index}}" name="teeth[]" value="3">
                                          <label for="teeth3">3</label>
                                          <input type="checkbox" id="teeth4_{{$index}}" name="teeth[]" value="4">
                                          <label for="teeth4">4</label>
                                          <input type="checkbox" id="teeth5_{{$index}}" name="teeth[]" value="5">
                                          <label for="teeth5">5</label>
                                          <input type="checkbox" id="teeth6_{{$index}}" name="teeth[]" value="6">
                                          <label for="teeth6">6</label>
                                          <input type="checkbox" id="teeth7_{{$index}}" name="teeth[]" value="7">
                                          <label for="teeth7">7</label>
                                          <input type="checkbox" id="teeth8_{{$index}}" name="teeth[]" value="8">
                                          <label for="teeth8">8</label>
                                          <input type="checkbox" id="teeth9_{{$index}}" name="teeth[]" value="9">
                                          <label for="teeth9">9</label>
                                          <input type="checkbox" id="teeth10_{{$index}}" name="teeth[]" value="10">
                                          <label for="teeth10">10</label>
                                          <input type="checkbox" id="teeth11_{{$index}}" name="teeth[]" value="11">
                                          <label for="teeth11">11</label>
                                          <input type="checkbox" id="teeth12_{{$index}}" name="teeth[]" value="12">
                                          <label for="teeth12">12</label>
                                          <input type="checkbox" id="teeth13_{{$index}}" name="teeth[]" value="13">
                                          <label for="teeth13">13</label>
                                          <input type="checkbox" id="teeth14_{{$index}}" name="teeth[]" value="14">
                                          <label for="teeth14">14</label>
                                          <input type="checkbox" id="teeth15_{{$index}}" name="teeth[]" value="15">
                                          <label for="teeth15">15</label>
                                          <input type="checkbox" id="teeth16_{{$index}}" name="teeth[]" value="16">
                                          <label for="teeth16">16</label>
                                          <input type="checkbox" id="teeth17_{{$index}}" name="teeth[]" value="17">
                                          <label for="teeth17">17</label>
                                          <input type="checkbox" id="teeth18_{{$index}}" name="teeth[]" value="18">
                                          <label for="teeth18">18</label>
                                          <input type="checkbox" id="teeth19_{{$index}}" name="teeth[]" value="19">
                                          <label for="teeth19">19</label>
                                          <input type="checkbox" id="teeth20_{{$index}}" name="teeth[]" value="20">
                                          <label for="teeth20">20</label>
                                          <input type="checkbox" id="teeth21_{{$index}}" name="teeth[]" value="21">
                                          <label for="teeth21">21</label>
                                          <input type="checkbox" id="teeth22_{{$index}}" name="teeth[]" value="22">
                                          <label for="teeth22">22</label>
                                          <input type="checkbox" id="teeth23_{{$index}}" name="teeth[]" value="23">
                                          <label for="teeth23">23</label>
                                          <input type="checkbox" id="teeth24_{{$index}}" name="teeth[]" value="24">
                                          <label for="teeth24">24</label>
                                          <input type="checkbox" id="teeth25_{{$index}}" name="teeth[]" value="25">
                                          <label for="teeth25">25</label>
                                          <input type="checkbox" id="teeth26_{{$index}}" name="teeth[]" value="26">
                                          <label for="teeth26">26</label>
                                          <input type="checkbox" id="teeth27_{{$index}}" name="teeth[]" value="27">
                                          <label for="teeth27">7</label>
                                          <input type="checkbox" id="teeth28_{{$index}}" name="teeth[]" value="28">
                                          <label for="teeth8">8</label>
                                          <input type="checkbox" id="teeth29_{{$index}}" name="teeth[]" value="29">
                                          <label for="teeth29">29</label>
                                          <input type="checkbox" id="teeth30_{{$index}}" name="teeth[]" value="30">
                                          <label for="teeth30">30</label>
                                          <input type="checkbox" id="teeth31_{{$index}}" name="teeth[]" value="31">
                                          <label for="teeth31">31</label>
                                          <input type="checkbox" id="teeth32_{{$index}}" name="teeth[]" value="32">
                                          <label for="teeth32">32</label>
                                    </div>
                       
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Turn Around Times  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                      <label>
                                      <select class="form-control"  value="workingTime" name="workingTime">
                                            <?php include_once 'confi.php';
                                                $result = mysqli_query($db,"SELECT * FROM `working-_time`");
                                                  while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                  <option  value="<?php echo $row['time']; ?>" > <?php  echo $row['time']; ?> </option> 
                                                  <?php }  ?>
                                            </select></label>
                                      
                                    </div>
                       </div>
                       </div>
                       </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Rx Messages</label>
                        <textarea rows="4" cols="50"></textarea>
                      </div>
                    
                      </div>
                      <button type="submit" name="file" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    <!-- </form> -->
                  </div>
                           </div>
       	
                              </from>
		
	
	
              
	
	

                  
                    
                  
           
           
            
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

<?php
         if(isset($_POST['file'])){
             //insertion of the clinic id for in the main file


                     $res = mysqli_query($db, "select * from register_clinic where email='$clinic_user'");
                        while($row=mysqli_fetch_array($res))
                            {
                              $id = $row['id'];
			                          } 

                       //for the insertation of the work status
                     $res1 = mysqli_query($db,"select * from work_status where work_status = 'New'");
                     while($row=mysqli_fetch_array($res1))
                     {
                     
                          $work_id = $row['work_id'];
                         } 
                             $date = date('Y-m-d H:i:s');

                           $unit =$_POST['units'];
                           $checkBox = implode(',', $_POST['teeth']);
                           $WorkTime = $_POST['workingTime'] ;
                           $fileSize = $_FILES['file']['size']; //storeing a name  
                           $fileError = $_FILES['file']['error']; 
                           $fileType = $_FILES['file']['type']; 
                           $fileName = $_FILES['file']['name']; 
                           $tempname = $_FILES['file']['tmp_name'];//temp name store    
                           
                           $fileExt = explode('.',$fileName);
                           $fileactualext = strtolower(end($fileExt));

                           $allowed = array('zip','rar');
                           if(in_array($fileactualext,$allowed)){
                            if($fileError===0){
                             $fileNameNew = uniqid('',true).".".$fileactualext; 
                             $fileDestination = '../../fileupload/'.$fileNameNew;
                             move_uploaded_file($tempname,$fileDestination); 
                             $sql ="INSERT INTO `file`(`register_id`,`createdAt`,`work_status`,`filename`,`worktime`,`unit`, `toothNo`)
                              VALUES ('$id','$date',' $work_id','$fileName','$WorkTime','$unit','$checkBox')";
                            
                            
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

                            }else{
                              echo "There was an error in file uploading";
                            }
                           }else{

                           }
                            
                            
                            
                            
                        
                                    
                           
?>