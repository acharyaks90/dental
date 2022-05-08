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
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="showall1.php">Show All</a></li>
			 <li class="divider"></li>
             <li><a href="addnotes.php">Add</a></li>
			 
			
      
          </ul>
        </li>
		
		
		
      </ul>
      <ul class="nav navbar-nav navbar-left">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="showall.php">Show All</a></li>
			 <li class="divider"></li>
             <li><a href="addvideos.php">Add</a></li>
			  
			
           </li>
          </ul>
		  
		 <li><a href="chatroom.php">Discussion Forum</a></li>
		  <li><a href="chat.php">Q & A</a></li>
		  
  
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?php   
		
		$res = mysqli_query($db, "select teacher_id from staff where username='$user'");
			  while($row=mysqli_fetch_array($res))
            {
   
		  ?>
		  
            <li><a href="teacherprofile.php?id=<?php echo $row["teacher_id"]; ?>">View Profile</a></li> 
			
			<?php }  ?>
            <li class="divider"></li>
            <li><a href ="logout.php">   Log Out</a></li>
      
          </ul>
        </li>
      </ul>

        </li>
      </ul>
	   <ul class="nav navbar-nav navbar-right">
        <li><a href="#"  style="color:white;font-size:18px;"><b>Teacher - <?php echo $login_session; ?></b></a></li>
      
      </ul>
    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

   
