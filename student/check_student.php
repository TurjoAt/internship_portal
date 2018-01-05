<?php
	require_once '../connect.php';
	if(isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `person` WHERE `Email` = '$email' && `password` = '$password'") or die(mysqli_error());
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
		//echo 'Success';
		session_start();
		$_SESSION['PersonID'] = $fetch['PersonID'];
		header("location:home.php");
	}else{
		//echo 'Error';
		header("location:index.php");
	}


}
	?>