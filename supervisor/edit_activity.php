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
				<div class = "alert alert-info">Internship/Update</div>
				<a class = "btn btn-success" href = "activity.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
				<br />
				<br />
				<div class = "panel panel-default">
					<div  class = " panel-heading" >	
						<div style = "width:40%; margin-left:32%;">	
						<?php
							$q_activity = $conn->query("SELECT * FROM `internship` WHERE `InternshipID` = '$_REQUEST[InternshipID]'") or die(mysqli_error());
							$f_activity = $q_activity->fetch_array();
						?>
						<form method = "POST" action = "edit_activity_query.php?InternshipID=<?php echo $f_activity['InternshipID']?>">	
							<div class = "form-group">
								<label>Code</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Code']?>" name = "Code" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Semester</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Semester']?>" name = "Semester" required = "required"/>
							</div>
<div class = "form-group">
								<label>Paid</label>
								
                          <input type="radio" name="Paid" value="<?php echo $f_activity['Paid']?>" <?php if(isset($_POST['paid']) && $_POST['paid']=="True") { ?>checked<?php  } ?> required > True
<input type="radio" name="Paid" value="<?php echo $f_activity['Paid']?>" <?php if(isset($_POST['paid']) && $_POST['paid']=="False") { ?>checked<?php  } ?> required > False
</div>
							<div class = "form-group">
								<label>Hourly Rate</label>
								<input type = "number" class = "form-control" value="<?php echo $f_activity['Hourlyrate']?>" name = "Hourlyrate" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Stipend</label>
								<input type = "number" class = "form-control" value="<?php echo $f_activity['Stipend']?>" name = "Stipend" required = "required"/>
							</div>

							<div class = "form-group">
								<label>Start Date</label>
								<input type = "date" style = "width:41%;"  value="<?php echo $f_activity['StartDate']?>" class = "form-control"  name = "StartDate" required = "required"/>
								</div>
							<div class = "form-group">
								<label>End Date</label>
								<input type = "date" style = "width:41%;" class = "form-control"  name = "EndDate" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Hours Per Week</label>
					<input type = "number" class = "form-control" value="<?php echo $f_activity['HoursPerWeek']?>" name = "HoursPerWeek" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Location</label>
								<input type = "text" class = "form-control" value="<?php echo $f_activity['Location']?>" name = "Location" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Select Company</label>                                
								<select name="CompanyID"  value="<?php echo $f_activity['CompanyID']?>" class = "form-control" >
									<option>select</option>
                                <?php 
                                $sql = mysqli_query($conn, "SELECT Name FROM companies");
                                while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"company\">" . $row['Name'] . "</option>";
                                }
                                ?>
                                </select>
							</div>
							<div class = "form-group">
								<label>Description</label>
								<textarea type = "text" class = "form-control" value="<?php echo $f_activity['Description']?>" name = "Description" required = "required"/></textarea> 
							</div>
							<br />
							<div class = "form-group">
								<button class = "btn btn-warning form-control" name = "update_activity"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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