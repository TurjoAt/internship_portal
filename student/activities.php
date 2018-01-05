<?php
require_once '../connect.php';
?>

<html lang = "eng">
	<head>
		<title></title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	</head>
<body>
<div id = "activities" class = "tab-pane fade">
	<img src = "images/calendar.png" class = "pull-left" height = "100" width = "100"/>
	<h2 class = "text-success pull-left">Activities</h2>
	<br style = "clear:both;"/>
	<hr style = "border-top:1px solid #000;"/>
	<h3 class = "text-primary"><?php echo date("M Y", strtotime("+8 HOURS"))?></h3>
	<br />
	<div id = "act_table" class = "panel panel-default">
        <div  class = " panel-heading"> 
          
        </div>  
      </div>

</div>
</body>
</html>