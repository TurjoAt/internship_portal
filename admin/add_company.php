<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_company'])){

		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];

		
		
       $a_query=$conn->query("INSERT INTO `companies` VALUES('','$Name','$Address','$Email','$City')") ;
          $a_valid = $a_query->num_rows;
		

		if($a_valid > 0)


		{
			echo "<script>alert('Company already taken')</script>";
			
		}
		else
		{
			header("location: company.php");
		}


	}	
		
	
?>