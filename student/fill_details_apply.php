<?php
	require_once '../connect.php';
    require_once 'session.php';

	 $PersonID=$_SESSION['PersonID'];
	$InternshipID= $_GET['InternshipID'];

	
	$result=mysqli_query($conn,"SELECT * FROM `internship` WHERE `InternshipID`=$InternshipID");
	while($act_fetch = $result->fetch_array()){
		$CompanyID= $act_fetch['CompanyID'];
	}

	$result1=mysqli_query($conn,"SELECT * FROM `super` WHERE `CompanyID`=$CompanyID");
	while($act_fetch1 = $result1->fetch_array()){
		 $SupervisorID= $act_fetch1['SupervisorID'];
	}

	  

		mysqli_query($conn, "INSERT INTO placements (`StudentID`, `InternshipID`, `SupervisorID`, `Status`) VALUES ('$PersonID','$InternshipID','$SupervisorID','applied')") or die(mysqli_error());
		
		header('location:home.php');
	
?>