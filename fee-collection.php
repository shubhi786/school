<?php
session_start();

error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>School</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
     <!-- Preloader Start Here -->
     <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash"  >
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="img/newlogo3.png" width="51px" height="20px" style="margin-left:10px;padding:0px;border-radius:10px;" alt="logo">
                    </a>
                </div>
                  <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                
                            </span>
                            <!-- <input type="text" class="form-control" placeholder="Find Something . . ."> -->
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">
                                    <?php if($_SESSION['uname']) {echo $_SESSION['uname'];} else { echo "<script>location.href='login.php'</script>"; } ?>
                                </h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">
                                    <?php if($_SESSION['uname']) {echo $_SESSION['uname'];} else { echo "<script>location.href='login.php'</script>"; } ?>
                                </h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="php/logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->



        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-form.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Student</a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Human Resource</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-staff.php" class="nav-link"><i class="fas fa-angle-right"></i>All Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-details.php" class="nav-link"><i class="fas fa-angle-right"></i>Staff Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-staff.php" class="nav-link"><i class="fas fa-angle-right"></i>ADD Staff</a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Account Reports </span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="due-fee-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Due Fee Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a href="daily-fee-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Daily Fee Reports </a>
                                </li>
                                <li class="nav-item">
                                    <a href="date-wise-collection.php" class="nav-link"><i class="fas fa-angle-right"></i>Date wise Collection</a>
                                </li>
                                
                            </ul>
                       <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                   <a href="fee-collection.php" class="nav-link"><i class="fas fa-angle-right"></i> Fee Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a href="search-fee.php" class="nav-link"><i class="fas fa-angle-right"></i>Search Fee</a>
                                </li>
                                <li class="nav-item">
                                    <a href="search-due-fee.php" class="nav-link"><i class="fas fa-angle-right"></i>Search Due Fee</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="generate-fee.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Fee</a>
                                </li>
                                <li class="nav-item">
                                    <a href="expense-head.php" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                
                            </ul>
                        </li>
                        </li>
                        </li>            
                       <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Transport</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="add-route.php" class="nav-link"><i class="fas fa-angle-right"></i>Routes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-vehicle.php" class="nav-link"><i class="fas fa-angle-right"></i>Vehicles</a>
                                </li>
                                <li class="nav-item">
                                    <a href="assign-vehicle.php" class="nav-link"><i class="fas fa-angle-right"></i>Assign Vehicle</a>
                                </li>
                                </ul>

                            
                         <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="marks-entry.php" class="nav-link"><i class="fas fa-angle-right"></i>Marks Entry</a>
                                </li>
                                <li class="nav-item">
                                    <a href="print-report-card.php" class="nav-link"><i class="fas fa-angle-right"></i>Print Report Card</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Explorer</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="class-explorer.php" class="nav-link"><i class="fas fa-angle-right"></i>Class Explorer</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Certificate</span></a>
                            <ul class="nav sub-group-menu">   
                                <li class="nav-item">
                                    <a href="leaving-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Leaving Certificate</a>
                                <li class="nav-item">
                                    <a href="character-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Character Certificate</a>
                            </ul>
                        </li>
                         </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>General Setting</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="general-details.php" class="nav-link"><i class="fas fa-angle-right"></i>General Detail </a>
                                </li>
                                <li class="nav-item">
                                    <a href="session-master.php" class="nav-link"><i class="fas fa-angle-right"></i> Session Master </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="category.php" class="nav-link"><i class="fas fa-angle-right"></i>Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-subject.php" class="nav-link"><i class="fas fa-angle-right"></i>Subjects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="house.php" class="nav-link"><i class="fas fa-angle-right"></i>House</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-classes.php" class="nav-link"><i class="fas fa-angle-right"></i>Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-sections.php" class="nav-link"><i class="fas fa-angle-right"></i>Section</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a href="staff-type.php" class="nav-link"><i class="fas fa-angle-right"></i>Staff Type</a>
                                </li>
                         
                                <li class="nav-item">
                                    <a href="fee-head.php" class="nav-link"><i class="fas fa-angle-right"></i>Fee Head</a>
                                </li>
                                <li class="nav-item">
                                    <a href="fee-profile.php" class="nav-link"><i class="fas fa-angle-right"></i>Fee Profile </a>
                                </li>
                                <li class="nav-item">
                                    <a href="expense-head.php" class="nav-link"><i class="fas fa-angle-right"></i>Expense Head</a>
                                </li>
                                <li class="nav-item">
                                    <a href="income-head.php" class="nav-link"><i class="fas fa-angle-right"></i>Income Head</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                     
                        </li>                                               
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3> Fee Collection</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Collect Fees</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                        <?php
                            include('php/dbconfig.php');

                            if(isset($_POST['submit']))
                            {   
                                $prf_nme = $_SESSION['profile_name'];
                                $student_name = $_POST['student_name'];
                                $admission_code = $_POST['admission_code'];
                                $student_roll_no = $_POST['student_roll_no'];
                                $class = $_POST['class'];
                                $class_section = $_POST['class_section'];
                                $session_name = $_POST['session_name'];
                                $fee_month_from = $_POST['fee_month_from'];
                                $fee_month_to = $_POST['fee_month_to'];
                                $year = $_POST['fee_year'];
                                $total_fees = $_POST['total_fees'];
                                $fee_head_name = $_POST['fee_head_name'];
                                $fee_head_charges = $_POST['fee_head_charges'];
                                $pending = 'pending';
                                $paid = 'paid';
                                $receipt_no = $_POST['admission_code'].$_POST['student_roll_no']."_".mt_rand(100,10000);

                                $_SESSION['student_name'] = $_POST['student_name'];
                                $_SESSION['admission_code'] = $_POST['admission_code'];
                                $_SESSION['student_roll_no'] = $_POST['student_roll_no'];

                                            // $q3 = "SELECT * FROM profiles_info WHERE profile_name='$prf_nme' ";
                                            // $sql3 = $conn->query($q3);
                
                                            // if($sql3->num_rows > 0)
                                            // {
                                            //     while($row3 = $sql3->fetch_assoc())
                                            //     {
                                            //         $_SESSION['head_name'] = $row3['fee_head'];
                                            //         $head_name_for_fetch = $_SESSION['head_name'];  
                                            //         // echo $head_name_for_fetch;
                                            //     }
                                            // }
                
                                            $check_fee_head_charges = "SELECT * FROM profiles_info WHERE profile_name='$prf_nme' AND fee_head='$fee_head_name' ";
                                            $run_fee_head_query = $conn->query($check_fee_head_charges);
                
                                            if($run_fee_head_query->num_rows > 0)
                                            {
                                                while($row = $run_fee_head_query->fetch_assoc())
                                                {
                                                    $_SESSION['charges'] = $row['head_charges'];
                                                    $charges = $_SESSION['charges'];           
                                                }
                                            }
                                
                                $due_fees = $charges - $fee_head_charges;
                                
                         
                                if($due_fees == 0)
                                {
                                    $check_for_fee_head_duplicacy = "SELECT * FROM fees WHERE fee_heads='$fee_head_name' AND student_roll_no='$student_roll_no' AND session_name='$session_name' ";
                                    $run_above_query = $conn->query($check_for_fee_head_duplicacy);

                                    if($run_above_query->num_rows > 0)
                                    {?>
                                    <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'error',
  title: 'Fee Head already exists'
});
                                    </script>     
                                       <?php 
                                    }
                                    else
                                    {
                                        $query = "INSERT INTO fees VALUES('0','$session_name','$receipt_no','$prf_nme','$student_name','$admission_code','$student_roll_no','$class','$fee_month_from','$fee_month_to','$year','$total_fees','$fee_head_name','$charges','$fee_head_charges','$due_fees','$paid',now() ) ";
                                        $run_query = $conn->query($query);
        
                                        if($run_query)
                                        {?>
                                    <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'success',
  title: 'Data has been sent successfully'
});
                                    </script>     
                                        <?php 
                                        }
                                        else
                                        {?>
                                        <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'error',
  title: 'Something went wrong'
});
                                    </script>     
                                           <?php 
                                        }
                                    }
                                }
                                else
                                {
                                    $check_for_fee_head_duplicacy = "SELECT * FROM fees WHERE fee_heads='$fee_head_name' AND student_roll_no='$student_roll_no' AND session_name='$session_name' ";
                                    $run_above_query = $conn->query($check_for_fee_head_duplicacy);

                                    if($run_above_query->num_rows > 0)
                                    {?>
                                        <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'error',
  title: 'Fee Head already exists'
});
                                    </script>    
                                       <?php 
                                    }
                                    else
                                    {
                                        $query = "INSERT INTO fees VALUES('0','$session_name','$receipt_no','$prf_nme','$student_name','$admission_code','$student_roll_no','$class','$fee_month_from','$fee_month_to','$year','$total_fees','$fee_head_name','$charges','$fee_head_charges','$due_fees','$pending',now() ) ";
                                        $run_query = $conn->query($query);
        
                                        if($run_query)
                                        {?>
<script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'success',
  title: 'Data has been sent successfully'
});
                                    </script>   
                                        <?php    
                                        }
                                        else
                                        {
                                            session_unset();
                                            ?>
<script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

Toast.fire({
  icon: 'error',
  title: 'something went wrong'
});
                                    </script>   
                                         <?php   
                                        }
                                    }
                                }
                            }
                         ?>
                            <div class="row">

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Profile Name</label>
                                    <?php
                                        if(isset($_POST['get_fees']))
                                        {
                                            // $profile_name_get_fees = $_POST['profile_name'];
                                            $_SESSION['profile_name'] = $_POST['profile_name1'];
                                            $prf_nme = $_SESSION['profile_name'];
                                            
                                        } 
                                        // echo "<script>alert('$prf_nme')</script>";
                                     ?>
                                    <select class="select2" name="profile_name1" value="" onchange="">
                                    <option value="">Please Select a Profile</option>
                                    <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT DISTINCT profile_name FROM profiles_info";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                        <option value="<?php echo $rows['profile_name']; ?>"><?php echo $rows['profile_name']; ?></option>
                                        <?php }} ?>
                                    </select>
                                    <button type="submit" name="get_fees" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark mt-3">Get Fees</button>

                                        </div>

                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Student Name</label>
                                    <input type="text" placeholder="" class="form-control" name="student_name" value="<?php echo $_SESSION['student_name']; ?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission Code</label>
                                    <input type="text" placeholder="" class="form-control" name="admission_code" value="<?php echo $_SESSION['admission_code']; ?>">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Student Roll No</label>
                                    <input type="text" placeholder="" class="form-control" name="student_roll_no" value="<?php echo $_SESSION['student_roll_no']; ?>">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class</label>
                                    <select class="select2" name="class" value="">
                                    <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM class";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                        <option value="<?php echo $rows['class_name']; ?>"><?php echo $rows['class_name']; ?></option>
                                        <?php
                                        }
                                    } ?>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class Section</label>
                                    <select class="select2" name="class_section" value="">
                                        <option value="">Select *</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                        <option value="4">D</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Session Name</label>
                                    <select class="select2" name="session_name" value="">
                                    <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM session_master";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                        <option value="<?php echo $rows['session_start_date']; ?>-<?php echo $rows['session_end_date']; ?>"><?php echo $rows['session_start_date']; ?>-<?php echo $rows['session_end_date']; ?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>From Month</label>
                                    <input type="text" placeholder="" value="<?php echo date('m'); ?>" class="form-control" name="fee_month_from">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>To Month</label>
                                    <input type="text" placeholder="" value="<?php echo date('m'); ?>" class="form-control" name="fee_month_to">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Year</label>
                                    <input type="text" placeholder="" value="<?php echo date('Y'); ?>" class="form-control" name="fee_year">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label style="font-weight:bold;">Total Fees</label>
                                    <?php
                                        include('php/dbconfig.php');

                                        if(!empty($prf_nme))
                                        {

                                        $q1 = "SELECT SUM(head_charges) AS total_confirmed FROM profiles_info WHERE profile_name='$prf_nme' ";

                                        $sql1 = $conn->query($q1);

                                        if($sql1->num_rows > 0)
                                        {
                                            while($rows1 = $sql1->fetch_assoc())
                                            {?>
                                            <input type="text" value="<?php echo $rows1['total_confirmed']; ?>" placeholder="" class="form-control" name="total_fees">
                                            <?php 
                                            }
                                        } 
                                        }
                                        else
                                        {?>
                                            <input type="text" value="0" placeholder="" class="form-control" name="total_fees">
                                        <?php } ?>
                                </div>
                                 
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fee Head</label>
                                    <select class="select2" name="fee_head_name" value="">
                                    <?php
                                    $q2 = "SELECT * FROM profiles_info WHERE profile_name='$prf_nme' ";

                                    $sql2 = $conn->query($q2);

                                    if($sql2->num_rows > 0)
                                    {
                                        while($rows2 = $sql2->fetch_assoc())
                                        {
                                 ?>
                                    <!-- <input type="text" placeholder="" value="" class="form-control" name="paid_fees"> -->
                                    <option value="<?php echo $rows2['fee_head']; ?>"><?php echo $rows2['fee_head']; ?></option>
                                    <?php
                                    }
                                 } ?>
                                 </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fee Head Charges</label>
                                    <input type="text" placeholder="" value="" class="form-control" name="fee_head_charges">
                                </div>
                                
                               

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Collect</button>
                                    <!-- <button class="btn-fill-lg bg-blue-dark btn-hover-yellow"><a class="text-white" href="fee-profile.php">Add Profile</a></button> -->
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
            
                       
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-6 col-lg-6 col-12 form-group">
                            <div class="item-title">
                                <h3>All Student Fees</h3>
                            </div>
                            </div>
                        
                       
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <label class="form-check-label">ID</label>
                                        </th>
                                        <th>Admission Code</th>
                                        <th>Class</th>
                                        <th>Student Roll No</th>
                                        <th>Student Name</th>
                                        <th>Total Fees</th>
                                        <th>Fee Head Fees</th>
                                        <th>Student Paid Fees</th>
                                        <th>Student Balance</th>
                                        <th>Status</th>
                                        <th>Update fees</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM fees";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                    <tr>
                                        <td>
                                            <label class="form-check-label"><?php echo $rows['id']; ?></label>
                                        </td>
                                        <td><?php echo $rows['admission_code']; ?></td>
                                        <td><?php echo $rows['class']; ?></td>
                                        <td><?php echo $rows['student_name']; ?></td>
                                        <td><?php echo $rows['student_roll_no']; ?></td>
                                        <td><?php echo $rows['total_fees']; ?></td>
                                        <td><?php echo $rows['fee_head_charges']; ?></td>
                                        <td><?php echo $rows['paid_fees']; ?></td>
                                        <?php
                                            if($rows['due_fees'] == 0)
                                            {?>
                                            <td style="color:#fff;background-color:green;"><?php echo $rows['due_fees']; ?></td>
                                        <?php
                                            }
                                            else
                                            {?>
                                            <td style="color:#fff;background-color:red;"><?php echo $rows['due_fees']; ?></td>
                                        <?php
                                            }
                                         ?>
                                        <td><?php echo $rows['status']; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="update_fees.php?r_no=<?php echo $rows['receipt_no']; ?>&student_class=<?php echo $rows['class']; ?>&student_rollno=<?php echo $rows['student_roll_no']; ?>&session_name=<?php echo $rows['session_name']; ?>&class_section=<?php echo $rows['class_section']; ?>&admission_code=<?php echo $rows['admission_code']; ?>"><i class="fas fa-redo-alt text-orange-peel"></i>Update</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/jquery.smoothscroll.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html> 