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
				<div class = "alert alert-info">students profile</div>
				
				<button style = "display:none;" type = "button" id = "cancel_student" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div id = "s_table" class = "panel panel-default">
					<div  class="panel-heading">	
						<table id="table" class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Grad Year</th>
									<th>Major</th>
									<th>Status</th>
									<!--<th>Action</th>-->
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM person p Join student s on p.PersonID=s.PersonID Join placements pl on p.PersonID=pl.StudentID") or die(mysqli_error());
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['Name']?></td>
									
									<td><?php echo $s_fetch['Email']?></td>
									<td><?php echo $s_fetch['GradYear']?></td>
									<td><?php echo $s_fetch['Major']?></td>
                                    
									
                                    <td><?php echo $s_fetch['Status']?></td>
									
									<!-- <td><center> <a href = "delete_student.php" data-toggle = "modal" data-target = "#delete_activity" name = "<?php echo $act_fetch['StudentID']?>" class = "btn btn-danger StudentID"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></center></td> -->
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				<div class = "modal fade" id = "delete_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content ">
							<div class = "modal-body">
								<center><label class = "text-danger">Are you sure you want to delete this particulars?</label></center>
								<br />
								<center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
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
<script src = "../js/sidebar.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.StudentID').on('click', function(){
			$StudentID = $(this).attr('name');
			$('.delete_student').on('click', function(){
				window.location = 'delete_student.php?StudentID=' + $StudentID;
			});
		});
	});
</script>
</html>