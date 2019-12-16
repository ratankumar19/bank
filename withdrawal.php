<?php

session_start();
$con=mysqli_connect("localhost","phpmyadmin","Ratankumar@96","bankdb");
if(isset($_SESSION['uid'])){
$id=$_SESSION['uid'];
if(isset($_POST['proceed']))
{

$withdrawal=$_POST['withdrawalamt'];
echo $withdrawal;
$query1="SELECT  amount FROM registration WHERE accountno='$id'";

$result1=mysqli_query($con,$query1);
$data1=mysqli_fetch_assoc($result1);
if($data1['amount']>$withdrawal)
{
	$query="UPDATE registration SET amount=amount-'$withdrawal' WHERE accountno='$id'";
$result=mysqli_query($con,$query);

if($result)
{   $data=mysqli_fetch_assoc($result);
	$amt=$data['amount'];
	echo $amt;
	?>
	<script> alert('Transacation successfull');</script>-->
	<?php
	}}
	else
	{
		 
	echo "<script>alert('Insufficient Fund');</script>";
	}

}
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
<style type="text/css">
	#ab1:hover{cursor: pointer;}
</style>
<body style="background: url('images/8.webp') no-repeat; background-size: cover;">
<a href="logout.php" class="btn btn-primary" >logout</a>
<form class="form-group" action ="withdrawal.php" method="POST">
<div class ="container" style ="width:400px;margin-top: 100px;">
	<div class="card">
		<img src="images/1.png" class ="card-img-top" style="width:100px;height: 50px;">
		<div class="card-body">

		<label>Withdrawal Amount:</label><br>
		<input type="text" name="withdrawalamt" class ="form-control" placeholder="Enter Amount"><br>
		
<div class="row ">
    <div class="col-sm-6">
      	<div class="text-left"> 
			<input type="submit" name="proceed" id ="ab1" class="btn btn-primary" value="proceed">
		</div>





	
	</div>
 <div class="col-sm-6">
      	<div class="text-right"> 

<a href="index.php" class="btn btn-primary">Back to Home</a>



</div>
</div>
 
</div>
</div>
</div>
</div>

</form>
<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>


