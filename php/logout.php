<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

// Getting logout time in db
$username=$_SESSION['login']; // hold the user name in session
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Logout";
// query for inser user log in to data base
$query=mysqli_query($db,"insert into userlog(iD,Name,userIp,action) values('0','$username','$uip','$action')");
if($query){
session_unset();
//session_destroy();
}
$_SESSION['msg']="You have logged out successfully..!";
?>