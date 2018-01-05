<!DOCTYPE html>
<?php
	require 'connect.php';
?>
<html lang = "en">
	<head>
		<title>Information System Society Membership</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
<br />
<br />
<br />
<?php
	$date = date("Y-m-d", strtotime("+8 HOURS"));
	$q_activity = $conn->query("SELECT * FROM `internship` WHERE '$date' BETWEEN `StartDate` AND `EndDate`") or die(mysqli_error());
	$f_activity = $q_activity->fetch_array();
	$v_activity = $q_activity->num_rows;
	if($v_activity > 0){	
		echo '<marquee><h4 class = "text-danger">'.$f_activity['title'].' - '.$f_activity['description'].'</h4></marquee>';
	}
?>
	
	</div>
	<div class = "container-fluid" id = "content">	
		<div class = "row" style = "margin-top:-120px;">	
			
			
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle = "tab">Home</a></li>
					<!--<li><a href="#aboutus" data-toggle = "tab">About us</a></li>-->
					<li><a href="#aboutus" data-toggle = "tab">Student Login</a></li>
				</ul>
				<br />
				<div class = "tab-content container-fluid">
					<?php
						include 'home.php';
						include	'aboutus.php';
						
						include 'student/index.php';
					?>
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/script.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
</html>