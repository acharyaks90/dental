<br><br><br>

<nav class="navbar navbar-inverse navbar-fixed-top  " role="navigation">
  <div class="container">
  
  <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <li class="active"><a href="index.php">Home</a></li>
        <li class=""><a href="showall1.php">Notes</a></li>
		<li class=""><a href="showall.php">Videos</a></li>
<li><a href="caseView.php">Cases</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Employee<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="view_employee.php">View</a></li>
            <li class="divider"></li>
            <li><a href="add_employee.php">Add</a></li>
                  
            
      
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        
		<li class=""><a href="register_cleint.php">Register Cleint</a></li>
		
       
  
 
		
	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
		  
        <?php   
		
		$res = mysqli_query($db, "select admin_id from admin where user_name='$user'");
			  while($row=mysqli_fetch_array($res))
            {
   
		  ?>
		  
            <li><a href="adminprofile.php?id=<?php echo $row["admin_id"]; ?>">View Profile</a></li> 
			
			<?php }  ?>
			
			 <li class="divider"></li>
            <li><a href = "logout.php">Sign Out</a></li>
			 
            
          </ul>
		  </li>

		
      </ul>

        
     
 <ul class="nav navbar-nav navbar-right">
        <li><a href="#"  style="color:white;font-size:18px;"><b>Admin -  <?php echo $login_session; ?></b></a></li>
       
      </ul>
    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

   
