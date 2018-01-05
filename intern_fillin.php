
<?php
        require_once 'connect.php';           
                        
    if (isset($_POST['submit'])){
    
          $Name=$_POST['Name'];
    $Email =$_POST['Email'];
    $GradYear =$_POST['GradYear'];
    $Major=$_POST['Major'];
    $Password=$_POST['Password'];
    $Skills=$_POST['Skills'];    
    
            $sql= "INSERT INTO studreg (Name, Email,GradYear,Major,Password,Skills) 
                VALUES ('$Name', '$Email','$GradYear','$Major','$Password','$Skills')";
        if (!mysqli_query($conn,$sql)) {
                  die('Error: ' . mysqli_error($conn));
                }
                                  
                                  header('location: applyjpb.php');  
                                    }
                                    ?>