<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Internship portal management system</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
	<div class = "container-fluid" id = "content">
		<div class = "row">	
			<div class = "col-md-2">	
			</div>
			<div class = "col-md-2">	
			</div>
			<div class = "col-md-4">	
				<div class = "panel panel-primary">
					<div class = "panel-heading">
						<h4>Student Login</h4>
					</div>
					<div class = "panel-body">
						<form method = "POST" action ="check_student.php">
							<div class = "form-group">
								<label>Email</label>
								<input type ="email" id="email" name="email" class="form-control" />
							</div>
							<div class = "form-group">
								<label>Password</label>
								<input type ="password" id="password" name="password" class="form-control" />
							</div>
							<div id="loading">
							</div>
							<br />
							<div class = "form-group">
								<button type="submit" name="submit" class="btn btn-primary form-control"><span class="glyphicon glyphicon-log-in"></span> Login</button>
								<div>
           <a href="index.php">Home  </a>    <a href="add_admin.php">Register </a> 
          </div>
							</div>
						</form>
					</div>
				</div>
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
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/script.js"></script>
</html>