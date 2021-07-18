<?php
    session_start();

    ob_start();
 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Admission Form</title>
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
                                <h5 class="item-title">Stevne Zone</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="#"><i class="flaticon-turn-off"></i>Log Out</a></li>
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
                                <li class="nav-item">
                                    <a href="student-promotion.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Discount List</a>
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
                        <!-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-staff.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teacher Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-staff.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-payment.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Payment</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parents-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-parents.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Parent</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Book</a>
                                </li>
                            </ul>
                        </li> -->
                       <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                   <a href="all-fees.php" class="nav-link"><i class="fas fa-angle-right"></i> Fee Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Search Fee</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Search Due Fee</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Fee Reminder(Message)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Fee</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Income</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="all-subject.php" class="nav-link"><i
                                    class="flaticon-open-book"></i><span>Subject</span></a>
                        </li>                                               -->
                        
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
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Certificate</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="generate-id-card.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Id Card</a>
                                </li>
                                <li class="nav-item">
                                    <a href="generate-admit-card.php" class="nav-link"><i class="fas fa-angle-right"></i>Generate Admit Card </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tution-fee-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Tuition Fee Certificate</a>
                                     <li class="nav-item">
                                    <a href="studying-cert.php" class="nav-link"><i class="fas fa-angle-right"></i>Studying Certificate</a>
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
                        
                         
                            <li class="nav-item sidebar-nav-item">
                            <a href="messaging.php" class="nav-link"><i class="flaticon-technological"></i><span>Users</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-users.php" class="nav-link"><i class="fas fa-angle-right"></i>All Users </a>
                                </li>
                                <li class="nav-item">
                                    <a href="user-details.php" class="nav-link"><i class="fas fa-angle-right"></i>User Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a href="signup.php" class="nav-link"><i class="fas fa-angle-right"></i>Add User</a>
                                </li>
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
                                    <a href="state-master.php" class="nav-link"><i class="fas fa-angle-right"></i>State Master </a>
                                </li>
                                <li class="nav-item">
                                    <a href="district-master.php" class="nav-link"><i class="fas fa-angle-right"></i>District Master</a>
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
                                    <a href="job-type.php" class="nav-link"><i class="fas fa-angle-right"></i>Job Type</a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-type.php" class="nav-link"><i class="fas fa-angle-right"></i>Staff Type</a>
                                </li>
                                <li class="nav-item">
                                    <a href="designation.php" class="nav-link"><i class="fas fa-angle-right"></i>Designation</a>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Update Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                 <div class="basic-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Student Profile</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Bank Details</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">Parent Details</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-selected="false">Guardian Details</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                  <!-- Admit Form Area Start Here -->
                                <div class="card height-auto">
                                    <div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h3>New Students</h3>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                    aria-expanded="false">...</a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                                        <?php
                                    include('php/dbconfig.php');

                                    $get_roll_no = $_GET['rollno'];
                                    $get_session_name = $_GET['session_name'];
                                    $get_class_name = $_GET['class_name'];

                                    $_SESSION['session_rollno'] = $_GET['rollno'];
                                    $_SESSION['session_name'] = $_GET['session_name'];
                                    $_SESSION['session_classname'] = $_GET['class_name'];

                                    if(isset($_POST['submit']))
                                    {
                                        $updated_class = $_POST['updated_class'];
                                        $updated_section = $_POST['updated_section'];
                                        $updated_rollno = $_POST['updated_rollno'];
                                        $updated_admission_no = $_POST['updated_admission_no'];
                                        $updated_house = $_POST['updated_house'];
                                        $updated_firstname = $_POST['updated_firstname'];
                                        $updated_lastname = $_POST['updated_lastname'];
                                        $updated_gender = $_POST['updated_gender'];
                                        $updated_dob = $_POST['updated_dob'];
                                        $updated_aadhaar = $_POST['updated_aadhaar'];
                                        $updated_religion = $_POST['updated_religion'];
                                        $updated_category = $_POST['updated_category'];
                                        $updated_caste = $_POST['updated_caste'];
                                        $updated_mobile = $_POST['updated_mobile'];
                                        $updated_email = $_POST['updated_email'];
                                        $updated_current_address = $_POST['updated_current_address'];
                                        $updated_current_state = $_POST['updated_current_state'];
                                        $updated_current_district = $_POST['updated_current_district'];
                                        $updated_current_pincode = $_POST['updated_current_pincode'];
                                        $updated_permanent_address = $_POST['updated_permanent_address'];
                                        $updated_permanent_state = $_POST['updated_permanent_state'];
                                        $updated_permanent_district = $_POST['updated_permanent_district'];
                                        $updated_permanent_pincode = $_POST['updated_permanent_pincode'];
                                        $updated_img = $_FILES['updated_img'];

                                        $filename = $_FILES['updated_img']['name'];
                                        $tmpname = $_FILES['updated_img']['tmp_name'];
                              
                                        $folder = "img/student_img/".$filename;
                              
                                        $diff = explode('.' , $filename);
                              
                                        $check = strtolower(end($diff));
                              
                                        $arr = array('jpg', 'jpeg' , 'png' , 'svg'); 

                                        if(in_array($check,$arr))
                                        {
                                            move_uploaded_file($tmpname,$folder);

                                            $update_q = "UPDATE `admission` SET `id`='0',`session_name`='$get_session_name',`Admission_No`='$updated_admission_no',`Roll_Number`='$updated_rollno',`Class`='$updated_class',`Section`='$updated_section',`Student_Fname`='$updated_firstname',`Student_Lname`='$updated_lastname',`Gender`='$updated_gender',`Date_of_birth`='$updated_dob',`Adhaar`='$updated_aadhaar',`Category`='$updated_category',`Religion`='$updated_religion',`Caste`='$updated_caste',`Mobile_Number`='$updated_mobile',`Email`='$updated_email',`Student_House`='$updated_house',`student_photo`='$folder',`permanent_address`='$updated_permanent_address',`permanent_state`='$updated_permanent_state',`permanent_district`='$updated_permanent_district',`permanent_pincode`='$updated_permanent_pincode',`current_address`='$updated_current_address',`current_state`='$updated_current_state',`current_district`='$updated_current_district',`current_pincode`='$updated_current_pincode',`date`=now() WHERE Roll_Number='$get_roll_no' AND session_name='$get_session_name' AND Class='$get_class_name' ";
                                            $run_update = $conn->query($update_q);

                                            if($run_update)
                                            {
                                                header('location:all-student.php');
                                            }
                                            else
                                            {
                                                echo "<script>alert('not done');</sript>";
                                            }
                                        }

                                        ob_end_flush();

                                    }

                                    // selection to input values

                                    $q = "SELECT * FROM admission WHERE Roll_Number='$get_roll_no' AND session_name='$get_session_name' AND Class='$get_class_name' ";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {
                                            ?>
                                            <div class="row">
                                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Class *</label>
                                                    <select name="updated_class" class="select2">
                                                    <option value="<?php echo $rows['Class']; ?>"><?php echo $rows['Class']; ?></option>
                                                    <option value="Play">Play</option>
                                                    <option value="Nursery">Nursery</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="9th">9th</option>
                                                    <option value="10th">10th</option>
                                                    <option value="11th">11th</option>
                                                    <option value="12th">12th</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Section *</label>
                                                    <select name="updated_section" class="select2">
                                                        <option value="<?php echo $rows['Class']; ?>"><?php echo $rows['Section']; ?></option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Roll Number </label>
                                                    <input type="text" placeholder="" name="updated_rollno" class="form-control" value="<?php echo $rows['Roll_Number']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Admission No. </label>
                                                    <input type="text" placeholder="" name="updated_admission_no" class="form-control" value="<?php echo $rows['Admission_No']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>House </label>
                                                    <select name="updated_house" class="select2">
                                                        <option value="<?php echo $rows['Student_House']; ?>"><?php echo $rows['Student_House']; ?></option>
                                                        <option value="Green">Green</option>
                                                        <option value="White">White</option>
                                                        <option value="Blue">Blue</option>
                                                        <option value="Red">Red</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>First Name *</label>
                                                    <input type="text" placeholder="" name="updated_firstname" class="form-control" value="<?php echo $rows['Student_Fname']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Last Name </label>
                                                    <input type="text" placeholder="" name="updated_lastname" class="form-control" value="<?php echo $rows['Student_Lname']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Gender *</label>
                                                    <select name="updated_gender" class="select2">
                                                        <option value="<?php echo $rows['Gender']; ?>"><?php echo $rows['Gender']; ?></option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Date Of Birth *</label>
                                                    <input type="text" placeholder="dd/mm/yyyy" name="updated_dob" class="form-control air-datepicker"
                                                        data-position='bottom right' value="<?php echo $rows['Date_of_birth']; ?>">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Aadhaar Number</label>
                                                    <input type="text" placeholder="" name="updated_aadhaar" class="form-control" value="<?php echo $rows['Adhaar']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Religion </label>
                                                    <select name="updated_religion" class="select2">
                                                        <option value="<?php echo $rows['Religion']; ?>"><?php echo $rows['Religion']; ?></option>
                                                        <option value="1">Islam</option>
                                                        <option value="2">Hindu</option>
                                                        <option value="3">Christian</option>
                                                        <option value="3">Buddish</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                  </div>  
                                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Category </label>
                                                    <select name="updated_category" class="select2">
                                                        <option value="<?php echo $rows['Category']; ?>"><?php echo $rows['Category']; ?></option>
                                                        <option value="1">Ganerel</option>
                                                        <option value="2">OBC</option>
                                                        <option value="3">SC</option>
                                                        <option value="3">ST</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Caste</label>
                                                    <input type="text" placeholder="" name="updated_caste" class="form-control" value="<?php echo $rows['Caste']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Contact Number *</label>
                                                    <input type="text" placeholder="" name="updated_mobile" class="form-control" value="<?php echo $rows['Mobile_Number']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>E-Mail ID</label>
                                                    <input type="email" placeholder="" name="updated_email" class="form-control" value="<?php echo $rows['Email']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current Address</label>
                                                    <input type="text" placeholder="" name="updated_current_address" class="form-control" value="<?php echo $rows['current_address']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current State</label>
                                                    <input type="text" placeholder="" name="updated_current_state" class="form-control" value="<?php echo $rows['current_state']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current District</label>
                                                    <input type="text" placeholder="" name="updated_current_district" class="form-control" value="<?php echo $rows['current_district']; ?>">
                                                </div>                                                
                                                
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current Pin Code</label>
                                                    <input type="text" placeholder="" name="updated_current_pincode" class="form-control" value="<?php echo $rows['current_pincode']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Permanent Address</label>
                                                    <input type="text" placeholder="" name="updated_permanent_address" class="form-control" value="<?php echo $rows['permanent_address']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Permanent State</label>
                                                    <input type="text" placeholder="" name="updated_permanent_state" class="form-control" value="<?php echo $rows['permanent_state']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Permanent District</label>
                                                    <input type="text" placeholder="" name="updated_permanent_district" class="form-control" value="<?php echo $rows['permanent_district']; ?>">
                                                </div>                                                
                                                
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Permanent Pin Code</label>
                                                    <input type="text" placeholder="" name="updated_permanent_pincode" class="form-control" value="<?php echo $rows['permanent_pincode']; ?>">
                                                </div>
                                                <div class="col-lg-6 col-12 form-group">
                                                    <label>&nbsp;</label>
                                                    <input type="file" name="updated_img" class="form-control-file">
                                                    <img src="<?php echo $rows['student_photo']; ?>" alt="update_img" width="100px" height="100px">
                                                </div>
                                                <!-- <div class="col-md-12 form-group">
                                                    <label for="update_transport">If you want transport service.</label>
                                                     <input type="radio" name="update_transport" id="check1" value="yes" class="form-radio"> Yes
                                                     <input type="radio" name="update_transport" id="check1" value="no" class="form-radio"> No
                                                </div> -->
                                                <div class="col-12 form-group mg-t-8">
                                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                                </div>
                                            </div>
                                            <?php 
                                           }
                                        }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                                <!-- Admit Form Area End Here -->

                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                 <!-- Admit Form Area Start Here -->
                                <div class="card height-auto">
                                    <div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h3>Bank Details</h3>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                    aria-expanded="false">...</a>

                                            </div>
                                        </div>
                                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                                        <?php
                                    include('php/dbconfig.php');

                                    $sess_session_rollno = $_SESSION['session_rollno'];
                                    $sess_session_name = $_SESSION['session_name'];
                                    $sess_session_class = $_SESSION['session_classname'];

                                    if(isset($_POST['update_bank']))
                                    {
                                        $updated_bank_name = $_POST['updated_bank_name'];
                                        $updated_bank_accno = $_POST['updated_bank_accno'];
                                        $updated_bank_ifsc = $_POST['updated_bank_ifsc'];
                                        $updated_bank_nidn = $_POST['updated_bank_nidn'];
                                        $updated_bank_lidn = $_POST['updated_bank_lidn'];
                                        $updated_bank_rte = $_POST['updated_bank_rte'];

                                        $update_q = "UPDATE `misc_details` SET `id`='0',`session_name`='$sess_session_name',`student_rollno`='$sess_session_rollno',`student_class`='$sess_session_class',`Bank_account_number`='$updated_bank_accno',`Bank_Name`='$updated_bank_name',`ifsc`='$updated_bank_ifsc',`National_id_Nu`='$updated_bank_nidn',`Local_id_Nu`='$updated_bank_lidn',`RTE`='$updated_bank_rte',`date`=now() WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name'";
                                        $run_update = $conn->query($update_q);

                                        if($run_update)
                                        {
                                            header('location:all-student.php');
                                        }
                                        else
                                        {
                                            echo "<script>alert('not done');</sript>";
                                        }
                                        
                                        ob_end_flush();

                                    }

                                    // selection to input values

                                    $q = "SELECT * FROM misc_details WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name' ";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {
                                            ?>
                                            <div class="row">   
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" placeholder="" name="updated_bank_name" value="<?php echo $rows['Bank_Name']; ?>" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Bank Account No.</label>
                                                    <input type="text" placeholder="" name="updated_bank_accno" value="<?php echo $rows['Bank_account_number']; ?>" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Bank IFSC</label>
                                                    <input type="text" placeholder="" name="updated_bank_ifsc" value="<?php echo $rows['ifsc']; ?>" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>National ID No.</label>
                                                    <input type="text" placeholder="" name="updated_bank_nidn" value="<?php echo $rows['National_id_Nu']; ?>" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Local ID No.</label>
                                                    <input type="text" placeholder="" name="updated_bank_lidn" value="<?php echo $rows['Local_id_Nu']; ?>" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>RTE</label>
                                                    <select class="select2" name="updated_bank_rte">
                                                        <option value="<?php echo $rows['RTE']; ?>"><?php echo $rows['RTE']; ?></option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                   
                                                <div class="row">
                                                <div class="col-12 form-group mg-t-8">
                                                    <button type="submit" name="update_bank" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                                </div>
                                                </div>
                                            </div>
                                            <?php }} ?>
                                        </form>
                                    </div>
                                </div>
                                <!-- Admit Form Area End Here -->  
                               </div>
                              <div class="tab-pane fade" id="tab3" role="tabpanel">
                                <!-- Admit Form Area Start Here -->
                                <div class="card height-auto">
                                    <div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h3>Parents Detail</h3>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                    aria-expanded="false">...</a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                                        <?php
                                    include('php/dbconfig.php');

                                    $sess_session_rollno = $_SESSION['session_rollno'];
                                    $sess_session_name = $_SESSION['session_name'];
                                    $sess_session_class = $_SESSION['session_classname'];

                                    if(isset($_POST['submit_parent']))
                                    {
                                        $updated_father_name = $_POST['updated_father_name'];
                                        $updated_father_contact = $_POST['updated_father_contact'];
                                        $updated_father_occupation = $_POST['updated_father_occupation'];
                                        $updated_father_photo = $_FILES['updated_father_photo'];
                                        $updated_mother_name = $_POST['updated_mother_name'];
                                        $updated_mother_contact = $_POST['updated_mother_contact'];
                                        $updated_mother_occupation = $_POST['updated_mother_occupation'];
                                        $updated_mother_photo = $_FILES['updated_mother_photo'];


                                        $filename_father = $_FILES['updated_father_photo']['name'];
                                        $tmpname_father = $_FILES['updated_father_photo']['tmp_name'];

                                        $filename_mother = $_FILES['updated_mother_photo']['name'];
                                        $tmpname_mother = $_FILES['updated_mother_photo']['tmp_name'];
                              
                                        $folder_father_photo = "img/parents_img/".$filename_father;
                                        $folder_mother_photo = "img/parents_img/".$filename_mother;
                              
                                        $diff_f = explode('.' , $filename_father);
                                        $diff_m = explode('.' , $filename_mother);
                              
                                        $check_f = strtolower(end($diff_f));
                                        $check_m = strtolower(end($diff_m));
                              
                                        $arr = array('jpg', 'jpeg' , 'png' , 'svg'); 

                                        if(in_array($check_f,$arr) && in_array($check_m,$arr))
                                        {
                                            move_uploaded_file($tmpname_father,$folder_father_photo);
                                            move_uploaded_file($tmpname_mother,$folder_mother_photo);

                                            $update_q = "UPDATE `parents` SET `id`='0',`session_name`='$sess_session_name',`student_rollno`='$sess_session_rollno',`student_class`='$sess_session_class',`F_Name`='$updated_father_name',`F_Phone`='$updated_father_contact',`F_Occupation`='$updated_father_occupation',`F_Photo`='$folder_father_photo',`M_Name`='$updated_mother_name',`M_Phone`='$updated_mother_contact',`M_Occupation`='$updated_mother_occupation',`M_Photo`='$folder_mother_photo',`date`=now() WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name' ";
                                            $run_update = $conn->query($update_q);

                                            if($run_update)
                                            {
                                                header('location:all-student.php');
                                            }
                                            else
                                            {
                                                echo "<script>alert('not done');</sript>";
                                            }
                                        }

                                        ob_end_flush();

                                    }

                                    // selection to input values

                                    $q = "SELECT * FROM parents WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name' ";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {
                                            ?>
                                            <div class="row">
                                                   <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Father's Name</label>
                                                    <input type="text" placeholder="" name="updated_father_name" class="form-control" value="<?php echo $rows['F_Name']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Father's Contact No.</label>
                                                    <input type="text" placeholder="" name="updated_father_contact" class="form-control" value="<?php echo $rows['F_Phone']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Father's Occupation</label>
                                                    <input type="text" placeholder="" name="updated_father_occupation" class="form-control" value="<?php echo $rows['F_Occupation']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Father's Photo</label>
                                                    <input type="file" placeholder="" name="updated_father_photo" class="" value="">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current Photo</label>
                                                    <img src="<?php echo $rows['F_Photo']; ?>" alt="current_father_photo" width="100px" height="100px">
                                                </div>

                                                
                                                
                                                </div>



                                                <!-- <div class="item-title">
                                                    <h3>Mother Detail</h3>
                                                   </div>  -->
                                                 <div class="row mt-5">
                                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Mother's Name</label>
                                                    <input type="text" placeholder="" name="updated_mother_name" class="form-control" value="<?php echo $rows['M_Name']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Mother's Phone No.</label>
                                                    <input type="text" placeholder="" name="updated_mother_contact" class="form-control" value="<?php echo $rows['M_Phone']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Mother's Occupation</label>
                                                    <input type="text" placeholder="" name="updated_mother_occupation" class="form-control" value="<?php echo $rows['M_Occupation']; ?>">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Mother's Photo</label>
                                                    <input type="file" placeholder="" name="updated_mother_photo" class="" value="">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current Photo</label>
                                                    <img src="<?php echo $rows['M_Photo']; ?>" alt="Mother's photo" width="100px" height="100px">
                                                </div>
                                            </div>

                                              
                                                <div class="col-12 form-group mg-t-8">
                                                    <button type="submit" name="submit_parent" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                                </div>
                                            </div>
                                            <?php }
                                        }?>
                                        </form>
                                    </div>
                                </div>
                                <!-- Admit Form Area End Here --> 
                              </div>
                              <div class="tab-pane fade" id="tab4" role="tabpane4">
 
                              <!-- Admit Form Area Start Here -->
                                <div class="card height-auto">
                                    <div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h3>Guardian Details</h3>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                    aria-expanded="false">...</a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                                        <?php
                                    include('php/dbconfig.php');

                                    $sess_session_rollno = $_SESSION['session_rollno'];
                                    $sess_session_name = $_SESSION['session_name'];
                                    $sess_session_class = $_SESSION['session_classname'];

                                    if(isset($_POST['submit_guardian']))
                                    {
                                        
                                        $updated_guardian_is = $_POST['updated_guardian_is'];
                                        $updated_guardian_relation = $_POST['updated_guardian_relation'];
                                        $updated_guardian_name = $_POST['updated_guardian_name'];
                                        $updated_guardian_email = $_POST['updated_guardian_email'];
                                        
                                        $updated_guardian_phone = $_POST['updated_guardian_phone'];
                                        $updated_guardian_occupation = $_POST['updated_guardian_occupation'];
                                        $updated_guardian_address = $_POST['updated_guardian_address'];
                                        $updated_guardian_state = $_POST['updated_guardian_state'];
                                        $updated_guardian_district = $_POST['updated_guardian_district'];
                                        $updated_guardian_pincode = $_POST['updated_guardian_pincode'];
                                        $updated_guardian_photo = $_FILES['updated_guardian_photo'];


                                        $filename_guardian = $_FILES['updated_guardian_photo']['name'];
                                        $tmpname_guardian = $_FILES['updated_guardian_photo']['tmp_name'];
                              
                                        $folder_guardian_photo = "img/guardian_img/".$filename_guardian;
                              
                                        $diff_g = explode('.' , $filename_guardian);
                                        
                              
                                        $check_g = strtolower(end($diff_g));
                              
                                        $arr = array('jpg', 'jpeg' , 'png' , 'svg'); 

                                        if(in_array($check_g,$arr))
                                        {
                                            move_uploaded_file($tmpname_guardian,$folder_guardian_photo);

                                            $update_it = "UPDATE `guardian` SET `id`='0',`session_name`='$sess_session_name',`student_rollno`='$sess_session_rollno',`student_class`='$sess_session_class',`Guardian_is`='$updated_guardian_is',`G_Name`='$updated_guardian_name',`G_Relation`='$updated_guardian_relation',`G_Email`='$updated_guardian_email',`G_photo`='$folder_guardian_photo',`G_Phone`='$updated_guardian_phone',`G_Occupation`='$updated_guardian_occupation',`G_Address`='$updated_guardian_address',`G_State`='$updated_guardian_state',`G_District`='$updated_guardian_district',`G_Pincode`='$updated_guardian_pincode',`date`=now() WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name'";
                                            $run_update = $conn->query($update_it);

                                            if($run_update)
                                            {
                                                header('location:all-student.php');
                                            }
                                            else
                                            {
                                                echo "<script>alert('not done');</sript>";
                                            }
                                        }

                                        ob_end_flush();

                                    }

                                    // selection to input values

                                    $q = "SELECT * FROM guardian WHERE student_rollno='$get_roll_no' AND session_name='$get_session_name' AND student_class='$get_class_name' ";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {
                                            ?>
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian is *</label>
                                                    <select class="select2" value="" name="updated_guardian_is">
                                                        <option value="<?php echo $rows['Guardian_is']; ?>"><?php echo $rows['Guardian_is']; ?></option>
                                                        <option value="Father">Father</option>
                                                        <option value="Mother">Mother</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Relation*</label>
                                                    <input type="text" placeholder="" name="updated_guardian_relation" value="<?php echo $rows['G_Relation']; ?>" name="guardian_relation" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Name*</label>
                                                    <input type="text" placeholder="" name="updated_guardian_name" value="<?php echo $rows['G_Name']; ?>" name="guardian_email" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Email*</label>
                                                    <input type="email" placeholder="" name="updated_guardian_email" value="<?php echo $rows['G_Email']; ?>" name="guardian_email" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Phone</label>
                                                    <input type="text" placeholder="" name="updated_guardian_phone" value="<?php echo $rows['G_Phone']; ?>" name="guardian_phone" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Occupation</label>
                                                    <input type="text" placeholder="" name="updated_guardian_occupation" value="<?php echo $rows['G_Occupation']; ?>" name="guardian_occupation" class="form-control">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Address</label>
                                                    <input type="text" class="form-control" name="updated_guardian_address" value="<?php echo $rows['G_Address']; ?>" name="guardian_address">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian State</label>
                                                    <input type="text" class="form-control" name="updated_guardian_state" value="<?php echo $rows['G_State']; ?>" name="guardian_address">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian District</label>
                                                    <input type="text" class="form-control" name="updated_guardian_district" value="<?php echo $rows['G_District']; ?>" name="guardian_address">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Pincode</label>
                                                    <input type="text" class="form-control" name="updated_guardian_pincode" value="<?php echo $rows['G_Pincode']; ?>" name="guardian_address">
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Guardian Photo</label>
                                                    <input type="file" placeholder="" value="" name="updated_guardian_photo" class="form-control-file">
                                                </div>

                                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                    <label>Current Guardian Photo</label>
                                                    <img src="<?php echo $rows['G_photo']; ?>" alt="guardian photo" width="100px" height="100px">
                                                </div>
                  
                                             <div class="col-12 form-group mg-t-8">
                                                    <button type="submit" name="submit_guardian" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                                </div>
                                            </div>
                                            <?php } } ?>
                                        </form>
                                    </div>
                                </div>
                                <!-- Admit Form Area End Here --> 
                             </div>   

                            </div>
                        </div>
                     <!-- Tab Area End Here -->
                        <footer class="footer-wrap-layout1">
                            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                        </footer>
                    </div>
                </div>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>


</body>

</html>