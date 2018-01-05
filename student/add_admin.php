<!DOCTYPE html>
<?php
require_once '../connect.php';
?>
<html lang = "eng">
	<head>
		<title>Information Tracking System</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	</head>
<body>
<!--------------------HEAD---------------------->


<!-------------------SIDEBAR------------------>

<!-------------------SIDEBAR------------------>

		
					<div  class = " panel-heading" >	
							<div class = "alert alert-success">Student Registration</div>
							<div style = "width:30%; margin-left:32%;">	
<form method = "POST" action = "#">	
									<div class = "form-group">
										<label>Name</label>
										<input type = "text" class = "form-control"  name ="name" required="" />
									</div>
									<div class = "form-group">
										<label>Address</label>
										<input type="text" class ="form-control" name="address" required/>
									</div>
									<div class = "form-group">
										<label>Email</label>
										<input type = "text" class = "form-control"  name = "email" required="" />
									</div>
									<div class = "form-group">
										<label>Phone</label>
										<input type = "text" class = "form-control"  name = "cell" required="" />
									</div>
									<div class = "form-group">
										<label>Password</label>
										<input type = "password" class = "form-control"  name = "password" required="" />
									</div>
									<div class = "form-group">
										<label>Major</label>
										<input type="text" class="form-control" name="major" required/>
									</div>
									<div class = "form-group">
										<label>Gradation Year</label>
										<input type="text" class="form-control" name="year" required="" />
									</div>
									<div class = "form-group">
								<label>Select Skills</label>                                
								<select name="SkillID" class = "form-control" >
									<option>select</option>
                                <?php 
                                $sql = mysqli_query($conn, "SELECT * FROM skills");
                                while ($row = $sql->fetch_assoc()){
                                echo "<option value=".$row['SkillID'].">" . $row['SkillDescription'] . "</option>";
                                
                                }
                                ?>
                                </select>
							</div>
									<div class = "form-group">
										<button class = "btn btn-primary form-control" name = "save_student"><span class = "glyphicon glyphicon-save"></span> Register</button>
									</div>
								</form>	
</div>
</div>
</div>


</div>
</body>
</html>
<?php
	
	if(ISSET($_POST['save_student'])){	
		
		$Name = $_POST['name'];
		$Address = $_POST['address'];
		
		$Email = $_POST['email'];
		$password = $_POST['password'];
        $Cell = $_POST['cell'];
        $Major = $_POST['major'];   
		$SkillID = $_POST['SkillID'];
        $Year = $_POST['year'];


		$a_query = $conn->query("SELECT * FROM `person` WHERE `Email` = '$Email'") or die(mysqli_error());
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Username already taken')</script>";
			echo "<script>window.location = 'admin.php'</script>";
		}else{
			mysqli_query($conn,"INSERT INTO `person` VALUES(null,'$Name','$Address', '$Email','$Cell','$password')") or die(mysqli_error());
			$last_id = mysqli_insert_id($conn);
		
			mysqli_query($conn,"INSERT INTO `student` VALUES(null,'$Major', '$Year',$last_id)") or die(mysqli_error());
			
          mysqli_query($conn,"INSERT INTO `skills_student` VALUES(null,$last_id,'$SkillID')");


			header('location:admin.php');
		}
	}	
?>