<?php
session_start();
$con=mysqli_connect("localhost","phpmyadmin","Ratankumar@96","bankdb");
/*if(isset($con)){
	echo "ok";
*/
if(isset($_POST['login_submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from adlogintb where adusername='$username' and adpassword='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{

$id=$data['accountno'];
$_SESSION['uid']=$id;
header("Location:admin_home.php");
}
else
{
	echo "<script>alert('Enter the correct details.');</script>";
	echo "<script>window.open('adminlogin.php','_self')</script>";

}

}
//backend of registration page
if(isset($_POST['account_register']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$contact=$_POST['contact'];

//$tempimg=$_FILES['photo']['tmp_name'];
//$photo=$_POST['photo'];
$file_name=$_FILES['photo']['name'];
$file_type=$_FILES['photo']['type'];
$file_size=$_FILES['photo']['size'];
$file_temp_loc=$_FILES['photo']['tmp_name'];
$file_store="upload/".$file_name;


//$imgname=$_FILES['photo'];
//print_r($imgname);

$img_store="uploadimg/".$imgname;
/*if(move_uploaded_file($file_temp_loc,$file_store))
	{
		echo "file uploaded ";

	}*/

$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$district=$_POST['district'];
$zipcode=$_POST['zip'];
$accountType=$_POST['accountType'];
$amount=$_POST['amount'];
$accountno=$_POST['accountno'];
//print_r($accountType);
//echo $accountType;
$query="INSERT INTO registration(name,password,gender,email,contact,photo,address,state,city,district,zip,accountType,amount,accountno) VALUES ('$name','$password','$gender','$email','$contact','$file_name','$address','$state','$city','$district','$zipcode','$accountType','$amount','$accountno')";

$result=mysqli_query($con,$query);

if($result)
{

echo "<script>alert('Account Registered');</script>";
//echo "<script>window.open('admin-panel.php','_self')</script>";

}
else{
  echo $con->error;
}

}
//backend of user_details page

function get_user_details()
{
global $con;
$query="select * from registration";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
$name=$row['name'];
$password=$row['password'];
$email=$row['email'];
$contact=$row['contact'];
$accountno=$row['accountno'];
echo "<tr>
     <td>$name</td>
     <td>$password</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$accountno</td>
    </tr>";

}

}
//backend of Account_deatils page

function get_account_details()
{
global $con;
$query="select * from registration";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
$name=$row['name'];
$accountType=$row['accountType'];
$amount=$row['amount'];
$accountno=$row['accountno'];
echo "<tr>
     <td>$name</td>
     <td>$accountType</td>
      <td>$amount</td>
      <td>$accountno</td>
    </tr>";

}

}










?>




