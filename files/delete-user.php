<?php
  session_start();
  $id=$_GET['id'];
  $matno=$_GET['matno'];
include '../inc/config.php';
 mysqli_query($con,"delete from user where id='$id'");
 mysqli_query($con,"delete from attendance where matno='$matno'");
 $_SESSION['zmsg']= '<span style="color:green;">'."Student was successfully deleted".'</span>';
 header("location:view-student.php");
?>