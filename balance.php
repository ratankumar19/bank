<?php

session_start();
$con=mysqli_connect("localhost","phpmyadmin","Ratankumar@96","bankdb");


?>
<html>
<head>
	<title>Balance _Info</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
include("function.php");
if(isset($_POST['patient_search_submit']))
{
$contact=$_POST['search'];
$query="select * from registration where contact='$contact'";
$result=mysqli_query($con,$query);
echo"<div class=container-fluid' style='margin-top: 40px;'> 
<div class='card'>
	<div class='card-body'><a href='patient_details.php'class='btn btn-light'>Go Back</a></div>
<img src='images/3.jpeg' class='card-img-top'>
<div class='card-body' style='background-color: #3498DB ;color: #ffffff;''>
		    <table class='table table-hover'>
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
   ";
while($row=mysqli_fetch_array($result))
{

$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$contact=$row['contact'];
$docapp=$row['docapp'];
echo" <tr>
     <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";

}
echo "</tbody></table></div></div></div>";
}
?>


<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>