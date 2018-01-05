<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_company'])){

		$sName = $_POST['sName'];
        $Major = $_POST['Major'];
		//$cName = $_POST['cName'];
		$Code = $_POST['Code'];
		$Status = $_POST['Status'];
		$Note = $_POST['Note'];
		
		echo $abc="INSERT INTO `placements` VALUES (null,'$sName','$Major','$Code','$Status','$Note')";
        mysqli_query($conn,$abc) or die(mysqli_error());
			header("location: placement.php");
		
	}
?>