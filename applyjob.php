
<?php
  require 'connect.php';
?>


<?php include 'head.php';?>


<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
    <link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
 <style>
  body{
  width:610px;
  font-family:calibri;
}
.error-message {
  margin-top: 30px;
  padding: 50px 20px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: white;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
    text-align: center;
}
.demo-table td {
  padding: 15px 0px;
 
}
.demoInputBox {
  padding: 10px 30px;
  border: #a9a9a9 1px solid;
  border-radius: 4px;
}
.btnRegister {
  padding: 10px 30px;
  background-color: #3367b2;
  border: 0;
  color: #FFF;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}
</style>
</head>
<body>

<table id = "table" class = "table table-bordered" style="margin-left: 400px;">
            <thead>
              <tbody>
<?php
              $act_query = $conn->query("SELECT * FROM internship i JOIN companies c ON i.CompanyID=c.CompanyID WHERE `InternshipID` = '$_REQUEST[InternshipID]'") or die(mysqli_error());
              while($act_fetch = $act_query->fetch_array()){
              ?>
              <tr>
                
                <th>Internship Code</th>
                 <td><?php echo $act_fetch['Code']?></td>
              </tr>
              <tr>
                <th>Company Name</th>
                <td><?php echo $act_fetch['Name']?></td>
                </tr>
                 <tr>
                <th>City</th>
                <td><?php echo $act_fetch['Location']?></td>
                </tr>
                <tr>
                <th>Stipend</th>
                <td><?php echo $act_fetch['Stipend']?></td>
                   </tr>
                   <tr>
                <th>Start Date</th>
                <td><?php echo $act_fetch['StartDate']?></td>
                   </tr>
                   <tr>
                <th>End Date</th>
                <td><?php echo $act_fetch['EndDate']?></td>
                   </tr>
                   <tr>
                <th>City</th>
                <td><?php echo $act_fetch['City']?></td>
                   </tr>
             <?php
           }
           ?>
                           
               
            </thead>
                           
              </tbody>
          </table>
<button style="margin-left: 650px;width:100px;"> <center><a href = "student_login.php"?StudentID=<?php echo $act_fetch['InternshipID']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Apply</a> </center></button>
    </body>

</html>      
                
                
               
                
                
                  
                
          
              
           