<?php
session_start();
if(isset($_SESSION['Email']))
{
?>
<html>
<head>
<title> Update Info </title>
</head>
<body>
<div>
<form action="logout.php" method="POST">
<?php
echo "Welcome"." ".$_SESSION['Email'];
?>
<br>
<input type="submit" name="submit" value="Logout">
</form>
</div>
<center>
<font size="20"> Update Form </font><br>
<form action="update2.php" method="POST">
<table border="0">
<?php
$id = $_GET['id']; 
$con = mysqli_connect("localhost","root","","detail");
$q = mysqli_query($con,"select * from register where Email = '$id' ");
while($ans = mysqli_fetch_array($q))
{
?>

<tr>
<td>Email </td>
<td> <input type="hidden" name="Email" value="<?php echo $ans['Email']; ?>"></td>
</tr>
<tr>
<td> password </td>
<td> <input type="text" name="Password" value="<?php echo $ans['Password']; ?>"></td>
</tr>
<tr>
<td> Number </td>
<td> <input type="number" name="Number" value="<?php echo $ans['Number']; ?>"></td>
</tr>
<tr>
<td>DOB</td>
<td> <input type="date" name="DOB" value="<?php echo $ans['DOB']; ?>"></td>
</tr>
<tr>
<td>country </td>
<td> <input type="text" name="country" value="<?php echo $ans['country']; ?>"></td>
</tr>
<tr>
<td>state </td>
<td> <input type="text" name="state" value="<?php echo $ans['state']; ?>"></td>
</tr>
<tr>
<td>city </td>
<td> <input type="text" name="city" value="<?php echo $ans['city']; ?>"></td>
</tr>
<tr>
<td> pincode</td>
<td> <input type="number" name="pincode" value="<?php echo $ans['pincode']; ?>"></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="Update"></td>
</tr>
<?php
}
?>
</table>
</form>
</body>
</html>
<?php
}
else
{
	header('location:display.php');
}
?>