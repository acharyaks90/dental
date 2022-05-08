<!---- <%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>   --->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('51.jpg');color:white;">
<div class="container">
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-6">
</div>
<div class="col-md-2">
</div>
</div>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-6">
<form class="form-horizontal" role="form">
<table class="table" >

  <div class="form-group">

    <label for="inputEmail3" class="col-sm-2 control-label">Email id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="t2" placeholder="Email ID"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password"name="t8"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-success">sign in</button>
  
   
        <!-----            <%
                    if(request.getParameter("t2")!=null && request.getParameter("t8")!=null)
                    {
                        String un;
	       String pw;
                        boolean flag=false;
                        un=request.getParameter("t2");
                        pw=request.getParameter("t8");

                        try
                        {
                            Class.forName("oracle.jdbc.driver.OracleDriver");
		String serverName = "localhost";
		String portNumber = "1521";
		String sid = " ";
		String url = "jdbc:oracle:thin:@" + serverName + ":" + portNumber + ":" + sid;
		Connection c=DriverManager.getConnection(url,"system","auto");
		Statement st=c.createStatement();
		ResultSet rs=st.executeQuery("select * from student2");
                            while(rs.next())
                            {
                                if(rs.getString(2).toString().equals(un) &&rs.getString(8).toString().equals(pw)  )
                                {
                                    session.setAttribute("UserName",un);
		flag=true;
                                    break;
                                }
                            }
                            if(flag==true)
			response.sendRedirect("student_home.jsp");
		else
			out.println("Sorry, You are not an user..");
		     }catch(Exception e)
                        {
                            out.println(e.toString());
                        }
                    }
                    %>  ---->
                </td>
            </tr>
 </div>
  </div>
        </table>
        </form>
</div>
    <div class="col-md-2">
</div>
</div>
</div>


</body>
</html>