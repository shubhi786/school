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
                    <h3>Marks Entry</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Enter Exam Marks</li>
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
                                $exam_code = $_POST['exam_code'];
                                $_SESSION['exam_code_'] = $_POST['exam_code'];
                                $exam_date = $_POST['exam_date'];
                                $session_name = $_POST['session_name'];
                        
                            }
                         ?>
                                
                            <div class="row">
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Exam Code <font color="red">*</font></label>
                                    <input type="text" placeholder="" class="form-control" name="exam_code">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Route *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="exam_date" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Sessions </label>
                                    <select class="select2" name="session_name">
                                    <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM session_master";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                        <option value="<?php echo $rows['session_start_date'] ?>-<?php echo $rows['session_end_date'] ?>"><?php echo $rows['session_start_date'] ?>-<?php echo $rows['session_end_date'] ?></option>
                                        <?php 
                                            }
                                        }?>
                                    </select>
                                </div>

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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
                                <h3>Classes</h3>
                            </div>
                            </div>
                        
                       
                        <div class="table-responsive">
                        
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Exam Code</label>
                                            </div>
                                        </th>
                                        <th>Subject Name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('php/dbconfig.php');

                                        if(isset($exam_code) && isset($exam_date) && isset($session_name) )
                                        {
                                            $q = "SELECT * FROM exam WHERE exam_code='$exam_code' AND exam_date='$exam_date' AND session_name='$session_name' ";

                                            $sql = $conn->query($q);
        
                                            if($sql->num_rows > 0)
                                            {
                                                while($rows = $sql->fetch_assoc())
                                                {

                                                    $_SESSION['exam_class_'] = $rows['exam_class'];
                                                    $_SESSION['subject_name'] = $rows['subject_name'];
                                                    $_SESSION['exam_section'] = $rows['exam_section'];
                                                    $_SESSION['exam_name_'] = $rows['exam_name'];
                                       ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $rows['exam_code']; ?></label>
                                            </div>

                                            <td><?php echo $rows['subject_name']; ?></td>
                                            <td><?php echo $rows['exam_class']; ?></td>
                                            <td><?php echo $rows['exam_section']; ?></td>
 
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                }
                                else
                                {
                                    echo "nothing to show";
                                    session_unset();
                                }
                                     ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card height-auto mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-6 col-lg-6 col-12 form-group">
                            <div class="item-title">
                                <h3>Add Marks</h3>
                            </div>
                            </div>
                        
                       
                        <div class="table-responsive">
                        <form action="" method="post">
                        <?php 
                            include('php/dbconfig.php');

                            if(isset($_POST['submit_marks']))
                            {
                                $upload_student_name = $_POST['upload_student_name'];
                                $upload_rollno = $_POST['upload_rollno'];
                                $upload_marks = $_POST['upload_marks'];
                                $upload_exam_code = $_POST['upload_exam_code'];
                                $upload_exam_name = $_POST['upload_exam_name'];
                                $upload_exam_subject_name = $_POST['upload_exam_subject_name'];
                                $upload_exam_class = $_POST['upload_exam_class'];
                                $upload_exam_section = $_POST['upload_exam_section'];
                                $upload_total_marks = $_POST['upload_total_marks'];

                                $q = "INSERT INTO exam_marks VALUES('0','$upload_exam_code','$upload_exam_name','$upload_exam_subject_name','$upload_exam_class','$upload_exam_section','$upload_student_name','$upload_rollno','$upload_marks','$upload_total_marks',now() ) ";
                                $run_this = $conn->query($q);

                                if( $run_this)
                                {
                                    echo "<script>alert(ok done');</script>";
                                }
                                else
                                {
                                    echo "<script>alert(ok done');</script>";
                                }
                            }
                        ?>
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Student Name</label>
                                            </div>
                                        </th>
                                        <th>Student Roll No</th>
                                        <th>Subject Marks</th>
                                        <th>Total Marks</th>
                                        <th>Exam Code</th>
                                        <th>Exam Name</th>
                                        <th>Subject Name</th>
                                        <th>Exam Class</th>
                                        <th>Exam Section</th>
                                        <th>Session Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('php/dbconfig.php');

                                        $exam_class_ = $_SESSION['exam_class_'];
                                        $subject_name = $_SESSION['subject_name'];
                                        $exam_section_ = $_SESSION['exam_section'];

                                        if(isset($_SESSION['exam_class_']) && $_SESSION['subject_name'] && $exam_section = $_SESSION['exam_section'] )
                                        {
                                            $q = "SELECT * FROM admission WHERE Class='$exam_class_' ";

                                            $sql = $conn->query($q);
        
                                            if($sql->num_rows > 0)
                                            {
                                                while($rows = $sql->fetch_assoc())
                                                {
                                       ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><input type="text" name="upload_student_name" value="<?php echo $rows['Student_Fname']; ?> <?php echo $rows['Student_Lname']; ?>" class="form-control form-control-lg"></label>
                                            </div>

                                            <td><input type="text" value="<?php echo $rows['Roll_Number']; ?>" name="upload_rollno" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="" name="upload_marks" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="" name="upload_total_marks" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $_SESSION['exam_code_']; ?>" name="upload_exam_code" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $_SESSION['exam_name_']; ?>" name="upload_exam_name" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $_SESSION['subject_name']; ?>" name="upload_exam_subject_name" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $_SESSION['exam_class_']; ?>" name="upload_exam_class" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $_SESSION['exam_section']; ?>" name="upload_exam_section" class="form-control form-control-lg"></td>

                                            <td><input type="text" value="<?php echo $session_name; ?>" name="upload_exam_section" class="form-control form-control-lg"></td>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                }
                                     ?>
                                </tbody>
                                
                                
                            </table>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" name="submit_marks" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>                                
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
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