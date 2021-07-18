<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Leaving Certificate</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
      <!--Css2-->
     <link rel="stylesheet" href="css2/animation.css">

    <style>
    * {
        margin:0px;
        padding:0px;
    }
      
        
    </style>
</head>
<body>


    <button id="print_now" class="btn btn-primary mx-3 my-3" style="width:100px;height:50px;">Print Now</button>

    
    

    <section class="p-5" id="print_area" style="padding:20px;">
        <div class="canvas p-3" style="outline:2px solid black;font-family:algerian;text-transform:uppercase;padding:15px;">
            <div class="mt-4" style="text-align:center;margin-top:10px;">
                <h1 class="text-center" style="font-size:60px;">Chanakaya International School</h1>
                <p class="text-center">Dakoha-Talhan Road, Jalandhar</p>
            </div>

            <?php 
                include('php/dbconfig.php');

                $roll_no_get = $_GET['rollno'];
                $session_name_get = $_GET['session_name'];
                $class_get = $_GET['class'];
                $s_name_get = $_GET['s_name'];

                if(isset($roll_no_get) && isset($session_name_get) && isset($class_get) && isset($s_name_get) )
                {        

                $q = "SELECT * FROM admission WHERE Roll_Number='$roll_no_get' AND Class='$class_get' AND Student_Fname='$s_name_get' AND session_name='$session_name_get' ";

                            $sql = $conn -> query($q);

                            if($sql->num_rows > 0)
                            {
                                while($rows = $sql->fetch_assoc())
                                {
            ?>
            <div class="student_info p-5 text-center" style="text-align:center">
                This is to certify that Mr./Ms. <span class="" style="font-size:25px;"><?php echo $rows['Student_Fname']; ?> <?php echo $rows['Student_Lname']; ?></span>. Admission No. <span class="" style="font-size:25px;"><?php echo $rows['Admission_No']; ?></span> And Date of Birth
                <span class="" style="font-size:25px;"><?php echo $rows['Date_of_birth']; ?></span>. <br/> has studied in this institution from <span class="" style="font-size:25px;"><?php echo $rows['Admission_Date']; ?></span> to <span class="" ><form action=""><input  value="<?php echo date('d-m-Y'); ?>" style="font-size:25px;width:150px;border:none;border-bottom:1px solid #000;outline:none;height:20px;" type="text"></span>
                . <br/> The student bears good morale and exhibited good behaviour for the duration of their courses. <br/>The student has neither displayed any violence or anti-social behaviour towards others.

                
            </div>
            <?php
                        }
                    }
                }
             ?>

            <div class="footer p-4" style="position:relative; margin-top:5%;">
               <div>
                <h3 class="">Pupil's signature</h3><br/>

                <span class="" style=""> ______________________________</span>
               </div>

               <div class="" style="position:absolute;right:10px;bottom:60%;">
                <h3 class="">Principal's signature</h3><br/>

                <span class="" style=""> ______________________________</span>
               </div>

               <div class="mt-5">
                <h3 class="">Date OF issue</h3>

                <span class="" style="font-size:25px;"><?php echo date('d-m-Y'); ?></span>
               </div>
            </div>

        </div>
    </section>













    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script>
        let print_elem = document.getElementById('print_now');
        let print_area = document.getElementById('print_area');

        print_elem.addEventListener('click', function()
        {   
            let area = window.open('', '', 'width=900,height=650');
            area.document.write(print_area.innerHTML);
            area.print();
            window.print();
        // var WinPrint = window.open('', '', 'width=900,height=650');
        // WinPrint.document.write(print_area.innerHTML);
        // WinPrint.document.close();
        // WinPrint.focus();
        // WinPrint.print();
        // WinPrint.close();
        });
    </script>
</body>
</html>