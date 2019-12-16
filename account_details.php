<!DOCTYPE html>
<?php include("function.php");?>
<html>
<head>
	<title>Account Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="jumbotron" style ="background:url('images/9.jpg') no-repeat;background-size:cover;height: 250px;">
</div>


<div class="container-fluid">
	<div class="row">
		<div class ="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: #3498DB ;color: #ffffff;"border-color:#33D1FF>Account Details</a>
				<a href="admin_home.php" class="list-group-item ">Admin_Home</a>
				<a href="user_details.php" class="list-group-item ">User_details</a>
				<a href="index.php" class="list-group-item ">Sign_Out</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB ;color: #ffffff;">
		   			<img src="images/1.png"  class ="card-img-top"class ="card-img-top" style="width:100px;height: 80px;">
		   					<div class="text-right"> 
		    					<a href="admin_home.php" class="btn btn-light">Go Back</a>
		    				</div>
		    	
		    				
		    	 		<div class="col-md-8">
		    				
		    			</div>
		    		</div>
		    	</div>
		    <div class="card-body" style="background-color: #3498DB ;color: #ffffff;">>
		    <table class="table table-hover">
		   <thead>
	 
     <tr> 
      <th>UserName</th>
      <th>Account Type</th>
      <th>Balance</th>
      <th>Account NO.</th>
    </tr>
  		</thead>
	<tbody>
   
    <?php get_account_details();?>
      
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