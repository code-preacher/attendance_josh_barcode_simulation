
<?php
session_start();
include '../inc/config.php';

date_default_timezone_set("africa/lagos");

$ct=mysqli_query($con,"select id,matno from user where id='".$_GET['id']."' ");
$bc=mysqli_num_rows($ct);
$bk=mysqli_fetch_array($ct);

$b=mysqli_query($con,"select matno,date from attendance where matno='".$bk['matno']."' and date='".date("d-m-Y")."' ");
$bb=mysqli_num_rows($b);

if ($bc<1) {
$_SESSION['msg']=" <div class='alert alert-danger hide alert-dismissible fade show' role='alert'><strong>"."Invalid user Id!";
header("location:../index.php");
   exit();
} 


if ($bb>0) {
$_SESSION['msg']=" <div class='alert alert-danger hide alert-dismissible fade show' role='alert'><strong>"."Attendance was already taken for today!";
header("location:../index.php");
   exit();
} 


  $d=mysqli_query($con,"select matno from user where id='".$_GET['id']."'");
  $rd=mysqli_fetch_array($d);
    $show="barcode.php?codetype=Code39&size=100&text=".$rd['matno']."&print=true";
    echo "<br/<br/><center><img alt='testing' src=".$show." width='500' height='120'/></center>";
?>


<link href="../css/bootstrap.min2.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min2.js"></script>
<script src="../js/jquery.min2.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
        function t() {
       window.location='take-attendance.php?id=<?php echo $_GET['id']; ?>';
        }
        document.write('BARCADE SCANNER IS SCANNING TO TAKE ATTENDANCE, scanning finishes in 5 sec');
        setTimeout('t()',5000);
    </script>
<style type="text/css">
  body {
    margin:0;
    padding:0;
    overflow:hidden;
}
.wrapper {
    height:100vh;
    -webkit-animation: slide 60s linear infinite;
    background:#280202 repeat;
    background-position:120% 100%;
    background-size:cover;
    animation:animatebg 60s linear infinite;
}
.pulse {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background:url(../images/bsu.jpg);
    background-size:cover;
    animation:animateEarth 12s linear infinite;
    width:200px;
    height:200px;
    border-radius:50%;
    box-shadow:inset 0 0 40px rgba(255,255,255,.5);
}

.pulse span {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    display:block;
    width:100%;
    height:100%;
    border-radius:50%;
    background:transparent;
    border:2px solid #fff;
    box-sizing:border-box;
    animation:animate 6s linear infinite;
}

.pulse span:nth-child(1) {
    animation-delay:0s;
}
.pulse span:nth-child(2) {
    animation-delay:-4s;
}
.pulse span:nth-child(3) {
    animation-delay:4s;
}

@keyframes animate {
    0% {
        width:200px;
        height:200px;
        opacity:1;
    }
    50% {
        opacity:1;
    }
    100% {
        width:500px;
        height:500px;
        opacity:0;
    }
   
}


@keyframes animateEarth {
    0% {
        background-position:0 0;
    }
    100% {
        background-position:719px 0;
    }
}

@keyframes animatebg {
    0% {
        background-position:0 0;
    }
    100% {
        background-position:719px 0;
    }
}






</style>

<div class="wrapper">
    <div class="pulse">
        <span></span>
        <span></span>
        <span></span>
    </div> 
</div>
