<?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob_dd'].'/'.$_REQUEST['dob_mm'].'/'.$_REQUEST['dob_yyyy'];

        if($name == "" || $email == "" || $username == "" || $password == "" || $confirmpassword == ""){
            echo "All fields are required!";
        }else{
            if($password != $confirmpassword){
                echo "Passwords do not match!";
            }else{
                $user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob, 'picture'=>''];
                $_SESSION['user'] = $user;
                header('location: login.php');
            }
        }
    }else{
        header('location: registration.php');
    }
?>
