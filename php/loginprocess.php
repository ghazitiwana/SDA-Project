<?php


$name = $_POST['user'];
$password = $_POST['password'];

$name = stripcslashes($name);
$pass = stripcslashes($password);

$password = md5($pass);



$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

session_start();

$result = mysqli_query($db, "SELECT * FROM teachers WHERE Name = '$name' AND Password = '$password'") or die ("Failed");
$result2 = mysqli_query($db, "SELECT * FROM students WHERE Name = '$name' AND Password = '$password'") or die ("Failed");
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
if($row['Name'] == $name && $row['Password'] == $password){
	$_SESSION['login']=$name; // hold the user name in session
	$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
	$action="Login";// query for inser user log in to data base
	mysqli_query($db,"insert into userlog(id,Name,userIp,action) values('1','".$_SESSION['login']."','$uip','$action')");
	$extra="quiz.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
}

elseif ($row2['Name'] == $name && $row2['Password'] == $password) {
  	$_SESSION['login']=$name; // hold the user name in session
	$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
	$action="Login";// query for inser user log in to data base
	mysqli_query($db,"insert into userlog(id,Name,userIp,action) values('1','".$_SESSION['login']."','$uip','$action')");
	$extra="quiz.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();;
}
else {
	echo "Failed to login";
}


?>