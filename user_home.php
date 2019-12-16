<?php

session_start();
if(isset($_SESSION['uid'])){
 // echo $_SESSION['uid'];	
}
else{
	header('location:userlogin.php');
}


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style ="background:url('images/3.jpeg') no-repeat;background-size:cover;height: 250px;">
	</div>
	<div class ="container" style ="margin-top:20px;margin-left: 200px;">
		<div class="row">
			<div class="col-md-10">
				<div class="card">
		    		<div class="card-body" >    
		    			<img src="images/1.png" class ="card-img-top" style="width:100px;height: 80px;"><hr>
		    		</div>
				
			
		
		


	<div class ="col-md-4">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color: #3498DB ;color: #ffffff;"border-color:#33D1FF>User_Home</a>
			
			<a href="withdrawal.php" class="list-group-item ">Withdrawal </a>
			
			<a href="credit.php" class="list-group-item ">Credit</a>
			<a href="balance.php" class="list-group-item ">Balance_Info</a>
			<a href="user_details.php" class="list-group-item ">User_Info</a>
			<a href="logout.php" class="list-group-item "> logout</a>
		</div>
	
		

	</div>
	
		       	<form class="form-group" action="func.php" method="POST">





<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>

		        
	 
		       	













	











	




