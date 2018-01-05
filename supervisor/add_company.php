<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_company'])){

		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];
		
		
        $conn->query("INSERT INTO `companies` VALUES('$Name','$Address','$Email','$City')") or die(mysqli_error());
			header("location: company.php");
		
	}
?>