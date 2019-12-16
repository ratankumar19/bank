


<?php

session_start();
$con=mysqli_connect("localhost","phpmyadmin","Ratankumar@96","bankdb");

if (isset($con)) {
	
}
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
<form class="form-group" action ="adminlogin.php" method="POST">
		<label>Admin_Username:</label><br>
		<input type="text" name="username" class ="form-control" placeholder="Enter username"><br>
		<label>Password :</label><br>
		<input type="password" name="password" class ="form-control" placeholder="Enter password"><br>
<div class="row ">
    <div class="col-sm-6">
      	<div class="text-left"> 
			<input type="submit" name="login_submit" id ="ab1" class="btn btn-primary">
		</div>
		
	</div>

   <div class="col-sm-6">
      	<div class="text-right"> 

<a href="index.php" class="btn btn-primary">Back to Home</a>

       </div>

   </div>
</div>
 </form>
</div></div></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
<?php
if(isset($_POST['login_submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * from adlogintb where adusername='$username' and adpassword='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{

	$id=$password;
$_SESSION['uid']=$id;

header("Location:admin_home.php");
}
else
{

	echo "<script>alert('Enter the correct details.');</script>";

	echo "<script>window.open('adminlogin.php','_self')</script>";

}
}
?>
