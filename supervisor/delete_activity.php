<?php
	require_once '../connect.php';
	
	
		$conn->query("DELETE FROM `internship` WHERE `InternshipID` = '$_REQUEST[InternshipID]'") or die(mysqli_error());
		header('location:activity.php');
	
?>