<?php session_start(); ?>
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
        }

        .parent input:focus , .parent input:valid {
            background-color:transparent;
            color:white;
        }

    </style>
</head>
<body>
    

    <section class="mt-5 pallete">
        <div class="heading">
            <h1 class="text-center">Admin Login</h1>
        </div>

        <form action="" method="post" class="container">
        <?php
            include('php/dbconfig.php');

            if(isset($_POST['login']))
            {

            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $q = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass' ";

            $sql = $conn->query($q);

            if($sql->num_rows > 0)
            {
                header('location:index.php');
                $_SESSION['uname'] = $uname;
            }
            else
            {
                echo "User not found";
            }

            }?>
            <div class="parent">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="uname" max-length="20"/>                
            </div>

            <div class="parent">
                <label for="name">Password</label>
                <input type="password" class="form-control" name="pass"/>
            </div>

            <input type="submit" class="btn btn-success mt-3" value="Login" name="login"/>

            <span ><p class="mt-3">If already a user, please <a href="signup.php">Signup</a></p></span>
        </form>
    </section>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


