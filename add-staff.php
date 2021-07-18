<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
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
    <style type="text/css">
/*$primary = #225CFF;
$gray = #C8CCD4;*/

    </style>
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
                    <h3>Staff</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Colleague</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Colleague</h3>
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
                        <form class="new-added-form" method="post" enctype="multipart/form-data">
                        <?php
                                include("php/dbconfig.php");

                                // Add New Teacher//

                                if(isset($_POST['submit']))
                                {
                                $emp_code = $_POST['emp_code'];
                                $fname = $_POST['fname'];
                                $mname = $_POST['mname'];
                                $lname = $_POST['lname'];
                                $father_name = $_POST['father_name'];
                                $mother_name = $_POST['mother_name'];
                                $nominee_name = $_POST['nominee_name'];
                                $m_status = $_POST['m_status'];
                                $sname = $_POST['sname'];
                                $gender = $_POST['gender'];
                                $dob = $_POST['dob'];
                                $adhaar_no = $_POST['adhaar_no'];
                                $pan_no = $_POST['pan_no'];
                                $religion = $_POST['religion'];
                                $category = $_POST['category'];
                                $emp_status = $_POST['emp_status'];
                                $blood = $_POST['blood'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $img = $_FILES['img'];

                                //End//

                                // Mailing Address //

                                $mailing_addr1 = $_POST['mailing_addr1'];
                                $mailing_addr2 = $_POST['mailing_addr2'];
                                $country = $_POST['country'];
                                $state = $_POST['state'];
                                $district = $_POST['district'];
                                $city = $_POST['city'];
                                $pincode = $_POST['pincode'];

                                // Permanent Address //

                                $perma_addr1 = $_POST['perma_addr1'];
                                $perma_addr2 = $_POST['perma_addr2'];
                                $perma_country = $_POST['perma_country'];
                                $perma_state = $_POST['perma_state'];
                                $perma_district = $_POST['perma_district'];
                                $perma_city = $_POST['perma_city'];
                                $perma_pincode = $_POST['perma_pincode'];

                                //End//

                                // Job Details //

                                $branch = $_POST['branch'];
                                $job_type = $_POST['job_type'];
                                $s_type = $_POST['s_type'];
                                $post = $_POST['post'];
                                $house = $_POST['house'];
                                $doj = $_POST['doj'];
                                $doc = $_POST['doc'];
                                $date_pf = $_POST['date_pf'];
                                $bank_name = $_POST['bank_name'];
                                $bank_acc_no = $_POST['bank_acc_no'];
                                $pf_app = $_POST['pf_app']; 
                                $pf_acc_no = $_POST['pf_acc_no'];
                                $p_app = $_POST['p_app'];
                                $p_acc_no = $_POST['p_acc_no'];
                                $g_app = $_POST['g_app'];
                                $esi_app = $_POST['esi_app'];
                                $hra_app = $_POST['hra_app'];
                                $sdt = $_POST['sdt'];

                                //End//

                                //Salary//

                                $pay_scale = $_POST['pay_scale'];
                                $pay_brand = $_POST['pay_brand'];
                                $grade_pay = $_POST['grade_pay'];
                                $cur_basic = $_POST['cur_basic'];
                                $ta = $_POST['ta'];
                                $other_allow = $_POST['other_allow'];
                                $misc = $_POST['misc'];
                                $misc_ded_date = $_POST['misc_ded_date'];
                                $lic_acc_no = $_POST['lic_acc_no'];
                                $lic_amt = $_POST['lic_amt'];
                                $tds = $_POST['tds'];
                                $loan_amt = $_POST['loan_amt'];
                                $loan_deduct = $_POST['loan_deduct'];
                                $loan_date = $_POST['loan_date'];

                                //End//

                                // Family Detail //

                                $fam_name = $_POST['fam_name'];
                                $fam_dob = $_POST['fam_dob'];
                                $relation = $_POST['relation'];
                                $occupation = $_POST['occupation'];

                                //End//
                                
                                // Qualification Details //

                                $course = $_POST['course'];
                                $institute = $_POST['institute'];
                                $percentage = $_POST['percentage'];
                                $pass_year = $_POST['pass_year'];

                                //End//
                                
                                $check_for_existing = "SELECT * FROM staff WHERE code='$emp_code' ";
                                $run_this_qry = $conn->query($check_for_existing);

                                if(!$run_this_qry->num_rows > 0)
                                {

                                    $arr_img = array('jpeg','png','jpg','svg','webp');
            
                                    // staff photo upload
                                    $staff_pic_name = $_FILES['img']['name'];
                                    $staff_pic_tmpname = $_FILES['img']['tmp_name'];
                                    $folder_staff_photo = "img/staff_img/".$staff_pic_name;
            
                                    $staff_pic_name_diff = explode('.',$staff_pic_name);
                                    $staff_pic_name_check = strtolower(end($staff_pic_name_diff));

                                    if(in_array($staff_pic_name_check,$arr_img))
                                    {
                                        move_uploaded_file($staff_pic_tmpname,$folder_staff_photo);

                                        // Insertion for Add Employee //
                                
                                        $insert_emp = "INSERT INTO staff VALUES('0','$emp_code','$fname','$mname','$lname','$father_name','$mother_name','$nominee_name','$m_status','$sname','$gender','$dob','$adhaar_no','$pan_no','$religion','$category','$emp_status','$blood','$email','$phone','$folder_staff_photo',now())";
                                        $run = $conn->query($insert_emp);

                                        //End//

                                        //Insertion for Mailing Address//

                                        $insert_addr = "INSERT INTO staff_address VALUES('0','$emp_code','$mailing_addr1','$mailing_addr2','$country','$state','$district','$city','$pincode','$perma_addr1','$perma_addr2','$perma_country','$perma_state','$perma_district','$perma_city','$perma_pincode',now() )";
                                        $run_addr = mysqli_query($conn,$insert_addr);

                                        //End//


                                        //Insertion for Job Detail //

                                        $insert_detail = "INSERT INTO staff_job_detail VALUES('0','$emp_code','$branch','$job_type','$s_type','$post','$house','$doj','$doc','$date_pf','$bank_name','$bank_acc_no','$pf_app','$pf_acc_no','$p_app','$p_acc_no','$g_app','$esi_app','$hra_app','$sdt',now() )";
                                        $run_job = mysqli_query($conn,$insert_detail);

                                        //End//

                                        // Insertion for salary //

                                        $insert_salary = "INSERT INTO staff_salary_details VALUES('0','$emp_code','$pay_scale','$pay_brand','$grade_pay','$cur_basic','$ta','$other_allow','$misc','$misc_ded_date','$lic_acc_no','$lic_amt','$tds','$loan_amt','$loan_deduct','$loan_date',now() )";
                                        $run_salary = mysqli_query($conn,$insert_salary);

                                        //End//

                                        // Insertion for family//

                                        $insert_family = "INSERT INTO staff_family_details VALUES('0','$emp_code','$fam_name','$fam_dob','$relation','$occupation',now() )";
                                        $run_family = mysqli_query($conn,$insert_family);

                                        //End//

                                        //Insertion for Qualification//

                                        $insert_qual = "INSERT INTO staff_qual_details VALUES('0','$emp_code','$course','$institute','$percentage','$pass_year',now() )";
                                        $run_qual = mysqli_query($conn,$insert_qual);
                            
                                        //End//                                
                                
                                        if($run && $run_addr && $run_job && $run_salary && $run_family && $run_qual)
                                        {
                                        echo "<script>alert('done bro');</script>";
                                        }
                                        else
                                        {
                                        echo "<script>alert('not done bro');</script>";
                                        }
                                    
                                    }
                                }
                                else
                                {
                                    echo "This code alreay exists";
                                }
                                

                                }

                                
                            ?>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Employee Code<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="emp_code">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="fname">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middle Name</label>
                                    <input type="text" placeholder="" class="form-control" name="mname">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name </label>
                                    <input type="text" placeholder="" class="form-control" name="lname">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father Name<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="father_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Name<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="mother_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nominee Name</label>
                                    <input type="text" placeholder="" class="form-control" name="nominee_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Marital Status</label>
                                   <select class="select2" name="m_status">
                                        <option value="">Please Select Marital Status*</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Spouse Name</label>
                                    <input type="text" placeholder="" class="form-control" name="sname">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender<font color="red"> *</font></label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth<font color="red"> *</font></label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="dob">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Aadhaar No<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="adhaar_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pan No.</label>
                                    <input type="text" placeholder="" class="form-control" name="pan_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion </label>
                                    <select class="select2" name="religion">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="3">Buddish</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>category<font color="red"> *</font></label>
                                    <select class="select2" name="category">
                                        <option value="">Please Select Category*</option>
                                        <option value="general">General</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Employee Status</label>
                                   <select class="select2" name="emp_status">
                                        <option value="">Please Select EMP Status*</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group </label>
                                    <select class="select2" name="blood">
                                        <option value="">Please Select Group*</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail<font color="red"> *</font></label>
                                    <input type="email" placeholder="" class="form-control" name="email">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium"><label>
                                    <input type="file" class="form-control-file" id="profile-img" accept="image/gif, image/jpeg, image/png" name="img">
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <img src="" id="profile-img-tag" width="100px" height="100px" />
                                </div>

                                <!-- address starts here -->
                                <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Mailing Address</h3>
                                   </div>
                               </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address Line 1<font color="red"> *</font></label>
                                    <input type="text" id="line1" placeholder="" class="form-control" name="mailing_addr1">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" id="line2" placeholder="" class="form-control" name="mailing_addr2">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Country<font color="red"> *</font> </label>
                                    <select class="form-control" id="country1" name="country">
                                        <option value="0">Please Select Country</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State<font color="red"> </font> </label>
                                    <select class="form-control" id="state1" name="state">
                                        <option value="0">Please Select State</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>District<font color="red"> </font> </label>
                                    <select class="form-control" id="district1" name="district">
                                        <option value="0">Please Select District</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>City<font color="red"> </font></label>
                                    <input type="text" id="city1" placeholder="" class="form-control" name="city">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin Code</label>
                                    <input type="text" id="pin1" placeholder="" class="form-control" name="pincode">
                                </div>


                                 <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Permanent Address</h3>
                                   </div>
                                   <div class="item">
                                    <input type="checkbox" name="filladdress" id="fillAddress"> Same as Mailing Address
                                </div>
                               </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address Line 1<font color="red"> </font></label>
                                    <input type="text" id="line12" placeholder="" class="form-control" value="" name="perma_addr1">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" id="line22" placeholder="" class="form-control" value="" name="perma_addr2">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Country<font color="red"> </font> </label>
                                    <select class="form-control" id="country2" name="perma_country" value="">
                                        <option value="0">Please Select Country</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State<font color="red"> </font> </label>
                                    <select class="form-control" id="state2" name="perma_state">
                                        <option value="0">Please Select State</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>District<font color="red"> </font> </label>
                                    <select class="form-control" id="district2" name="perma_district">
                                        <option value="0">Please Select District</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>City<font color="red"> </font></label>
                                    <input type="text" id="city2" placeholder="" class="form-control" name="perma_city">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin</label>
                                    <input type="text" id="pin2" placeholder="" class="form-control" name="perma_pincode">
                                </div>

                                <!-- job details -->
                                 <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Job Detail</h3>
                                   </div>
                               </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Branch<font color="red"> *</font> </label>
                                    <select class="select2" name="branch">
                                        <option value="0">Please Select Branch*</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Job Type<font color="red"> *</font> </label>
                                    <select class="select2" name="job_type">
                                        <option value="0">Please Select Job Type*</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Staff type<font color="red"> *</font> </label>
                                    <select class="select2" name="s_type">
                                        <option value="0">Please Select Staff Type*</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Designation<font color="red"> *</font> </label>
                                    <select class="select2" name="post">
                                        <option value="0">Please Select Designation*</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>House</label>
                                    <select class="select2" name="house">
                                        <option value="0">Please Select Home*</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Joining<font color="red"> *</font></label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="doj">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Confirmation</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="doc">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Joining PF<font color="red"> *</font></label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="date_pf">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank Name<font color="red"> *</font> </label>
                                    <select class="select2" name="bank_name">
                                        <option value="0">Please Select Bank Name*</option>
                                        <option value="1">Select</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank A/c Number <font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="bank_acc_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>PF Applicable</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio pf-a" value="1" name="pf_app"> <span class="rdo-label">Yes</span>
                                   <input type="radio" class="form-radio pf-a" value="0" name="pf_app"> <span class="rdo-label">No</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>PF A/c Number</label>
                                    <input type="text" placeholder="" id="pf-ac" class="form-control" name="pf_acc_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Pension Applicable</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio pension-a" value="1" name="p_app"> 
                                   <span class="rdo-label">Yes</span>
                                   <input type="radio" class="form-radio pension-a" value="0" name="p_app"> 
                                   <span class="rdo-label">No</span>                             
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pension A/c Number</label>
                                    <input type="text" placeholder=""  id="pension-ac" class="form-control" name="p_acc_no">
                                </div>
                                
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Gratuity Applicable</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio" value="1" name="g_app"> 
                                   <span class="rdo-label">Yes</span>
                                   <input type="radio" class="form-radio" value="0" name="g_app"> 
                                   <span class="rdo-label">No</span>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>ESI Applicable</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio" value="1" name="esi_app"> 
                                   <span class="rdo-label">Yes</span>
                                   
                                   <input type="radio" class="form-radio" value="0" name="esi_app">
                                   <span class="rdo-label">No</span>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>HRA Applicable</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio" value="1" name="hra_app"> 
                                   <span class="rdo-label">Yes</span>
                                   <input type="radio" class="form-radio" value="0" name="hra_app">
                                   <span class="rdo-label">No</span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>State Development Tax</label>
                                   <!-- <div class="border"> -->
                                    <div class="form-group">
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio" value="1" name="sdt"> 
                                   <span class="rdo-label">Yes</span>
                                   <input type="radio" class="form-radio" value="0" name="sdt"> 
                                   <span class="rdo-label">No</span>
                               </div>
                                   <!-- </div> -->
                                </div>
                            </div>

                            <!-- salary details -->
                            <div class="row">
                                <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Salary & A/C Detail</h3>
                                   </div>
                               </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pay Scale<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="pay_scale">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pay Brand<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="pay_brand">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Grade Pay</label>
                                    <input type="text" placeholder="" class="form-control" name="grade_pay">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Current Basic<font color="red"> *</font></label>
                                    <input type="text" placeholder="" class="form-control" name="cur_basic">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>T.A.</label>
                                    <input type="text" placeholder="" class="form-control" name="ta">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Other Allowance</label>
                                    <input type="text" placeholder="" class="form-control" name="other_allow">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Misc/Advance</label>
                                    <input type="text" placeholder="" class="form-control" name="misc">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Misc Deduction Date</label>
                                   <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="misc_ded_date">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>LIC A/c</label>
                                    <input type="text" placeholder="" class="form-control" name="lic_acc_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>LIC Amount</label>
                                    <input type="text" placeholder="" class="form-control" name="lic_amt">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>TDS</label>
                                    <input type="text" placeholder="" class="form-control" name="tds">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Loan Amount</label>
                                    <input type="text" placeholder="" class="form-control" name="loan_amt">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Loan Deduction</label>
                                    <input type="text" placeholder="" class="form-control" name="loan_deduct">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Loan Date</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="loan_date">
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <!-- family details -->
                                 <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Family Detail</h3>
                                   </div>
                               </div>
                           </div>
                            <div class="row">
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="" class="form-control" name="fam_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>DOB</label>
                                   <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="fam_dob">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Relation</label>
                                    <input type="text" placeholder="" class="form-control" name="relation">
                                </div>
                                <div class="col-xl-2 col-lg-6 col-12 form-group">
                                    <label>Occupation</label>
                                    <input type="text" placeholder="" class="form-control" name="occupation">
                                </div>
                            </div>
                            <div id="input-field-family">

                             </div>
                             <div class="row">
                                    <div class="col-12 col-xl-12 col-lg-12 mg-t-8 text-right">
                                      <button type="submit" class="btn btn-gradient-yellow btn-hover-bluedark btn-lg btn-hover-bluedark text-right" id="add-family">+ Add More</button>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 form-group mg-t-30">
                                    <div class="item-title">
                                      <h3>Qualification Detail</h3>
                                   </div>
                               </div>
                           </div>
                            <div class="row">
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Qualification</label>
                                    <input type="text" placeholder="" name="course" class="form-control" name="loan_date">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Institution</label>
                                    <input type="text" placeholder="" name="institute" class="form-control" name="loan_date">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Percentage</label>
                                    <input type="text" placeholder="" name="percentage" class="form-control" name="loan_date">
                                </div>
                                <div class="col-xl-2 col-lg-6 col-12 form-group">
                                    <label>Passing Year</label>
                                    <input type="text" id="year" placeholder="" name="pass_year" class="form-control" name="loan_date">
                                </div>
                            </div>
                            <div id="input-field-quli">

                             </div>
                             <div class="row">
                                    <div class="col-12 col-xl-12 col-lg-12 mg-t-8 text-right">
                                      <button type="submit" class="btn btn-gradient-yellow btn-hover-bluedark btn-lg text-right" id="add-field">+ Add More</button>
                                  </div>
                              </div>

                            <div class="row">
                                <div class="col-12 form-group mg-t-30">
                                    <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
                
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

    <script type="text/javascript">
        $(document).ready(function()
        {
               $('#pf-ac').prop('disabled', true);
               $('#pension-ac').prop('disabled', true);


            $('.pf-a').change(function()
               {
                if($(this).val() == 1)
                {
                $('#pf-ac').prop('disabled', false);
                $("#pf-ac").css("opacity", "1");
               }
               else
               {
                 $('#pf-ac').prop('disabled', true);
                 $("#pf-ac").css("opacity", "0.6");
               }
            });

            $('.pension-a').change(function()
               {
                if($(this).val() == 1)
                {
                $('#pension-ac').prop('disabled', false);
                $("#pension-ac").css("opacity", "1");
               }
               else
               {
                 $('#pension-ac').prop('disabled', true);
                 $("#pension-ac").css("opacity", "0.6");
               }
            });

            $("#fillAddress").on("click", function()
            {
                if (this.checked)
                 { 
                            $("#line12").val($("#line1").val());
                            $("#line22").val($("#line2").val());
                            $("#country2").val($("#country1").val()); 
                            $("#state2").val($("#state1").val());  
                            $("#district2").val($("#district1").val());  
                            $("#city2").val($("#city1").val());  
                            $("#pin2").val($("#pin1").val());                          
                }
                else
                {
                             $('#line12').val('');
                             $('#line22').val('');
                             $('#country2').val('');
                             $('#state2').val('');
                             $('#district2').val('');
                             $('#city2').val('');
                             $('#pin2').val('');           
                }
            });

            var quli_fields = 8;
            var quli_area = $("#input-field-quli");
            var q = 1;
            
            $('#add-field').click(function(e){
                e.preventDefault();
                if(q < quli_fields)
                {
                    q++;
                    $(quli_area).append('<div class="row"><div class="col-xl-3 col-lg-6 col-12 form-group"><label>Qualification</label><input type="text" placeholder="" name="qualification['+q+']" class="form-control"></div><div class="col-xl-3 col-lg-6 col-12 form-group"><label>Institution</label><input type="text" placeholder="" institute="text['+q+']" class="form-control"></div><div class="col-xl-3 col-lg-6 col-12 form-group"><label>Percentage</label><input type="text" placeholder="" name="percentage['+q+']" class="form-control"></div><div class="col-xl-2 col-lg-6 col-12 form-group"><label>Passing Year</label><input type="text" placeholder="" name="pass-year['+q+']" class="form-control" </div></div><a href="" id="remove" class="btn-danger btn btn-lg mg-t-8" style="height: 30px; margin-top: 45px; margin-bottom: 10px;"><i class="fas fa-trash-alt"></i></a>');
                        
                }
            });
            
           $(quli_area).on("click", "#remove", function(e){
                e.preventDefault(); $(this).parent('div').remove();
                 q--;
            })

          var family_field = 5;
            var family_area = $("#input-field-family");
            var f = 1;
            
            $('#add-family').click(function(e){
                e.preventDefault();
                if(f < family_field)
                {
                    f++;
                    $(family_area).append('<div class="row"><div class="col-xl-3 col-lg-6 col-12 form-group"><label>Name</label><input type="text" placeholder="" name="name['+f+']" class="form-control"></div><div class="col-xl-3 col-lg-6 col-12 form-group"><label>DOB</label><input type="text" placeholder="" dob="text['+f+']" class="form-control"></div><div class="col-xl-3 col-lg-6 col-12 form-group"><label>Relation</label><input type="text" placeholder="" name="relation['+f+']" class="form-control"></div><div class="col-xl-2 col-lg-6 col-12 form-group"><label>Occupation</label><input type="text" placeholder="" name="occupation['+f+']" class="form-control" </div></div><a href="" id="remove" class="btn btn-danger btn-lg text-right mg-t-8" style="    height: 30px; margin-top: 45px; margin-bottom: 10px;">X</a>');
                        
                }
            });
            
           $(family_area).on("click", "#remove", function(e){
                e.preventDefault(); $(this).parent('div').remove();
                 f--;
            })



        });


                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#profile-img-tag').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#profile-img").change(function(){
                    readURL(this);
                });
 
    </script>
</body>

</html>