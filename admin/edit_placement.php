<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
?>
<html lang = "eng">
	<head>
		<title>Internship portal management system</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->

<!-------------------SIDEBAR0------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR0------------------>

		<div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">Placments/Update</div>
				<a class = "btn btn-success" href = "placement.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
				<br />
				<br />
				<div class = "panel panel-default">
					<div  class = " panel-heading" >	
						<div style = "width:40%; margin-left:32%;">	
						<?php
						$pid=$_GET['pid'];
							$q_activity = $conn->query("SELECT * FROM Placements p JOIN student s on p.StudentID=s.PersonID JOIN internship i on p.InternshipID=i.InternshipID JOIN super su on p.SupervisorID=su.SupervisorID") or die(mysqli_error());
							$f_activity = $q_activity->fetch_array();
						?>
						<form method = "POST" action = "edit_placement_query.php?pid=<?php echo $f_activity['pid']?>">	
							<div class = "form-group">
								<label>Major</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Major']?>" name = "Major" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Internship Code</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Code']?>" name = "Code" required = "required"/>
							</div>

							<div class = "form-group">
								<label>Supervisor Name</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Name']?>" name ="Supervisorname" required = "required"/>
							</div>
							<div class="form-group">
								<label>Status</label>
								<div class = "form-group">
								<select name="status">
                                        <option value="Accepted">Accepted</option>
                                        <option value="Rejected">Rejected</option>
                                        
                                       </select>
                                      </div>							</div>

<div class = "form-group">
							
							<div class = "form-group">
								<button class = "btn btn-primary form-control" name = "update_placement"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>	
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
	<nav class = "navbar-default" id = "footer">
		
		<label class = "navbar-brand ">Developed By: Vishwas</label>
	</nav>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
</html>