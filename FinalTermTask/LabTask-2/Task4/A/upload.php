<?php
if(isset($_POST['submit'])){
    $gender = $_POST['gender'];

    if($gender == ""){
        echo "Select gender";
    }else{
        echo "Your gender is: ".$gender;
    }
}
?>