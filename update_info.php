<?php

$ac=$_GET['ac'];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style ="background:url('images/9.jpg') no-repeat;background-size:cover;height: 250px;">
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
			<a href="" class="list-group-item active" style="background-color: #3498DB ;color: #ffffff;"border-color:#33D1FF>Update_info</a>
			<?php
			echo "<a href='email.php?ac=$ac' class='list-group-item'>E-mail_Update</a>";
			?>
			<?php
			echo "<a href='contact.php?ac=$ac' class='list-group-item'>Conatact_Update</a>";
			?>
			<?php
			echo "<a href='password.php?ac=$ac' class='list-group-item'>Password_Update</a>";
			?>
			
			<a href="index.php" class="list-group-item ">SignOut</a>
		</div>
	
		

	</div>
	</div>
</div>
</div>
</div>

		       	





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>
</html>

		        
	 
		       	













	











	




