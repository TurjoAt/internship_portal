<?php
	require_once '../connect.php';
	$conn->query("DELETE FROM `student` WHERE StudentID = '$_REQUEST[StudentID]'") or die(mysqli_error());
	header('location:student.php');
?>