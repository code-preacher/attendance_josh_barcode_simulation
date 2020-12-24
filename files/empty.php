<?php

include '../inc/config.php';

mysqli_query($con,"truncate attendance");
header("location:view.php");

?>