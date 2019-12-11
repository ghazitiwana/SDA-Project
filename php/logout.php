<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

// Getting logout time in db
$username=$_SESSION['login']; // hold the user name in session
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Logout";
// query for inser user log in to data base
$query=mysqli_query($db,"insert into userlog(username,userIp,action) values('$username','$uip','$action')");
if($query){
session_unset();
//session_destroy();
}
$extra="homepage.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();;
?>