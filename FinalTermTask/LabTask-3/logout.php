<?php
    session_start();
    unset($_SESSION['loggedIn']);
    unset($_SESSION['loggedUser']);
    //session_destroy();
    setcookie('remember', '', time()-10, '/');
    header('location: login.php');
?>
