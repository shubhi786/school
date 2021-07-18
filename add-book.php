<?php
    session_start();
 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add Book</title>
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
         <link rel="stylesheet" href="css2/animation.css">
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
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="logo">
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
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
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
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="php/logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span> 
                                                <span class="item-time">18:30</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span> 
                                                <span class="item-time">10:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span> 
                                                <span class="item-time">02:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span> 
                                                <span class="item-time">12:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" 
                        data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                            <a class="dropdown-item" href="#">Franchis</a>
                            <a class="dropdown-item" href="#">Chiness</a>
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
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index3.php" class="nav-link"><i class="fas fa-angle-right"></i>Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.php" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.php" class="nav-link"><i class="fas fa-angle-right"></i>Teachers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-form.php" class="nav-link"><i class="fas fa-angle-right"></i>Admission Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-promotion.php" class="nav-link"><i class="fas fa-angle-right"></i>Discount List</a>
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
                                 <li class="nav-item">
                                    <a href="head-wise-collection.php" class="nav-link"><i class="fas fa-angle-right"></i>Head wise Collection </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="class-ledger.php" class="nav-link"><i class="fas fa-angle-right"></i>Class Ledger</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="student-ledger.php" class="nav-link"><i class="fas fa-angle-right"></i>Student Ledger</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="expenses-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Expenses Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="income-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Income Report</a>
                                </li>
                            </ul>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-details.php" class="nav-link"><i class="fas fa-angle-right"></i>Teacher Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-payment.php" class="nav-link"><i class="fas fa-angle-right"></i>Payment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>All Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parents-details.php" class="nav-link"><i class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Parent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New Book</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>All Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-class.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all-subject.php" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam Grades</a>
                                </li>
                            </ul>
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
                                    <a href="assign-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Assign Vehicle</a>
                                </li>
                                </ul>
                                <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Certificate</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="id-card.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Id Card</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-card.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Admit Card </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tution-fee-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Tution Fee Certificate</a>
                                     <li class="nav-item">
                                    <a href="studying-fee-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Studying Certificate</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="leaving-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Leaving Certificate</a>
                                     <li class="nav-item">
                                    <a href="character-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Character Certificate</a>
                            </ul>
                        </li>
                         </li>
                          <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Reports</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="student-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Student Report</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admission-report.php" class="nav-link"><i class="fas fa-angle-right"></i>Admission Report</a>
                                
                            </ul>
                        <li class="nav-item">
                            <a href="hostel.php" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="messaging.php" class="nav-link"><i class="flaticon-technological"></i><span>Message</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="message-to-student.php" class="nav-link"><i class="fas fa-angle-right"></i>Message to Student </a>
                                </li>
                                <li class="nav-item">
                                    <a href="message-to-staff.php" class="nav-link"><i class="fas fa-angle-right"></i>Message to Staff</a>
                                </li>
                                </ul>
                            <li class="nav-item sidebar-nav-item">
                            <a href="all-users.php" class="nav-link"><i class="flaticon-technological"></i><span>Users</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-users.php" class="nav-link"><i class="fas fa-angle-right"></i>All Users </a>
                                </li>
                                <li class="nav-item">
                                    <a href="user-detail.php" class="nav-link"><i class="fas fa-angle-right"></i>User Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-user.php" class="nav-link"><i class="fas fa-angle-right"></i>Add User</a>
                                </li>
                                </ul>
                        </li>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="general-details.php" class="nav-link"><i class="flaticon-technological"></i><span>General Setting</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="general-details.php" class="nav-link"><i class="fas fa-angle-right"></i>General Detail </a>
                                </li>
                                </ul>
                        </li>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="session-master.php" class="nav-link"><i class="flaticon-technological"></i><span>Session Master</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="state-master.php" class="nav-link"><i class="fas fa-angle-right"></i>State Master </a>
                                </li>
                                <li class="nav-item">
                                    <a href="district-master.php" class="nav-link"><i class="fas fa-angle-right"></i>District Master</a>
                                </li>
                                <li class="nav-item">
                                    <a href="house.php" class="nav-link"><i class="fas fa-angle-right"></i>House</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-class.php" class="nav-link"><i class="fas fa-angle-right"></i>Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-section.php" class="nav-link"><i class="fas fa-angle-right"></i>Section</a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-type.php" class="nav-link"><i class="fas fa-angle-right"></i>Job Type</a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-type.php" class="nav-link"><i class="fas fa-angle-right"></i>Staff Type</a>
                                </li><li class="nav-item">
                                    <a href="designation.php" class="nav-link"><i class="fas fa-angle-right"></i>Designation</a>
                                </li>
                                </ul>
                        </li>
                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="fee-head.php" class="nav-link"><i class="flaticon-technological"></i><span>Fee Head</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="fee-profile.php" class="nav-link"><i class="fas fa-angle-right"></i>Fee Profile </a>
                                </li>
                                <li class="nav-item">
                                    <a href="expense-head.php" class="nav-link"><i class="fas fa-angle-right"></i>Expense Head</a>
                                </li>
                                <li class="nav-item">
                                    <a href="income.php" class="nav-link"><i class="fas fa-angle-right"></i>Income</a>
                                </li>
                                </li>
                                </ul>
                        </li>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="button.php" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                </li>
                                <li class="nav-item">
                                    <a href="grid.php" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tab.php" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="progress-bar.php" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="map.php" class="nav-link"><i class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Library</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Book</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Book Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Book</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post">
                            <?php
                                include('php/dbconfig.php');

                                if(isset($_POST['submit']))
                                {
                                    $book_name = $_POST['book_name'];
                                $book_genre = $_POST['book_genre'];
                                $book_author = $_POST['book_author'];
                                $book_class = $_POST['book_class'];
                                $book_code = $_POST['book_code'];
                                $published = $_POST['published'];
                                $book_stock = $_POST['book_stock'];
                                $book_price = $_POST['book_price'];

                                $q = "INSERT INTO library VALUES('0','$book_code','$book_name','$book_genre','$book_class','$book_price','$book_stock','$book_author','$published',now() ) ";
                                $run = $conn->query($q);

                                if($run)
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
                             ?>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="book_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Genre *</label>
                                    <input type="text" placeholder="" class="form-control" name="book_genre">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Writter Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="book_author">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="book_class">
                                        <option value="">Please Select Class *</option>
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                        <option value="3">One</option>
                                        <option value="3">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Code</label>
                                    <input type="text" placeholder="" class="form-control" name="book_code">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Publishing Date *</label>
                                    <input type="text" placeholder="" class="form-control" name="published">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Stock *</label>
                                    <input type="text" placeholder="" class="form-control" name="book_stock">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Price *</label>
                                    <input type="text" placeholder="" class="form-control" name="book_price">
                                </div>
                                <div class="col-md-3 d-none d-xl-block form-group">
                                   
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Book Area End Here -->
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