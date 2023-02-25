<?php
session_start();
if(isset($_SESSION['Email']))
{
	$con = mysqli_connect("localhost","root","","detail");
?>
<html>
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
<font size="20"> Registration Details </font><br>
<table border="1">
<tr>
<th>Email</th>
<th>password</th>
<th>Number</th>
<th>DOB</th>
<th>country</th>
<th>state</th>
<th>city</th>
<th>pincode</th>
<th>Update</th>
<th>Remove</th>
</tr>
<?php
$que = mysqli_query($con,"select * from register");
while($ans = mysqli_fetch_array($que))
{ ?>
<tr>
<td><?php echo $ans['Email']; ?></td>
<td><?php echo $ans['Password']; ?></td>
<td><?php echo $ans['Number']; ?></td>
<td><?php echo $ans['DOB']; ?></td>
<td><?php echo $ans['country']; ?></td>
<td><?php echo $ans['state']; ?></td>
<td><?php echo $ans['city']; ?></td>
<td><?php echo $ans['pincode']; ?></td>
<td><a href="update.php?id=<?php echo $ans['Email']; ?>">edit</a></td>
<td><a href="remove.php?id=<?php echo $ans['Email']; ?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>
