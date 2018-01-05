<?php
	require_once '../connect.php';
	if(ISSET($_POST['update_admin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$q_admin = $conn->query("SELECT * FROM `super` WHERE `username` = '$username'") or die(mysqli_error());
		$v_admin = $q_admin->num_rows;
		if($v_admin > 0){
			echo '<script>alert("Username already taken");</script>';
			echo '<script>window.location = "edit_admin.php?super_id=" +'.$_REQUEST['super_id'].'</script>';
		}else{
			$conn->query("UPDATE `super` SET `username` = '$username', `password` = '$password', `name` = '$name' WHERE `super_id` = '$_REQUEST[super_id]'") or die(mysqli_error());
			header('location:super.php');
		}
	}
?>