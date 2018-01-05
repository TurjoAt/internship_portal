<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_company'])){

		$Name = $_POST['Name'];
		
		$Email = $_POST['Email'];
		$Cell = $_POST['Cell'];
		$CompanyID = $_POST['CompanyID'];

		
		
       $a_query=$conn->query("INSERT INTO `super` VALUES('','$Name','$Email','$Cell','$CompanyID')") ;
          $a_valid = $a_query->num_rows;
		

		if($a_valid > 0)


		{
			echo "<script>alert('Company already taken')</script>";
			
		}
		else
		{
			header("location: super.php");
		}


	}	
		
	
?>