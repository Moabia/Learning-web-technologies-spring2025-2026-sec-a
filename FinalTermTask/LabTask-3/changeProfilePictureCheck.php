<?php
    session_start();
    if(!isset($_SESSION['loggedIn'])){
        header('location: login.php');
    }
    if(isset($_POST['submit'])){
        if($_FILES['picture']['name'] == ""){
            echo "Please choose a picture!";
        }else{
            $pictureName = $_FILES['picture']['name'];
            $pictureTmp = $_FILES['picture']['tmp_name'];
            $uploadPath = 'uploads/'.$pictureName;
            move_uploaded_file($pictureTmp, $uploadPath);
            $_SESSION['user']['picture'] = $uploadPath;
            header('location: viewProfile.php');
        }
    }else{
        header('location: changeProfilePicture.php');
    }
?>
