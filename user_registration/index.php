<?php include 'header.php';?>



<!DOCTYPE HTML>
 <html>
  	
  <head>

  <title>Sign-Up</title>
   </head> 

<style>
	
	.body-color
	{ 
		background-color:#6699CC; 
	}
	 .Sign-Up
	 {
	  background-image:url('sign-up.png'); 
	 background-size:500px 500px;
	  background-repeat:no-repeat; 
	 background-attachment:fixed;
	  background-position:center;
	   margin-top:150px; 
	   margin-bottom:150px; 
	   margin-right:150px; 
	   margin-left:450px; 
	   padding:9px 35px; 
	}
	 .button
	 {
	  border-radius:10px;
	   width:100px; 
	   height:40px; 
	   background:#FF00FF;
	    font-weight:bold;
	     font-size:20px; 
	 }



</style>
   <body id="body-color"> 
   <div id=""> 
   <fieldset style="width:30%">
   <legend>Registration Form</legend> 
   <table border="0"> 
   <tr>
    <form method="POST" action="intern_fillin.php">
     <td>Name</td>
     <td> <input type="text" name="Name"></td> </tr>
     <tr> <td>Email</td><td> <input type="text" name="Email"></td> </tr>
      <tr> <td>Graduation Year</td><td> <input type="Date" name="GradYear"></td> </tr> 
      <tr> <td>major</td><td> <input type="text" name="Major"></td> </tr>
       <tr> <td>Password</td><td> <input type="Password" name="Password"></td> </tr>
       <tr> <td>Skills</td><td> <input type="text" name="Skills"></td> </tr>

        
        <tr> <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr>
         </form> 
         </table> 
         </fieldset>
          </div>
           </body> 
           </html>

