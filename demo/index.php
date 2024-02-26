<?php
session_start();    //DV bao ve
if (!$_SESSION['isLogin']){
    //!$_SESSION: la co dinh
    //'isLogin': la tuy y
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
    <h2>List of Students</h2>
    <?php
        include"prcess_login.php";
        include"student_management.php";
    ?>
</body>
</html>