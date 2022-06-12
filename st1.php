
<html>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>




</head>
<body class="bg-primary">

<div class="container">

<div class="row">
<div class="col-md-12">

<?php include ('menu/menu2.php'); ?>
</div>
</div>
<br>
<br>
<br>



<div class="row">
<div class="col-md-6">

<form name="f1" role="form">
<table class="table ">

<tr>
<td colspan="2" align="center">
	<h1  >Register</h1>
</td>

<tr>
<td>Name</td>
<td>
<input type="text" name="t1" class="form-control "/>
</td>
</tr>
<tr>
<td>Email id</td>
<td> <div class="form-group">
  
    <input type="email" class="form-control" placeholder="Enter email" name="t2"/>
  </div></td>
<tr>
<td>Contact no</td>
<td><input type="text" name="t3" class="form-control" /></td>
</tr>
<tr>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="t4"class="form-control"/></td>
</tr>
<tr>
<td>city</td>
<td><input type="text" name="t5"class="form-control"/></td>
</tr>
<tr>
<td>state</td>
<td><input type="text" name="t6"class="form-control"/></td>
</tr>


<tr>
<td>course</td>
<td><input type="text" name="t7" class="form-control"/></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="t8" class="form-control"/></td>
</tr>




<tr>
<td>
</td>
<td>

<input type="submit"name="b8"value="submit"class="btn btn-danger"/>
</tr>
</table>


<!---------

<%
	if(request.getParameter("b8")!=null)
	{
		Connection con=null;
		Statement st;
		
		try{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			String serverName = "localhost";
			String portNumber = "1521";
			String sid = " ";
        			String url = "jdbc:oracle:thin:@" + serverName + ":" + portNumber + ":" + sid;
			con=DriverManager.getConnection(url,"system","auto");
			st=con.createStatement();
			
			String name=request.getParameter("t1");

			String email =request.getParameter("t2");
			String contact=request.getParameter("t3");

			String address=request.getParameter("t4");

			String city=request.getParameter("t5");

			String state=request.getParameter("t6");

			String course=request.getParameter("t7");

			String passwd=request.getParameter("t8");
			
			String sql="insert into student2 values('"+name+"','"+email+"','"+contact+"','"+address+"','"+city+"','"+state+"','"+course+"','"+passwd+"')";
			int res=st.executeUpdate(sql);
			if(res!=0)
				out.println("you are registered");
			else
				out.println("not Registered");
			
			
			con.close();
		}catch(Exception e)
		{
			out.println(e.toString());
		}
		}
%> ----------->

</form>
</div>

<div class="col-md-6">
<img src="image/16.jpg"class="img-rounded" />
</div>
</div>  
</div>
</body>
</html>