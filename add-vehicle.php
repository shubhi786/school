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
                    <h3>Add Vehicle</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add Vehicle</li>
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
                                $branch = $_POST['branch'];
                                $vehicle_code = $_POST['vehicle_code'];
                                $vehicle_name = $_POST['vehicle_name'];
                                $vehicle_no = $_POST['vehicle_no'];
                                $vehicle_type = $_POST['vehicle_type'];
                                $cost = $_POST['cost'];
                                $insurance_date = $_POST['insurance_date'];
                                $insurance_company = $_POST['insurance_company'];
                                $pollution_date = $_POST['pollution_date'];
                                $model_no = $_POST['model_no'];
                                $chassis_no = $_POST['chassis_no'];
                                $engine_no = $_POST['engine_no'];
                                $fuel_type = $_POST['fuel_type'];
                                $tyre = $_POST['tyre'];
                                $present_cost = $_POST['present_cost'];
                                $insurance_valid_till = $_POST['insurance_valid_till'];
                                $opening_mileage = $_POST['opening_mileage'];
                                $pollution_valid_till = $_POST['pollution_valid_till'];
                                $vehicle_status = $_POST['vehicle_status'];
                                


                                $query = "INSERT INTO vehicles VALUES('0','$vehicle_name','$vehicle_code','$vehicle_no','$vehicle_type','$cost','$chassis_no','$engine_no','$fuel_type','$tyre','$insurance_date','$insurance_company','$pollution_date','$model_no','$present_cost','$insurance_valid_till','$pollution_valid_till','$opening_mileage','$vehicle_status','$branch',now() ) ";
                                $run_query = $conn->query($query);

                                if($run_query)
                                {
                                    echo "<script>alert('date inserted');</script>";
                                }
                                else
                                {
                                    echo "<script>alert('date not inserted');</script>";
                                }
                            }
                         ?>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Branch *</label>
                                    <select class="select2" name="branch">
                                        <option value="">Please Select Branch *</option>
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
                                    <label>Vehicle Code <font color="red">*</font></label>
                                    <input type="text" placeholder="" class="form-control" name="vehicle_code">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Vehicle Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="vehicle_name">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Vehicle No. </label>
                                    <input type="text" placeholder="" class="form-control" name="vehicle_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Vehicle Type</label>
                                    <select class="select2" name="vehicle_type">
                                        <option value="">Please Select vehicle</option>
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Cost</label>
                                    <input type="text" placeholder="" class="form-control" name="cost">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Insurance Date</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="insurance_date">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ins. Company</label>
                                    <input type="text" placeholder="" class="form-control" name="insurance_company">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pollution Date</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="pollution_date">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Model No.</label>
                                    <input type="text" placeholder="" class="form-control" name="model_no">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Chassis No. </label>
                                    <input type="text" placeholder="" class="form-control" name="chassis_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Engine No. </label>
                                    <input type="text" placeholder="" class="form-control" name="engine_no">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fuel Type</label>
                                    <select class="select2" name="fuel_type">
                                        <option value="">Please Select Fuel Type</option>
                                        <option value="1">Pettrol</option>
                                        <option value="2">Desile</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Tyre</label>
                                    <select class="select2" name="tyre">
                                        <option value="">Please Select Tyre</option>
                                        <option value="1">Pettrol</option>
                                        <option value="2">Desile</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Present Cost</label>
                                    <input type="text" placeholder="" class="form-control" name="present_cost">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ins. Valid Till</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="insurance_valid_till">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Opening Mileage</label>
                                    <input type="text" placeholder="" class="form-control" name="opening_mileage">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pol. Valid Till</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="pollution_valid_till">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                   <label>Vehicle Satus</label>
                                   &nbsp;&nbsp;
                                   <input type="radio" class="form-radio" name="vehicle_status" value="1" style="margin-right: 0px;"> 
                                   <span>Active</span>&nbsp;
                                   <input type="radio" class="form-radio" name="vehicle_status" value="0" style="margin-right: 0px;"> 
                                   <span>Inactive</span> 
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
                                <h3>All Vehicles</h3>
                            </div>
                            </div>
                        
                       
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Vehicle Name</label>
                                            </div>
                                        </th>
                                        <th>Vehicle No.</th>
                                        <th>Vehicle Code</th>
                                        <th>Vehicle Type</th>
                                        <th>Branch</th>
                                        <th>Cost</th>
                                        <th>Model No.</th>
                                        <th>Engine No.</th>
                                        <th>Chassis No.</th>
                                        <th>Fuel Type</th>
                                        <th>Tyre</th>
                                        <th>Insurance Date</th>
                                        <th>Insurance Valid Till</th>
                                        <th>Pollution Date</th>
                                        <th>Pollution Valid till</th>                                        
                                        <th>Present Cost</th>
                                        <th>Opening Mileage</th>
                                        <th>Vehicle Status</th>
                                        <th>date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        include('php/dbconfig.php');

                                        $q = "SELECT * FROM vehicles";

                                    $sql = $conn->query($q);

                                    if($sql->num_rows > 0)
                                    {
                                        while($rows = $sql->fetch_assoc())
                                        {?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $rows['vehicle_name']; ?></label>
                                            </div>
                                        </td>
                                        <td><?php echo $rows['vehicle_no']; ?></td>
                                        <td><?php echo $rows['vehicle_code']; ?></td>
                                        <td><?php echo $rows['vehicle_type']; ?></td>
                                        <td><?php echo $rows['branch_name']; ?></td>
                                        <td><?php echo $rows['cost']; ?></td>
                                        <td><?php echo $rows['model_no']; ?></td>
                                        <td><?php echo $rows['engine_no']; ?></td>
                                        <td><?php echo $rows['chassis_no']; ?></td>
                                        <td><?php echo $rows['fuel_type']; ?></td>
                                        <td><?php echo $rows['tyre']; ?></td>
                                        <td><?php echo $rows['insurance_date']; ?></td>
                                        <td><?php echo $rows['insurance_valid_till']; ?></td>
                                        <td><?php echo $rows['pollution_date']; ?></td>
                                        <td><?php echo $rows['pollution_valid_till']; ?></td>
                                        <td><?php echo $rows['present_cost']; ?></td>
                                        <td><?php echo $rows['opening_mileage']; ?></td>
                                        <td><?php echo $rows['vehicle_status']; ?></td>
                                        <td><?php echo $rows['date_']; ?></td>
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
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