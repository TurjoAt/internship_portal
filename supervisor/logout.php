<?php
	session_start();
	session_unset('CompanyID');
	header('location:index.php');
?>