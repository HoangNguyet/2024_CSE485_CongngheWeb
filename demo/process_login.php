<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //Lay ra DL tu form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    //ktra CSDL
    if($user == 'admin' && $pass == '123'){
        session_start();
        $_SESSION['isLogin'] = $user; //Cap the
        header("Location: index.php");
        exit;
    } else {
        header("Location: login.php");
        exit;
    }
}