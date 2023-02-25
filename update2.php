<?php
session_start();
if(isset($_SESSION['Email']))
{
	$con = mysqli_connect("localhost","root","","detail");
        $Email = $_POST["Email"];
        $password = $_POST["Password"];
        
        $Age= $_POST["Number"];
        $DOB= $_POST["DOB"];
        $country= $_POST["country"];
        $State= $_POST["state"];
        $City= $_POST["city"];
        $Pincode= $_POST["pincode"];

$up = mysqli_query($con,"update register set Email='$Email',Password='$password ',Number='$Age',DOB='$DOB',country='$country',state='$State',city='$City',pincode='$Pincode' where Email='$Email' ");

if($up)
	header('location:display.php');
else
	echo "error";
}
else
{
	header('location:signup.php');
}
?>
