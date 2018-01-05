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

$qry="SELECT * FROM companies WHERE CompanyID=$Name";
$result = mysqli_query($qry);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
    mysqli_query("INSERT INTO `internship` VALUES('$Code','$Semester','$Paid','$Hourlyrate','$Stipend','$StartDate','$EndDate', '$HoursPerWeek','$Location','$CompanyID','$Description')");
   mysqli_query("INSERT INTO `Skill` VALUES('$SkillDescription')");

}else{
    echo " is not valid!!!";
}
		

		
		header('location: activity.php');
	}
?>