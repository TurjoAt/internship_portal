<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_activity'])){

		$Code = $_POST['Code'];
		$Semester = $_POST['Semester'];
		$Paid = $_POST['Paid'];
		$Hourlyrate = $_POST['Hourlyrate'];
		$Stipend = $_POST['Stipend'];
		$SkillDescription= $_POST['Skill'];
		$StartDate = $_POST['StartDate'];
        $EndDate = $_POST['EndDate'];
		$HoursPerWeek = $_POST['HoursPerWeek'];
		$Location = $_POST['Location'];
		$CompanyID = $_POST['CompanyID'];
		$Description = $_POST['Description'];

	mysqli_query($conn,"INSERT INTO `internship` VALUES(null,$Code,'$Semester','$Paid','$Hourlyrate','$Stipend','$StartDate','$EndDate', '$HoursPerWeek','$Location','$CompanyID','$Description')");

   	mysqli_query($conn,"INSERT INTO `Skills` VALUES(null,'$SkillDescription')");
		
		header('location: activity.php');
	}
?>