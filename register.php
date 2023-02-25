
<?php
session_start();
if(isset($_SESSION['Email']))
{ 
    $con = mysqli_connect("localhost","root","","detail");
$Email = $_POST["em"];
$password = $_POST["pswd"];
$Repassword = $_POST["rpswd"];
$Age= $_POST["age"];
$DOB= $_POST["DOB"];
$country= $_POST["co"];
$State= $_POST["state"];
$City= $_POST["city"];
$Pincode= $_POST["pincode"];

$sql="INSERT INTO register (Email,Password,Number,DOB,country,state,city,pincode) VALUES ('$Email','$password','$Age','$DOB','$country','$State','$City','$Pincode');";

$que=mysqli_query($con,$sql);

if($que)
	header('location:display.php');
else
	echo "error";
}
else
{
	header('location:index.php');
}

?>






 
