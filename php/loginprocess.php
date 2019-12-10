<?php

$name = $_POST['user'];
$password = $_POST['password'];

$name = stripcslashes($name);
$pass = stripcslashes($password);

$password = md5($pass);



$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

$result = mysqli_query($db, "SELECT * FROM teachers WHERE Name = '$name' AND Password = '$password'") or die ("Failed");
$result2 = mysqli_query($db, "SELECT * FROM students WHERE Name = '$name' AND Password = '$password'") or die ("Failed");
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
if($row['Name'] == $name && $row['Password'] == $password){
	echo "Teacher Login successful!";
}

elseif ($row2['Name'] == $name && $row2['Password'] == $password) {
  	echo "Student Login successful!";
}
else {
	echo "Failed to login";
}


?>