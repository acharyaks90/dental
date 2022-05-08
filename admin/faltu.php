<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8" />
	   <title>Sweet Alert</title>
	   <link href="package/dist/sweetalert2.css" rel="stylesheet" />
</head>
<body>
  
    <button onclick="sweetalertclick()" type="button" >Try Me</button>
	
	<script src="package/dist/sweetalert2.all.min.js"></script>
	<script>
	   
	    function sweetalertclick()
		{
			
            swal({
  position: 'top-end',
  type: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer:3000
})
		}
	
	</script>
</body>
</html>