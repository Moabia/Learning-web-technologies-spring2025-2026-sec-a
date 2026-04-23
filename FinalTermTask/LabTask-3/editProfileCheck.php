<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];

        if($name == "" || $email == ""){
            echo "Name and Email are required!";
        }else{
            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['gender'] = $gender;
            $_SESSION['user']['dob'] = $dob;
            header('location: viewProfile.php');
        }
    }else{
        header('location: editProfile.php');
    }
?>
