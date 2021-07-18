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
      <!--Css2-->
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
    <div id="wrapper" class="wrapper bg-ash" >
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
                            
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title"><?php if($_SESSION['uname']) {echo $_SESSION['uname'];} else { echo "<script>location.href='login.php'</script>"; } ?></h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php if($_SESSION['uname']) {echo $_SESSION['uname'];} else { echo "<script>location.href='login.php'</script>"; } ?></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-turn-off"></i>Log Out</a></li>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
              <!-- Admit Form Area Start Here -->
                <div class="card height-auto mb-5" id="Shadow">
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
                        
                        <form method="post" class="new-added-form" enctype="multipart/form-data">
                        <?php

    include('php/dbconfig.php');

    if(isset($_POST['submit']))
    {   
        // student form
        $admission_no = $_POST['admission_no'];
        $session_name = $_POST['session_name'];
        $roll_no = $_POST['roll_no'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $aadhaar = $_POST['aadhaar'];
        $religion = $_POST['religion'];
        $category = $_POST['category'];
        $caste = $_POST['caste'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $admission_date = $_POST['admission_date'];
        $sibling = $_POST['sibling'];
        $blood = $_POST['blood'];
        $student_house = $_POST['student_house'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $img = $_FILES['img'];
        $permanent_address = $_POST['permanent_address'];
        $permanent_state = $_POST['permanent_state'];
        $permanent_district = $_POST['permanent_district'];
        $permanent_pincode = $_POST['permanent_pincode'];
        $current_address = $_POST['current_address'];
        $current_state = $_POST['current_state'];
        $current_district = $_POST['current_district'];
        $current_pincode = $_POST['current_pincode'];

        // parents form

        $father_name = $_POST['father_name'];
        $father_phone = $_POST['father_phone'];
        $father_occupation = $_POST['father_occupation'];
        $father_photo = $_FILES['father_photo'];
        $mother_name = $_POST['mother_name'];
        $mother_phone = $_POST['mother_phone'];
        $mother_occupation = $_POST['mother_occupation'];
        $mother_photo = $_FILES['mother_photo'];

        // guardian form

        $guardian_is = $_POST['guardian_is'];
        $guardian_name = $_POST['guardian_name'];
        $guardian_relation = $_POST['guardian_relation'];
        $guardian_email = $_POST['guardian_email'];
        $guardian_photo = $_FILES['guardian_photo'];
        $guardian_phone = $_POST['guardian_phone'];
        $guardian_occupation = $_POST['guardian_occupation'];
        $guardian_address = $_POST['guardian_address'];
        $guardian_state = $_POST['guardian_state'];
        $guardian_district = $_POST['guardian_district'];
        $guardian_pincode = $_POST['guardian_pincode'];        

        // transport routes

        $route = $_POST['route'];

        // miscellaneous Details

        $account_no = $_POST['account_no'];
        $bank_name = $_POST['bank_name'];
        $ifsc = $_POST['ifsc'];
        $nin = $_POST['nin'];
        $lin = $_POST['lin'];
        $rte = $_POST['rte'];
        $prev_school = $_POST['prev_school'];
        $note = $_POST['note'];

        // upload Documents

        $d_title1 = $_POST['d_title1'];
        $d_name1 = $_FILES['d_name1'];
        $d_title2 = $_POST['d_title2'];
        $d_name2 = $_FILES['d_name2'];
        $d_title3 = $_POST['d_title3'];
        $d_name3 = $_FILES['d_name3'];
        $d_title4 = $_POST['d_title4'];
        $d_name4 = $_FILES['d_name4'];

        $q = "SELECT * FROM admission WHERE admission_no='$admission_no' ";
        $run_it = $conn->query($q);

        if(!$run_it->num_rows > 0)
        {
            $arr_img = array('jpeg','png','jpg','svg','webp');
            $arr_docs = array('pdf','doc','docx','txt','jpeg','png','jpg','svg','webp');
            
            // student photo upload
            $student_pic_name = $_FILES['img']['name'];
            $student_pic_tmpname = $_FILES['img']['tmp_name'];
            $folder_student_photo = "img/student_img/".$student_pic_name;
            
            $student_pic_name_diff = explode('.',$student_pic_name);
            $student_pic_name_check = strtolower(end($student_pic_name_diff));

            // parents photo upload
            $father_pic_name = $_FILES['father_photo']['name'];
            $father_pic_tmpname = $_FILES['father_photo']['tmp_name'];
            $folder_father_photo = "img/parents_img/".$father_pic_name;

            $father_pic_name_diff = explode('.',$father_pic_name);
            $father_pic_name_check = strtolower(end($father_pic_name_diff));

            $mother_pic_name = $_FILES['mother_photo']['name'];
            $mother_pic_tmpname = $_FILES['mother_photo']['tmp_name'];
            $folder_mother_photo = "img/parents_img/".$mother_pic_name;

            $mother_pic_name_diff = explode('.',$mother_pic_name);
            $mother_pic_name_check = strtolower(end($mother_pic_name_diff));

            // guardian photo upload 

            $guardian_pic_name = $_FILES['guardian_photo']['name'];
            $guardian_pic_tmpname = $_FILES['guardian_photo']['tmp_name'];
            $folder_guardian_photo = "img/guardian_img/".$guardian_pic_name;

            $guardian_pic_name_diff = explode('.',$guardian_pic_name);
            $guardian_pic_name_check = strtolower(end($guardian_pic_name_diff));

            // documents upload

            $document1_pic_name = $_FILES['d_name1']['name'];
            $document1_pic_tmpname = $_FILES['d_name1']['tmp_name'];
            $folder_document1_photo = "uploaded_documents/".$document1_pic_name;

            $document1_pic_name_diff = explode('.',$document1_pic_name);
            $document1_pic_name_check = strtolower(end($document1_pic_name_diff));

            $document2_pic_name = $_FILES['d_name2']['name'];
            $document2_pic_tmpname = $_FILES['d_name2']['tmp_name'];
            $folder_document2_photo = "uploaded_documents/".$document2_pic_name;

            $document2_pic_name_diff = explode('.',$document2_pic_name);
            $document2_pic_name_check = strtolower(end($document2_pic_name_diff));

            $document3_pic_name = $_FILES['d_name3']['name'];
            $document3_pic_tmpname = $_FILES['d_name3']['tmp_name'];
            $folder_document3_photo = "uploaded_documents/".$document3_pic_name;

            $document3_pic_name_diff = explode('.',$document3_pic_name);
            $document3_pic_name_check = strtolower(end($document3_pic_name_diff));

            $document4_pic_name = $_FILES['d_name4']['name'];
            $document4_pic_tmpname = $_FILES['d_name4']['tmp_name'];
            $folder_document4_photo = "uploaded_documents/".$document4_pic_name;

            $document4_pic_name_diff = explode('.',$document4_pic_name);
            $document4_pic_name_check = strtolower(end($document4_pic_name_diff));


                if(in_array($student_pic_name_check,$arr_img) && in_array($father_pic_name_check,$arr_img) && in_array($mother_pic_name_check,$arr_img) && in_array($guardian_pic_name_check,$arr_img) && in_array($document1_pic_name_check,$arr_docs) && in_array($document2_pic_name_check,$arr_docs) && in_array($document2_pic_name_check,$arr_docs)  && in_array($document3_pic_name_check,$arr_img) && in_array($document4_pic_name_check,$arr_docs) ) 
            {
                  move_uploaded_file($student_pic_tmpname,$folder_student_photo);
                  move_uploaded_file($father_pic_tmpname,$folder_father_photo);
                  move_uploaded_file($mother_pic_tmpname,$folder_mother_photo);
                  move_uploaded_file($guardian_pic_tmpname,$folder_guardian_photo);
                  move_uploaded_file($document1_pic_tmpname,$folder_document1_photo);
                  move_uploaded_file($document2_pic_tmpname,$folder_document2_photo);
                  move_uploaded_file($document3_pic_tmpname,$folder_document3_photo);
                  move_uploaded_file($document4_pic_tmpname,$folder_document4_photo);

                
                // guardian insertion query 

                $query_to_guardian = "INSERT INTO guardian VALUES('0','$session_name','$roll_no','$class','$guardian_is','$guardian_name','$guardian_relation','$guardian_email','$folder_guardian_photo','$guardian_phone','$guardian_occupation','$guardian_address','$guardian_state','$guardian_district','$guardian_pincode',now() ) ";

                $insert_vals_guardian = mysqli_query($conn,$query_to_guardian);

                //   student insertion query
                $query_to_student = "INSERT INTO admission VALUES('0','$session_name','$admission_no','$roll_no','$class','$section','$first_name','$last_name','$gender','$dob','$aadhaar','$category','$religion','$caste','$contact','$email','$admission_date','$blood','$student_house','$height','$weight','$sibling','$folder_student_photo','$permanent_address','$permanent_state','$permanent_district','$permanent_pincode','$current_address','$current_state','$current_district','$current_pincode',now() ) ";

                $insert_vals_students = $conn->query($query_to_student);

                //   parents insertion query
                $query_to_parents = "INSERT INTO parents VALUES('0','$session_name','$roll_no','$class','$father_name','$father_phone','$father_occupation','$folder_father_photo','$mother_name','$mother_phone','$mother_occupation','$folder_mother_photo',now() ) ";

                $insert_vals_parents = $conn->query($query_to_parents);

                // transport insertion query

                $query_to_transport = "INSERT INTO transport VALUES('0','$route',now() ) ";

                $insert_vals_transport = $conn->query($query_to_transport);

                // Miscellaneous insertion query

                $query_to_misc = "INSERT INTO misc_details VALUES('0','$session_name','$roll_no','$class','$account_no','$bank_name','$ifsc','$nin','$lin','$rte','$prev_school','$note',now() ) ";

                $insert_vals_misc = $conn->query($query_to_misc);

                // documents upload insertion query

                $query_to_document = "INSERT INTO document VALUES('0','$d_title1','$folder_document1_photo','$d_title2','$folder_document2_photo','$d_title3','$folder_document3_photo','$d_title4','$folder_document4_photo',now() ) ";

                $insert_vals_document = $conn->query($query_to_document);


                
                
                


                if($insert_vals_students && $insert_vals_parents && $insert_vals_guardian && $insert_vals_transport && $insert_vals_misc && $insert_vals_document )
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
            else
            {
                // in_array else condition
            }
            
        }
        else
        {
            // checks if the button is clicked or not
        }


        
    }
    // isset if condition

?>
                            <div class="row">
                            	 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission No *</label>
                                    <input type="text" placeholder="" name="admission_no" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Session </label>
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
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Roll No*</label>
                                    <input type="text" placeholder="" name="roll_no" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="class" value="">
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
                                    <label>Section *</label>
                                    <select class="select2" name="section" value="">
                                        <option value="">Select *</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                        <option value="4">D</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="" name="first_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name </label>
                                    <input type="text" placeholder="" name="last_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="dob" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Aadhaar Number</label>
                                    <input type="text" placeholder="" name="aadhaar" class="form-control">
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
                                    <label>Category</label>
                                    <select class="select2" name="category">
                                        <option value="">Please Select Category *</option>
                                        <option value="1">Ganerel</option>
                                        <option value="2">OBC</option>
                                        <option value="3">SC</option>
                                        <option value="3">ST</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Caste</label>
                                    <input type="text" name="caste"  placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact Number *</label>
                                    <input type="text" name="contact" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail ID</label>
                                    <input type="email" name="email" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Admission Date</label>
                                   <input type="text" name="admission_date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Sibling</label>
                                    <input type="text" name="sibling" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group </label>
                                    <select class="select2" name="blood">
                                        <option value="">Select</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">O+</option>
                                        <option value="3">O-</option>
                                        <option value="3">AB+</option>
                                        <option value="3">AB-</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Student House </label>
                                    <select class="select2"name="student_house">
                                        <option value="">Select</option>
                                        <option value="1">XYZ</option>
                                        <option value="2">XYZ</option>
                                        <option value="3">XYZ</option>
                                        <option value="3">XYZ</option>
                                        <option value="3">XYZ</option>
                                        <option value="3">XYZ</option>
                                    </select>
                                </div>
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Height</label>
                                    <input type="number" name="height" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Weight</label>
                                    <input type="number" name="weight" placeholder="" class="form-control">
                                </div>
                                
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Student Photo *</label>
                                    <input type="file" placeholder="" name="img" class="form-control-file">
                                </div>
                            </div>
                            <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Parent Details</h3>
                            </div>
                              <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father Name</label>
                                    <input type="text" placeholder="" name="father_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father Phone</label>
                                    <input type="number" placeholder="" name="father_phone" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father Occupation</label>
                                    <input type="text" placeholder="" name="father_occupation" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father Photo</label>
                                    <input type="file" placeholder="" name="father_photo" class="form-control-file">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Name</label>
                                    <input type="text" placeholder="" name="mother_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Phone</label>
                                    <input type="number" placeholder="" name="mother_phone" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Occupation</label>
                                    <input type="text" placeholder="" name="mother_occupation" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Photo</label>
                                    <input type="file" placeholder="" name="mother_photo" class="form-control-file">
                                </div>
                                <!-- guardian starts here -->
                                 <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Guardian is *</label>
                                    <label for="guardian_is">Mother</label><input type="radio" placeholder="" value="Mother" name="guardian_is" class="form-radio"> 
                                    <label for="guardian_is">Father</label><input type="radio" placeholder="" value="Father" name="guardian_is"  class="form-radio">
                                    <label for="guardian_is">Other</label><input type="radio" placeholder="" value="Other" name="guardian_is" class="form-radio">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Name*</label>
                                    <input type="text" placeholder="" name="guardian_name" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Relation*</label>
                                    <input type="text" placeholder="" name="guardian_relation" class="form-control">
                                </div>
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Email*</label>
                                    <input type="email" placeholder="" name="guardian_email" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Photo</label>
                                    <input type="file" placeholder="" name="guardian_photo" class="form-control-file">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Phone</label>
                                    <input type="number" placeholder="" name="guardian_phone" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Occupation</label>
                                    <input type="text" placeholder="" name="guardian_occupation" class="form-control">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Guardian Address</label>
                                    <textarea class="form-control" name="guardian_address"></textarea>
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State</label>
                                    <select class="select2" name="guardian_state">
                                        <option value="">Please Select State </option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>District</label>
                                    <select class="select2" name="guardian_district">
                                        <option value="">Please Select District</option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin Code</label>
                                    <input type="number" name="guardian_pincode" placeholder="" class="form-control">
                                </div>
                            </div>
                          
                               <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Student Permanent Address</h3>
                            </div>
                            <div class="row">
                            	 <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="permanent_address"></textarea>
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State</label>
                                    <select class="select2" name="permanent_state">
                                        <option value="">Please Select State </option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>District</label>
                                    <select class="select2" name="permanent_district">
                                        <option value="">Please Select District</option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin Code</label>
                                    <input type="text" name="permanent_pincode" placeholder="" class="form-control">
                                </div>
                             
                               
                            </div>
                                  <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Student Current Address</h3>
                            </div>
                            <div class="row">
                                 <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="current_address"></textarea>
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State</label>
                                    <select class="select2" name="current_state">
                                        <option value="">Please Select State </option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>District</label>
                                    <select class="select2" name="current_district">
                                        <option value="">Please Select District</option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin Code</label>
                                    <input type="text" name="current_pincode" placeholder="" class="form-control">
                                </div>
                             
                               
                            </div>
                               <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Transport</h3>
                            </div>
                            <div class="row">
                              
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Route List</label>
                                    <select class="select2" name="route">
                                        <option value="">Please Select State </option>
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                    </select>
                                </div>
                            </div>
                             <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Miscellaneous Details</h3>
                            </div>
                            <div class="row">
                            	 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Bank Account Number</label>
                                    <input type="Number" name="account_no" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>IFSC Code</label>
                                    <input type="Number" name="ifsc" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>National identification Number</label>
                                    <input type="Number" name="nin" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Local identification Number</label>
                                    <input type="Number" name="lin"  placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>RTE</label>
                                    <label for="rte">Yes</label><input type="radio" name="rte" placeholder="" value="Yes" class="form-radio">
                                    <label for="rte">No</label><input type="radio" name="rte" placeholder="" value="No" class="form-radio">
                                </div>
                                 <div class="col-xl-6 col-lg-12 col-12 form-group">
                                    <label>Previous School Details</label>
                                    <textarea class="form-control" name="prev_school"></textarea>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-12 form-group">
                                    <label>Note</label>
                                   <textarea class="form-control" name="note"></textarea>
                                </div>
                            </div>
                              <hr style="color:#2fde">
                            <div class="item-title">
                                <h3>Upload Documents</h3>
                            </div>
                            <div class="row">

                            	<table>
                            		<tbody>
                            			<tr><th>#</th><th>Title</th><th>Documents</th><th>#</th><th>Title</th><th>Documents</th></tr>
                            			<tr><th>1</th><th><input type="text" name="d_title1"></th><th><input type="file" name="d_name1"></th><th>3</th><th><input type="text" name="d_title3"></th><th><input type="file" name="d_name3"></th></tr>
                            			<th>2</th><th><input type="text" name="d_title2"></th><th><input type="file" name="d_name2"></th><th>4</th><th><input type="text" name="d_title4"></th><th><input type="file" name="d_name4"></th></tr>
                            		</tbody>
                            	</table>
                            	<div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Submit</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                             
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->

               
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