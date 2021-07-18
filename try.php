<?php 

include("php/dbconfig.php");

if(isset($_POST['submit']))
{
        $father_name = 'trying';
        $father_phone = 'trying';
        $father_occupation = 'trying';
        $father_photo = 'trying';
        $mother_name = 'trying';
        $mother_phone = 'trying';
        $mother_occupation = 'trying';
        $mother_photo = 'trying';

    $query_to_parents = "INSERT INTO parents VALUES('0','$session_name','$roll_no','$class','$father_name','$father_phone','$father_occupation','$folder_father_photo','$mother_name','$mother_phone','$mother_occupation','$folder_mother_photo',now() ) ";

    $insert_vals_parents = $conn->query($query_to_parents);
    

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>