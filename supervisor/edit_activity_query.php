<?php
	require_once '../connect.php';
	if(ISSET($_POST['update_activity'])){

		$q_internship = $conn->query("SELECT * FROM `internship` WHERE `InternshipID` = '$_REQUEST[InternshipID]'") or die(mysqli_error());
		$p_internship = $q_internship->fetch_array();
		

		$Code = $_POST['Code'];
		$Semester = $_POST['Semester'];
		$Paid = $_POST['Paid'];
		$Hourlyrate = $_POST['Hourlyrate'];
		$Stipend = $_POST['Stipend'];
		$StartDate = $_POST['StartDate'];
        $EndDate = $_POST['EndDate'];
		$HoursPerWeek = $_POST['HoursPerWeek'];
		$Location = $_POST['Location'];
		$CompanyID = $_POST['CompanyID'];
		$Description = $_POST['Description'];

		$conn->query("UPDATE `internship` SET `Code`='$Code',`Semester`='$Semester',`Paid` = '$Paid', `Hourlyrate` = '$Hourlyrate', `Stipend` = '$Stipend', `StartDate` = '$StartDate',`EndDate` = '$EndDate', `HoursPerWeek` = '$HoursPerWeek', `Location` = '$Location', `CompanyID` = '$CompanyID', `Description` = '$Description' WHERE `InternshipID` = '$_REQUEST[InternshipID]'") or die(mysqli_error());
		header('location:activity.php');
	}
?>