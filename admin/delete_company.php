<?php
	require_once '../connect.php';
	
	
		$conn->query("DELETE FROM `companies` WHERE `CompanyID` = '$_REQUEST[CompanyID]'") or die(mysqli_error());
		header('location:companies.php');
	
?>