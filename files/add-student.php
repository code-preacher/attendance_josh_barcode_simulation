
<?php

include '../inc/config.php';

?>

<?php
if(isset($_POST['sub'])){
extract($_POST);
$date=date("d-m-y @ g:i A");
$pix=$_FILES['pic']['name'];
$temp=$_FILES['pic']['tmp_name'];
$folder="../studentimages/" ;  
$pd=uniqid().'_'.$pix;  
move_uploaded_file($temp,$folder.$pd)  ;
$qu=mysqli_query($con,"insert into user(name,matno,image,date) values('$name','$matno','$pd','$date')");
if($qu){
$_SESSION['wmsg']='<span style="color:green;">'."Student was successfully Added".'</span>';
}
else{
$_SESSION['wmsg']='<span style="color:red;">'."Student was not successfully Added".'</span>';    
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE ">
    <meta name="keywords" content="STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
   
    <link href="../css/bootstrap.min3.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="col-lg-12">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="../index.php">Back to Home <i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Student</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">


                    <!-- /# column -->
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card">
                             <p>
                               
                                <?php if (!empty($_SESSION['wmsg'])) {
                                    echo $_SESSION['wmsg'];
                                } 
                                $_SESSION['wmsg']=" ";
                                 ?>
                            </p>
                            <div class="card-title">
                                <h4>ADD STUDENT
                                </h4>
                       
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Student Name :</p>
                                            <input type="text" class="form-control input-rounded" name="name" placeholder="Please Student Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Student Matriculation Number :</p>
                                            <input type="text" class="form-control input-rounded" name="matno" placeholder="Please Student Mat No" required="required">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Student Image :</p>
                                            <input type="file" class="input-rounded" name="pic" placeholder="Please upload image" required="required">
                                        </div>
                                       
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success col-lg-4"> <i class="fa fa-plus"></i> Add</button>
                                        <button type="reset" class="btn btn-inverse col-lg-4">Clear</button>
                                    </div>
                                    </form>
                                </div>

<br><br>

                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


              
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/scripts.js"></script>


</body>

</html>