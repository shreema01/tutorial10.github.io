
<?php
session_start();
if(isset($_SESSION['Email']))
{
$id = $_GET['id']; 
$con = mysqli_connect("localhost","root","","detail");
$q = mysqli_query($con,"delete from register where Email = '$id' ");
if($q)
	header('location:display.php');
else
	echo "error";
}
else
{
	header('location:index.php');
}
?>
