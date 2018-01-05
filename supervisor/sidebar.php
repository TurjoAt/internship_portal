<div id = "sidebar">
	<ul id = "menu" class = "nav menu">
		<li>
			<a>
				<?php 
					require_once '../connect.php';
					$q_admin_side = $conn->query("SELECT * FROM `super` WHERE `super_id` = '$_SESSION[super_id]'") or die(mysqli_error());
					$f_admin_side = $q_admin_side->fetch_array();
					echo "<center>".$f_admin_side['name']."</center>";
				?>
			</a>
		</li>
		<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
		<li><a href = ""><i class = "glyphicon glyphicon-user"></i> Accounts</a>
			<ul>
				<li><a href = "super.php"><i class = "glyphicon glyphicon-user"></i> Supervisor</a></li>
               <!-- <li><a href = "students_details.php"><i class = "glyphicon glyphicon-user"></i> students_Acc</a></li>-->
				
			</ul>
		</li>
		
		<li><a href = "placement.php"><i class = "glyphicon glyphicon-calendar"></i>Placements</a></li>
		
		<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Options</a>
			<ul>
				<li><a href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
</div>