<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

if($_SESSION['login']) { 
	$marks = mysqli_real_escape_string($db, $_POST['quizresult']);
	$user = mysqli_real_escape_string($db, $_SESSION['login']);

	mysqli_query($db, "INSERT INTO quiz_results (username, marks_out_of_5) VALUES ('$user', $marks)");

	header('location:welcomestudent.php');
}
else {
	header('location:homepage.php');
}


?>