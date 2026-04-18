<?php


if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Null name";
    }else{
        echo "Your Email is: ".$email;
    }
}

?>
