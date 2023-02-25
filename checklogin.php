<?php
session_start();
$con = mysqli_connect("localhost","root","","detail");


$Email = $_POST["em"];
$password = $_POST["pswd"];

$que = mysqli_query($con,"select * from usersdata where Email='$Email'");
while($ans=mysqli_fetch_array($que))
{
	$a=$ans['Email'];
	$b=$ans['Password'];
}
if($Email == $a and $password == $b)
{
	$_SESSION['Email']=$Email;
	header('location:signup.php');
}
else
{
	header('location:index.php');
}

?>