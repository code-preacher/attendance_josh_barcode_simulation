
<?php
include '../inc/config.php';
$d="";
?>

<?php

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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">View All Attendance</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               

                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>ALL ATTENDANCE 

<a href="empty.php"><button class="btn btn-danger btn-group-right"><i class="ti-trash">Empty table</i></button></a>

                                </h4>
                       
                            </div>
                            <div class="card-body">
  
                                <div class="table-responsive">
                                   <?php

if (isset($_POST['s'])) {
extract($_POST);
// date("d-m-Y",strtotime($d));
?>

<form action="#" method="POST">
  <div class="form-group col-md-6">
     <span class="text-muted m-b-15 f-s-12">Select date to display results</span>

                                            <div class="input-group input-group-rounded">

                                                <input type="date" name="d" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit" name="s" style="height: 42px;"><i class="ti-search"></i></button></span>
                                            </div>
                                        </div>

</form>
                                   
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
         

                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Matric-Number</th>
                                                <th>Timein</th>
                                               
                                               
                                                <th>Date</th>
                                                <th>Total attendance count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                       $dt=date("d-m-Y",strtotime($d));     
$qd=mysqli_query($con,"select * from attendance where date='$dt'");
$c=0;
while ($f=mysqli_fetch_array($qd)) {
    $ct=mysqli_query($con,"select name from attendance where name='".$f['name']."'");
    $cx=mysqli_num_rows($ct);
    $c++;
    ?>
                                            <tr>
                                                 <td><?php echo $c;?></td>
                                                <td><?php echo $f['name'];?></td>
                                                <td><?php echo $f['matno'];?></td>
                                                  <td><?php echo $f['timein'];?></td>
                                                  
                                                    <td><?php echo $f['date'];?></td>
                                                     <td><?php echo $cx;?></td>
                                            </tr>
                                          <?php  }?>
                                        </tbody>
                                    </table>

<?php
}else{
?>



<form action="#" method="POST">
  <div class="form-group col-md-6">
     <span class="text-muted m-b-15 f-s-12">Select date to display results</span>

                                            <div class="input-group input-group-rounded">

                                                <input type="date" name="s" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit"  style="height: 42px;"><i class="ti-search"></i></button></span>
                                            </div>
                                        </div>

</form>
           


                                   
                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
         
                                     
                                       
                                              <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                 <th>Matric-Number</th>
                                                <th>Timein</th>
                                             
                                               
                                                <th>Date</th>
                                                <th>Attendance Status</th>
                                            </tr>
                                        </thead>
                                         <tbody>
          <?php
  $g=0;  
$qd=mysqli_query($con,"select * from attendance");
while ($f=mysqli_fetch_array($qd)) {
$g++;
    ?>
                                            <tr>
                                                <td><?php echo $g;?></td>
                                                <td><?php echo $f['name'];?></td>
                                                <td><?php echo $f['matno'];?></td>
                                                  <td><?php echo $f['timein'];?></td>
                                                 
                                                    <td><?php echo $f['date'];?></td>
                                                     <td><?php echo "Present";?></td>
                                            </tr>
                                          <?php  }?>
                                        </tbody>
                                    </table>

                                    <?php
                                    }
                                  ?>
                                </div>
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


    <script src="../js/lib/datatables/datatables.min.js"></script>
    <script src="../js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="../js/lib/datatables/datatables-init.js"></script>

</body>

</html>