<?php
	require_once '../connect.php';
	if(ISSET($_POST['update_admin'])){
		$Name = $_POST['Name'];
		$password = $_POST['password'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];


		$q_admin = $conn->query("SELECT * FROM `person` WHERE `Email` = '$Email'") or die(mysqli_error());
		$v_admin = $q_admin->num_rows;
		if($v_admin >1){
			echo '<script>alert("Username already taken");</script>';
			echo '<script>window.location = "edit_admin.php?PersonID=" +'.$_REQUEST['PersonID'].'</script>';
		}else{
			$conn->query("UPDATE `person` SET `Name` = '$Name', `password` = '$password', `Email` = '$Email',`Address` = '$Address'  WHERE `PersonID` = '$_REQUEST[PersonID]'") or die(mysqli_error());
			header('location:admin.php');
		}
	}
?>