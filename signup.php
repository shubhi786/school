<?php 

session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding:0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background:url('img/bg_img_login.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            color:white;
            overflow: hidden;
        }

        form {
            transform: translate(20%,0);
        }

        .parent input {
            width:60%;
            background-color:transparent;
            border:none;
            border-radius:0px;
            border-bottom:1px solid #fff;
            -webkit-outline:none;
            outline:none;
        }

        .parent input:focus , .parent input:valid{
            background-color:transparent;
            color:white;
            outline:none;
        }

        .msg.error {
            color:red;
        }

        .msg.success {
            color:green;
        }

    </style>
</head>
<body>
    

    <section class="mt-5 pallete">
        <div class="heading">
            <h1 class="text-center">Admin Signup</h1>
        </div>

        <form action="" method="post" class="container form" onsubmit="return checknow()">
        <?php
            include('php/dbconfig.php');

            if(isset($_POST['signup']))
            {

            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $q = "SELECT * FROM users WHERE uname='$uname' ";

            $sql = $conn->query($q);

            if($sql->num_rows > 0)
            {
               echo "user already exists";
            }
            else
            {
                $q2 = "INSERT INTO users VALUES('0','$uname','$pass',now())";

                $sql2 = $conn->query($q2);

                if($sql2)
                {
                    echo "user registered";
                    header("Location:index.php");
                    $_SESSION['uname'] = $uname;
                }
                else
                {
                    echo "user not registered";
                }
            }

            }?>
            <div class="parent">
                <label for="name">Username</label>
                <input type="text" class="form-control uname" name="uname" max-length="20"/>
                <span class="msg"></span>            
            </div>

            <div class="parent">
                <label for="name">Password</label>
                <input type="password" class="form-control pass" name="pass"/>
                <span class="msg"></span>            
            </div>

            <input type="submit" class="btn btn-success mt-3" value="Signup" name="signup"/>

            <span ><p class="mt-3">If already a user, please <a href="login.php">Login</a></p></span>
        </form>
    </section>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        let form = document.querySelector('.form');
        let uname = document.querySelector('.uname');
        let pass = document.querySelector('.pass');
        let msg = document.querySelector('.msg');
        
        let unameval = uname.value.trim();
        let passval = pass.value.trim();
        let returnval = true;

        function checknow()
        {
            if(!isNaN(unameval))
            {
                showerror(uname,"Username cannot be a number");
                
            }
            else if(unameval == "")
            {
                showerror(uname,"Username must be filled");
            }
            else if(unameval.length < 2)
            {
                showerror(uname,"Username must be at least 2 characters");             
            }
            else
            {
                showsuccess(uname);
            }

            function showerror(input,message)
            {
                const inp = input.parentElement;
                const msg = inp.querySelector('.msg');

                msg.innerHTML = message;

                input.classList.add('error');
                msg.classList.add('error');

                returnval = false;
            }

            function showsuccess(input)
             {
               const inp = input.parentElement;
               const msg = inp.querySelector('.msg');

               msg.innerHTML = "";

               input.classList.add('success');               
               msg.classList.add('success');
               
             }

            return returnval;
        }

    </script>
</body>
</html>