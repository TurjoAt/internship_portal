<?php
	require_once '../connect.php';
	
if(ISSET($_POST['update_company'])){

		$q_company = $conn->query("SELECT * FROM `companies` WHERE `CompanyID` = '$_REQUEST[CompanyID]'") or die(mysqli_error());
		$f_company = $q_company->fetch_array();
		
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];

		$conn->query("UPDATE `companies` SET `Name` = '$Name', `Address` = '$Address', `Email` = '$Email', `City` = '$City' WHERE `CompanyID` = '$_REQUEST[CompanyID]'") or die(mysqli_error());
		header('location:company.php');
		$conn->query("UPDATE `supervisor` SET `CompanyID` = '$CompanyID' WHERE `CompanyID` = '$f_company[CompanyID]'");
	}
?>