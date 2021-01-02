<?php

	$server = "sql304.epizy.com";
	$username = "epiz_27206896";
	$password = "zPpgAH6rJy";
	$db = "epiz_27206896_codeit_message";
	$con = mysqli_connect($server, $username, $password, $db);

	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$query = "INSERT INTO message ( fname , lname , mobile , email , feedback ) values ( '$fname' , '$lname' , '$mobile' , '$email' , '$message' )";
		$result = mysqli_query($con, $query);
		header('location:index.php');
	}
	
?>