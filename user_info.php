<html>
<head>
	<title>Profile Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
include("function.php");
if(isset($_POST['user_info_submit']))
{
$accountno=$_POST['search'];
$query="select * from registration where accountno='$accountno'";
$result=mysqli_query($con,$query);
echo"<div class=container' style='margin-top: 40px; width:1900px;'> 
<div class='card'>
<div class='row'>
		    			<div class='col-md-3'>
		    				<a href='user_details.php'class='btn btn-light'>Go Back</a>
		    			</div>
	




		    			<div class='col-md-4' style='text-align:right'> 

		    				<a href='update_info.php?ac=$accountno'class='btn btn-light'>Update_info</a>
		    			</div>
		    			

		    			<div class='col-md-4' style='text-align:right'> 

		    				<a href='index.php'class='btn btn-danger'>Logout</a>
		    			</div>
		    			

	
	<img src='images/9.jpg' style='background-size:cover; margin-right:20px; height: 400px;' class='card-img-top' >
<div class='card-body' style='background-color: #3498DB ;color: #ffffff;''>
		    
	<div style='overflow-x:auto;'>
    <table class='table table-hover'>

		    <thead>
    <tr>
      
      <th>UserName</th>
      <th>Password.</th>
      <th>Gender</th>
      <th>Email-id</th>
      <th>Mobile No. </th>
      <th>Address</th>
      <th>State</th>
      <th>City</th>
      <th>District</th>
      <th>Zip</th>
      <th>Account Type</th>
      <th>Amount</th>
      <th>Account NO.</th>
      <th>Image</th>
	</tr>
  </thead>

  <tbody>
   ";
while($row=mysqli_fetch_array($result))
{

$name=$row['name'];
$password=$row['password'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$contact=$row['contact'];
$address=$row['address'];
$state=$row['state'];
$city=$row['city'];
$district=$row['district'];
$zipcode=$row['zip'];
$accountType=$row['accountType'];
$amount=$row['amount'];

$accountno=$row['accountno'];
$image=$row['photo'];

echo "<tr>
     <td>$name</td>
     <td>$password</td>
     <td>$gender</td>
     <td>$email</td>
     <td>$contact</td>
     <td>$address</td>
     <td>$state</td>
     <td>$city</td>
     <td>$district</td>
     <td>$zipcode</td>
      <td>$accountType</td>
      <td>$amount</td>
      <td>$accountno</td>
      <td ><img src='upload/$image' style='height:100px; width:100px;'/></td>
    </tr>";


}
echo "</tbody></table></div></div>";
}
?>


<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>