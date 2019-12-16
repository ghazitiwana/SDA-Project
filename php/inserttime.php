<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

if($_SESSION['login']) { 
	$totalTime = mysqli_real_escape_string($db, $_POST['totalTime']);
	$user = mysqli_real_escape_string($db, $_SESSION['login']);
	$videoname = mysqli_escape_string($db, $_POST['videoName']);

	mysqli_query($db, "INSERT INTO watchTimes (username, videoname, timeWatched) VALUES ('$user', '$videoname', $totalTime)");
}
else {
	header('location:homepage.php');
}


?>