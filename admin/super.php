<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "eng">
	<head>
		<title>InternMSU</title>
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
<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>

		<div id = "sidecontent" class = "well pull-right">
			<div class = "alert alert-info">Supervisor</div>
			<button type = "button" id = "add_activity" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Supervisor</button>
			<button style = "display:none;" type = "button" id = "cancel_company" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
			<br />
			<br />
			
			
			<div id = "act_form" style = "display:none;" class = "panel panel-default">
				<div  class = " panel-heading" >	
					<div class = "alert alert-success">Add Supervisor</div>
					<div style = "width:40%; margin-left:32%;">	
						<form method = "POST" action = "add_super.php">	
							<div class = "form-group">
								<label>Name</label>
								<input type = "text" class = "form-control" name = "Name" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Email</label>
								<input type = "text" class = "form-control" name = "Email" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Phone</label>
								<input type = "number" class = "form-control" name = "Cell" required = "required"/>
							</div>
<div class = "form-group">
								<label>Select Company</label>                                
								<select name="CompanyID" class = "form-control" >
									<option>select</option>
                                <?php 
                                $sql = mysqli_query($conn, "SELECT * FROM companies");
                                while ($row = $sql->fetch_assoc()){
                                echo "<option value=".$row['CompanyID'].">" . $row['Name'] . "</option>";
                                }
                                ?>
                                </select>
							</div>
							
							<div class = "form-group">
								<button class = "btn btn-primary form-control" name = "save_company"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>	
					</div>	
				</div>
			</div>
		<br /><br /><br />
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
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.CompanyID').on('click', function(){
			$CompanyID = $(this).attr('name');
			$('.delete_company').on('click', function(){
				window.location = 'delete_company.php?CompanyID=' + $CompanyID;
			});
		})
	});
</script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
</html>