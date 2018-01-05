<?php

require_once '../connect.php';

if($action == "aprove")
{
    $message = "Some msg to aprove";
    $Status = $_POST['Status'];
  $query = "UPDATE placement p
  SET Status = 'Approved' WHERE `Status`='$_REQUEST[Status]'";
 mysqli_query($query);
header('location: placement.php');
}
else if($action == "reject")
{
    $message = "Some msg to reject";
    $Status = $_POST['Status'];
  $query = "UPDATE placement SET Status ='Rejected' WHERE `Status`='$_REQUEST[Status]'";
 mysqli_query($query);

 }
header('location: placement.php');



?>

  