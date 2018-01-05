<?php
	session_start();
	if(!ISSET($_SESSION['PersonID'])){
		header("location:index.php");
	}
?>