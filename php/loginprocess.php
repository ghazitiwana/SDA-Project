<?php


$username = $_POST['user'];
$password = $_POST['password'];

$user = stripcslashes($username);
$pass = stripcslashes($password);

$password = md5($pass);



$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

session_start();

$result = mysqli_query($db, "SELECT * FROM teachers WHERE username = '$user' AND password = '$password'") or die ("Failed");
$result2 = mysqli_query($db, "SELECT * FROM students WHERE username = '$user' AND password = '$password'") or die ("Failed");
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
if($row['username'] == $user && $row['password'] == $password){
	$_SESSION['login']=$user; // hold the user name in session
	$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
	$action="Login";// query for inser user log in to data base
	mysqli_query($db,"insert into userlog(username,userIp,action) values('".$_SESSION['login']."','$uip','$action')");
	$extra="welcometeacher.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
}

elseif ($row2['username'] == $user && $row2['password'] == $password) {
  	$_SESSION['login']=$user; // hold the user name in session
	$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
	$action="Login";// query for inser user log in to data base
	mysqli_query($db,"insert into userlog(username,userIp,action) values('".$_SESSION['login']."','$uip','$action')");
	$extra="welcomestudent.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();;
}
else {
	echo "Failed to login";
}


?>