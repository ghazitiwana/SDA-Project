<?php 
	$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged');

	if (isset($_POST['teachersignup'])) {
		$Name = mysqli_real_escape_string($db, $_POST['fname']);
		$Email = mysqli_real_escape_string($db, $_POST['email']);
		$Password1 = mysqli_real_escape_string($db, $_POST['pass']);
		$Type = mysqli_real_escape_string($db, $_POST['account']);

		$Password = md5($Password1);
		mysqli_query($db, "INSERT INTO teachers (Name, Email, Password, Type) VALUES ('$Name', '$Email', '$Password', '$Type')");

	}

	if (isset($_POST['studentsignup'])) {
		$Name = mysqli_real_escape_string($db, $_POST['sname']);
		$Email = mysqli_real_escape_string($db, $_POST['semail']);
		$Password1 = mysqli_real_escape_string($db, $_POST['spass']);
		$Type = mysqli_real_escape_string($db, $_POST['saccount']);

		$Password = md5($Password1);
		mysqli_query($db, "INSERT INTO students (Name, Email, Password, Type) VALUES ('$Name', '$Email', '$Password', '$Type')");

	}



?>