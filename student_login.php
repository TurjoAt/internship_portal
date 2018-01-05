_<?php
        if (isset($_POST['submit']))
            { 
         $dbconn = mysqli_connect('localhost','root','','internship');    
        //include("config.php");
        session_start();
        $Email=$_POST['Email'];
        $Password = $_POST['Password'];
        $_SESSION['Email']=$Email; 
        $query = mysqli_query( $dbconn, "SELECT * FROM studreg WHERE Email='$Email' and Password='$Password'");
         if (mysqli_num_rows($query) == 0)
        {
         echo "<script language='javascript' type='text/javascript'> location.href='activities.php' </script>";   
          }
          else
          {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        }
        }
        ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
  <link rel ="stylesheet" type="text/css" href ="css/bootstrap.min.css">
<script type="text/javascript" src="js/script1.js"></script>
</head>

<div class="container">
  
  <div class="row" id="pwd-container">

    <div class="col-md-8">
      <section class="login-form">
        <h1>SIGN IN </h1>
        <form method="post" action="#" role="login">
          <img src="img/icho.jpg" class="img-responsive" alt="" />
          <input type="text" name="Email"  required class="form-control input-lg" value="" />
          
          <input type="text"  name="Password" class="form-control input-lg"  required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
           <a href="index.php">Home  </a>    <a href="user_registration/index.php">Register </a> 
          </div>
          
        </form>
      </section>  
      </div>
      <div class ="col-md-4">
      </div>
      
    
      
</div>

</html>