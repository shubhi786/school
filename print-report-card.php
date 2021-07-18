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
      <!--Css2-->
     <link rel="stylesheet" href="css2/animation.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
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
                    <h3>Print Report Card</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Print Report Card</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto" id="Shadow">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Print Report Card</h3>
                            </div>
                           
                        </div>

                        <div class="search-box container mb-5">  
                            <form action="" method="post">

                            <?php
                                include('php/dbconfig.php');    

                                if(isset($_POST['get_val']))
                                {
                                   
                                    $_SESSION['exam_code'] = $_POST['exam_code'];
                                    $_SESSION['roll_no'] = $_POST['roll_no'];
                                    $_SESSION['session_name'] = $_POST['session_name'];

                                }
                             ?>
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Exam Code ..." class="form-control" name="exam_code"/>
                                </div>

                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll No ..." class="form-control" name="roll_no"/>
                                </div>

                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <label>Sessions</label>
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
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button name="get_val" type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <?php
                            include('php/dbconfig.php');

                            $exam_code = $_SESSION['exam_code'];
                            $roll_no = $_SESSION['roll_no'];
                            $session_name = $_SESSION['session_name'];

                            if(isset($_SESSION['exam_code']) && isset($_SESSION['roll_no']) && isset($_SESSION['session_name']) )
                            {
                                
                                $q = "SELECT * FROM exam_marks WHERE session_name='$session_name' AND exam_code='$exam_code' AND student_rollno='$roll_no' ";

                                $sql = $conn->query($q);

                                if($sql->num_rows > 0)
                                {
                                while($rows = $sql->fetch_assoc())
                                {

                             ?>

                        <div class="single-info-details mt-5">
                            <div class="item-img">
                                
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php echo $rows['student_name']; ?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a id="print_now" href="#"><i class="fas fa-print"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $rows['student_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Roll No:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $rows['student_rollno']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Exam name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $rows['exam_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Exam Class:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $rows['exam_class']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Marks Scored:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $rows['student_marks']; ?>/<?php echo $rows['student_total_marks']; ?></td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>

                                    <div class="table-responsive">
                                    <table class="table bs-table table-striped table-bordered text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Subjects
                                                </th>
                                                <th>
                                                   Scored Marks
                                                </th>
                                                <th>
                                                    Total Marks
                                                </th>
                                                <th>
                                                    Session
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM exam_marks WHERE student_rollno='$roll_no' ";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                            <tr>
                                                <td>    
                                                    <?php echo $rows['subject_name']; ?>
                                                </td>
                                                <td style="color:#000;font-weight:bold;">    
                                                    <?php echo $rows['student_marks']; ?>
                                                </td>
                                                <td style="color:#000;font-weight:bold;">    
                                                    <?php echo $rows['student_total_marks']; ?>
                                                </td>
                                                <td>    
                                                    <?php echo $rows['session_name']; ?>
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                        }?>
                                        </tbody>
                                    </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php 
                                }
                            }
                        }
                        else
                        {
                            echo "<h6 class='text-center text-danger'>Nothing to show yet... Please search for a Colleague...</h6>";
                        }

                         ?>
                    </div>
                </div>
                <!-- Student Details Area End Here -->




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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

    <script>
        let print_elem = document.getElementById('print_now');

        print_elem.addEventListener('click', function()
        {
            window.print();
        });
    </script>

</body>

</html>