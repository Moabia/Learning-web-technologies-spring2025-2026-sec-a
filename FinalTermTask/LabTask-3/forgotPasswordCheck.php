<?php
    session_start();
    if(isset($_POST['submit'])){
        $email = $_REQUEST['email'];

        if($email == ""){
            echo "Email is required!";
        }else{
            if($email == $_SESSION['user']['email']){
                echo "Your password is: ".$_SESSION['user']['password'];
            }else{
                echo "Email not found!";
            }
        }
    }else{
        header('location: forgotPassword.php');
    }
?>
