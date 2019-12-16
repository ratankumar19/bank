<?php

session_start();
$con=mysqli_connect("localhost","phpmyadmin","Ratankumar@96","bankdb");


?>



<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css">
	#ab1:hover{cursor: pointer;}
</style>
<body style="background: url('images/8.webp') no-repeat; background-size: cover;">
	
<div class ="container" style ="width:400px;margin-top: 100px; ">
	<div class="card">
		<img src="images/1.png" class ="card-img-top" style="width:100px;height: 50px;">
		<div class="card-body">
			<p>Enter your login Details to continue </p>
			<br>
			<form class="form-group" action ="userlogin.php" method="POST">
		<label>Account No :</label><br>
		<input type="text" name="accountno" class ="form-control" placeholder="Account no."><br>
		<label>Password :</label><br>
		<input type="password" name="password" class ="form-control" placeholder="Enter password"><br>
	<div class="row ">
    	<div class="col-sm-6">
      		<div class="text-left"> 
			<input type="submit" name="userlogin_submit" id ="ab1" class="btn btn-primary" value="submit">
		</div>
	</form>		
	</div>
 <div class="col-sm-6">
      	<div class="text-right"> 

		<a href="index.php" class="btn btn-primary">Back to Home</a>
		</div>
	</div>
<div class="col-sm-10">
     	<div class="text-center"> 
     		<h4>FOR NEW USER?</h4>

<a href="registration.php" class="btn btn-danger">Register</a></button>
</div>

</div>
</div>
</div>

<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="ssha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
<?php
if(isset($_POST['userlogin_submit']))
{

$x=$_POST['accountno'];
$y=$_POST['password'];

$query="SELECT * from registration 
where accountno='$x' AND password='$y'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result))
{
$data=mysqli_fetch_assoc($result);
$id=$data['accountno'];
$_SESSION['uid']=$id;
header('location:user_home.php');

//echo $id;

}

else{
	echo "<script>alert('Enter the correct details');</script>";
 // echo $con->error;
  //echo "rat";
}
}
?>


