<?php
if(isset($_POST['submit'])){
    if(isset($_POST['degree'])){
        $degree = $_POST['degree'];
        echo "Selected degrees: ".implode(", ", $degree);
    }else{
        echo "Select at least one degree";
    }
}
?>