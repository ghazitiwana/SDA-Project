<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>UserLog</title>
</head>
<body bgcolor="#d6c2c2">
<p><a href="welcome.php">Welcome : <?php echo $_SESSION['login'];?> </a>| <a href="logout.php">Logout</a> </p>
<table align="center" border="1">
<tr>
<th>Sno.</th>
<th>User Id</th>
<th>Name</th>
<th>User Ip</th>
<th>Action Performed</th>
<th>Login Time</th>
</tr>
<?php $query=mysqli_query($db,"select * from userLog where Name='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['userIp'];?></td>
<td><?php echo $row['action'];?></td>
<td><?php echo $row['loginTime'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
</body>
</html>
<?php
} else{
header('location:logout.php');
}
?>