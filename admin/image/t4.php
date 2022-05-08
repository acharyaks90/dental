<%@ page import="java.sql.*"%>
<html>

<body>

<div class="container">
<div class="row">
<div class="col-md-12">




      <form class="" " role="search">

<table class="table"border="2" style="background-color:maroon;">
<tr >
<td >

<select class="form-control"name="t1">
  <option>math</option>
  <option>c++</option>
  <option>Physics</option>
  <option>IT</option>
  <option>c</option>
  <option>DMS</option>
  <option>Data structure</option>
  <option>DMBS</option>
  <option>PHP</option>
  <option></option>

</select>

</td>        
       
<td><button type="submit" name="b2"class="btn btn-default  glyphicon glyphicon-search"></button></td></tr>

</form>
   
</div>
</div>
</div>


<%
	if(request.getParameter("b2")!=null)
	{
		Connection con=null;
		Statement st;
		ResultSet rs;
		try{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			String serverName = "localhost";
			String portNumber = "1521";
			String sid = " ";
        			String url = "jdbc:oracle:thin:@" + serverName + ":" + portNumber + ":" + sid;
			con=DriverManager.getConnection(url,"system","auto");
			st=con.createStatement();
			String specialization=request.getParameter("t1");


			  rs=st.executeQuery("select * from teacher where specialization='"+specialization+"' ");
			%>
			<table class="table table-striped  table-hover" width="500px"border="2"  >
			<tr>
			<td colspan="5" style="background-color:red;color:white;"align="center">Record window</td>
			</tr>
			<tr>
			<td>Id</td><td>Name</td><td>Address</td><td>course</td><td>specialization</td>
			</tr>
			<%
			while(rs.next())
			{
		

			%>
				<tr>
				
					<td><%out.print(rs.getInt(1));%></td>				
					<td><%out.print(rs.getString(2));%></td>
					<td><%out.print(rs.getString(3));%></td>
					<td><%out.print(rs.getString(4));%></td>
				
					<td><%out.print(rs.getString(5));%></td>
		
				</tr>
				<%
			
			}
			
		con.close();
                           }catch(Exception e)
		{
			out.println(e.toString());
		}
		}
%>
</table>
      
   
</body>
</html>