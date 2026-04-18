<?php
if(isset($_POST['submit'])){
    $bg = $_POST['bg'];

    if($bg == ""){
        echo "Select blood group";
    }else{
        echo "Blood Group: ".$bg;
    }
}
?>