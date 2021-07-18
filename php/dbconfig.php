<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $db = "school";

    $conn = mysqli_connect($hostname,$user,$pass,$db);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }


 ?>