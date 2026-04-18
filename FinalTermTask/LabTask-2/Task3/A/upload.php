<?php
if(isset($_POST['submit'])){
    $dob = $_POST['dob'];

    if($dob == ""){
        echo "Null DOB";
    }else{
        echo "Your DOB is: ".$dob;
    }
}
?>