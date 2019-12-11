<?php 
	$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

	if (isset($_POST['teachersignup'])) {
		$name = mysqli_real_escape_string($db, $_POST['fname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['pass']);
		$type = mysqli_real_escape_string($db, $_POST['account']);
		$username = mysqli_real_escape_string($db, $_POST['username']);

		$password = md5($password1);
		mysqli_query($db, "INSERT INTO teachers (name, email, password, type, username) VALUES ('$name', '$email', '$password', '$type', '$username')");

	}

	if (isset($_POST['studentsignup'])) {
		$name = mysqli_real_escape_string($db, $_POST['sname']);
		$email = mysqli_real_escape_string($db, $_POST['semail']);
		$password1 = mysqli_real_escape_string($db, $_POST['spass']);
		$type = mysqli_real_escape_string($db, $_POST['saccount']);
		$username = mysqli_real_escape_string($db, $_POST['susername']);

		$password = md5($password1);
		mysqli_query($db, "INSERT INTO students (name, email, password, type, username) VALUES ('$name', '$email', '$password', '$type', '$username')");

	}



?>