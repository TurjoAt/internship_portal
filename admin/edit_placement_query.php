<?php
	require_once '../connect.php';
	
if(ISSET($_POST['update_placement'])){

		/*$q_company = $conn->query("SELECT * FROM Placements p WHERE `pid` = ") or die(mysqli_error());
		$f_company = $q_company->fetch_array();*/
		
		// $StudentID = $_POST['Major'];
		// $InternshipID = $_POST['Code'];
		// $SupervisorID = $_POST['Supervisorname'];
		$pid=$_GET['pid'];
		 $Status = $_POST['status'];
		

mysqli_query($conn,"UPDATE `placements` SET `Status` = '$Status' WHERE `pid` = '$pid'") or die(mysqli_error());
		header('location:placement.php');
		//$conn->query("UPDATE `supervisor` SET `CompanyID` = '$CompanyID' WHERE `CompanyID` = '$f_company[CompanyID]'");
	}
?>