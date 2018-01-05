<?php
	require_once '../connect.php';
	
if(ISSET($_POST['update_placement'])){

		$q_company = $conn->query("SELECT * FROM Placements p JOIN Student s ON p.StudentID=s.StudentID JOIN internship i ON p.InternshipID=i.InternshipID JOIN supervisor su ON p.SupervisorID=su.SupervisorID JOIN companies c ON su.CompanyID=c.CompanyID WHERE `CompanyID` = '$_REQUEST[CompanyID]'") or die(mysqli_error());
		$f_company = $q_company->fetch_array();
		
		$Major = $_POST['Major'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];

		$conn->query("UPDATE `companies` SET `Name` = '$Name', `Address` = '$Address', `Email` = '$Email', `City` = '$City' WHERE `CompanyID` = '$_REQUEST[CompanyID]'") or die(mysqli_error());
		header('location:company.php');
		$conn->query("UPDATE `supervisor` SET `CompanyID` = '$CompanyID' WHERE `CompanyID` = '$f_company[CompanyID]'");
	}
?>