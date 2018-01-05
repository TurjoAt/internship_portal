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
			<div class = "alert alert-info">Company</div>
			<button type = "button" id = "add_activity" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Company</button>
			<button style = "display:none;" type = "button" id = "cancel_company" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
			<br />
			<br />
			<div id = "act_table" class = "panel panel-default">
				<div  class = " panel-heading">	
					<table id = "table" class = "table table-bordered">
						<thead>
							<tr>
								
								<th>Company Name</th>
								<th>Address</th>
								
								
								<th>Email</th>
								<th>City</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							$act_query = $conn->query("SELECT * FROM `companies`") or die(mysqli_error());
							while($act_fetch = $act_query->fetch_array()){
							?>
							<tr>
								
								<td><?php echo $act_fetch['Name']?></td>
								<td><?php echo $act_fetch['Address']?></td>
								<td><?php echo $act_fetch['Email']?></td>
								<td><?php echo $act_fetch['City']?></td>
								
								
								
								<td><center><a href = "edit_company.php?CompanyID=<?php echo $act_fetch['CompanyID']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Update</a> 

									<a href = "delete_company.php" data-toggle = "modal" data-target = "#delete_company" name = "<?php echo $act_fetch['CompanyID']?>" class = "btn btn-danger CompanyID"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></center></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>	
			</div>
			<div class = "modal fade" id = "delete_activity" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger delete_company" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div id = "act_form" style = "display:none;" class = "panel panel-default">
				<div  class = " panel-heading" >	
					<div class = "alert alert-success">Add Companies</div>
					<div style = "width:40%; margin-left:32%;">	
						<form method = "POST" action = "add_company.php">	
							<div class = "form-group">
								<label>Name</label>
								<input type = "text" class = "form-control" name = "Name" required = "required"/>
							</div>
							<div class = "form-group">
								<label>Address</label>
								<input type = "text" class = "form-control" name = "Address" required = "required"/>
							</div>

							<div class = "form-group">
								<label>Email</label>
								<input type = "text" class = "form-control" name = "Email" required = "required"/>
							</div>
							<div class = "form-group">
								<label>City</label>
								<input type = "text" class = "form-control" name = "City" required = "required"/>
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