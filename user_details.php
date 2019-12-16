<!DOCTYPE html>
<?php include("function.php");?>
<html>
<head>
	<title>User Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron" style ="background:url('images/9.jpg') no-repeat;background-size:cover;height: 250px;"></div>
<div class="container">
	<div class="card">
		    <div class="card-body" style="background-color: #3498DB ;color: #ffffff;">
		    	<div class="row">
		    			<div class="col-md-1">
		    				<a href="admin_home.php" class="btn btn-light">Go Back</a>
		    			</div>
		    	
		    <div class="col-md-3"><h4>User_Details</h4> </div>
		    <div class="col-md-8">
		    	<form class="form-group" action="user_info.php" method="POST">
		    		<div class="row">
		    		<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter Account No."></div>
		    		<div class="col-md-2"><input type="submit" name="user_info_submit" class="btn btn-light" value="Search">
		    		</div></div>
		    	</form>
		    </div>
		    </div></div>
		    <div class="card-body" style="background-color: #3498DB ;color: #ffffff;">>
		    <table class="table table-hover">
  <thead>
    <tr>
      
      <th>UserName</th>
      <th>Password.</th>
      <th>Email-id</th>
      <th>Mobile No. </th>
     <th>Account NO.</th>
    </tr>
  </thead>
  <tbody>
   
    <?php get_user_details();?>
      
  </tbody>
</table>
</div>
		</div>
		</div>
		</div>

































<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>