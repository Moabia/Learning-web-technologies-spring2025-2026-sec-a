<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $remember = isset($_REQUEST['remember']) ? $_REQUEST['remember'] : '';

        if($username == "" || $password == ""){
            echo "null username/password";
        }else{
            if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
                $_SESSION['loggedIn'] = true;
                $_SESSION['loggedUser'] = $username;
                if($remember == "yes"){
                    setcookie('remember', $username, time()+1000, '/');
                }
                header('location: dashboard.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: login.php');
    }
?>
