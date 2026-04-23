<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
    if(isset($_POST['submit'])){
        $currentpassword = $_REQUEST['currentpassword'];
        $newpassword = $_REQUEST['newpassword'];
        $retypepassword = $_REQUEST['retypepassword'];

        if($currentpassword == "" || $newpassword == "" || $retypepassword == ""){
            echo "All fields are required!";
        }else{
            if($currentpassword != $_SESSION['user']['password']){
                echo "Current password is incorrect!";
            }else{
                if($newpassword != $retypepassword){
                    echo "New passwords do not match!";
                }else{
                    $_SESSION['user']['password'] = $newpassword;
                    header('location: dashboard.php');
                }
            }
        }
    }else{
        header('location: changePassword.php');
    }
?>
